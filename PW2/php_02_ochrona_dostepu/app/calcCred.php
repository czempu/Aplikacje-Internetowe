<?php

// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów



function getParams(&$KwotaKredytu,&$Oprocentowanie,&$Lata){
	$KwotaKredytu = isset($_REQUEST['KwotaKredytu']) ? $_REQUEST['KwotaKredytu'] : null;
	$Oprocentowanie = isset($_REQUEST['Oprocentowanie']) ? $_REQUEST['Oprocentowanie'] : null;
	$Lata = isset($_REQUEST['Lata']) ? $_REQUEST['Lata'] : null;	
}


//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$KwotaKredytu,&$Oprocentowanie,&$Lata,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($KwotaKredytu) && isset($Oprocentowanie) && isset($Lata))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $KwotaKredytu == "") {
		$messages [] = 'Nie podano Kwoty Kredytu';
	}
	if ( $Oprocentowanie == "") {
		$messages [] = 'Nie podano Oprocentowania';
	}
	if ( $Lata == "") {
		$messages [] = 'Nie podano Lat spłaty';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $KwotaKredytu )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $Oprocentowanie )) {
		$messages [] = 'Druga wartość nie jest liczbą';
	}	

	if (! is_numeric( $Lata )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	


	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$KwotaKredytu,&$Oprocentowanie,&$Lata,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$KwotaKredytu = intval($KwotaKredytu);
	$Oprocentowanie = floatval($Oprocentowanie);
	$Lata = intval($Lata);
	//wykonanie operacji

	if ($KwotaKredytu >= 200000) { // kwoty więkesze równe od 200k może obliczać tylko administrator
		if ($role == 'admin'){
			$miesiecznaStopaOprocentowania = ($Oprocentowanie/100) / 12; 
			$result = $KwotaKredytu * $miesiecznaStopaOprocentowania * (pow(1 + $miesiecznaStopaOprocentowania, $Lata * 12)) / (pow(1 + $miesiecznaStopaOprocentowania, $Lata * 12) - 1);
		} else {
			$messages [] = 'Tylko administrator obliczać kwoty od 200k w górę!';
		}
	}
	else{
		$miesiecznaStopaOprocentowania = ($Oprocentowanie/100) / 12; 
		$result = $KwotaKredytu * $miesiecznaStopaOprocentowania * (pow(1 + $miesiecznaStopaOprocentowania, $Lata * 12)) / (pow(1 + $miesiecznaStopaOprocentowania, $Lata * 12) - 1);
	}



}

//definicja zmiennych kontrolera
$KwotaKredytu = null;
$Oprocentowanie = null;
$Lata = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($KwotaKredytu,$Oprocentowanie,$Lata);
if ( validate($KwotaKredytu,$Oprocentowanie,$Lata,$messages) ) { // gdy brak błędów
	process($KwotaKredytu,$Oprocentowanie,$Lata,$messages,$result);
}

include 'calcCred_view.php';



