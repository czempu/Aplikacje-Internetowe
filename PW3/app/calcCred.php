<?php

// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów



function getParams(&$form){
	$form['KwotaKredytu'] = isset($_REQUEST['KwotaKredytu']) ? $_REQUEST['KwotaKredytu'] : null;
	$form['Oprocentowanie'] = isset($_REQUEST['Oprocentowanie']) ? $_REQUEST['Oprocentowanie'] : null;
	$form['Lata'] = isset($_REQUEST['Lata']) ? $_REQUEST['Lata'] : null;	
}



//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($form['KwotaKredytu']) && isset($form['Oprocentowanie']) && isset($form['Lata']))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['KwotaKredytu'] == "") $msgs [] = 'Nie podano Kwoty Kredytu';
	if ( $form['Oprocentowanie'] == "") $msgs [] = 'Nie podano Oprocentowania';
	if ( $form['Lata'] == "") $msgs [] = 'Nie podano Lat spłaty';



		//nie ma sensu walidować dalej gdy brak parametrów
		if ( count($msgs)==0 ) {
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric( $form['KwotaKredytu'] )) $msgs [] = 'Kwota kredytu nie jest liczbą';
			if (! is_numeric( $form['Oprocentowanie'] )) $msgs [] = 'Oprocentowanie nie jest liczbą';
			if (! is_numeric( $form['Lata'] )) $msgs [] = 'Lata nie są liczbą';
		}
		
		if (count($msgs)>0) return false;
		else return true;
	}
		

function process(&$form,&$infos,&$msgs,&$result){
	global $role;

	
	//konwersja parametrów na int
	$form['KwotaKredytu'] = intval($form['KwotaKredytu']);
	$form['Oprocentowanie'] = intval($form['Oprocentowanie']);
	$form['Lata'] = intval($form['Lata']);

	//wykonanie operacji

	if ($form['KwotaKredytu'] >= 200000) { // kwoty więkesze równe od 200k może obliczać tylko administrator
		if ($role == 'admin'){
			$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
			$miesiecznaStopaOprocentowania = ($form['Oprocentowanie']/100) / 12; 
			$result =$form['KwotaKredytu'] * $miesiecznaStopaOprocentowania * (pow(1 + $miesiecznaStopaOprocentowania, $form['Lata'] * 12)) / (pow(1 + $miesiecznaStopaOprocentowania, $form['Lata'] * 12) - 1);
		} else {
			$msgs [] = 'Tylko administrator obliczać kwoty od 200k w górę!';
		}
	}
	else{
		$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
		$miesiecznaStopaOprocentowania = ($form['Oprocentowanie']/100) / 12; 
			$result =$form['KwotaKredytu'] * $miesiecznaStopaOprocentowania * (pow(1 + $miesiecznaStopaOprocentowania, $form['Lata'] * 12)) / (pow(1 + $miesiecznaStopaOprocentowania, $form['Lata'] * 12) - 1);
			}



}

//inicjacja zmiennych
$form = null;
$infos = array();
$msgs = array();
$result = null;
$hide_intro = false;

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($form);
if ( validate($form,$infos,$msgs,$hide_intro) ){
	process($form,$infos,$msgs,$result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator Kredytowy');
$smarty->assign('page_description',' ');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$msgs);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calcCred.html');
