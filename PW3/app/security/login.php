<?php
require_once dirname(__FILE__).'/../../config.php';
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

//pobranie parametrów
function getParamsLogin(&$form,&$infos,&$msgs,&$hide_intro){
	$form['login'] = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
	$form['pass'] = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validateLogin(&$form,&$infos,&$msgs,&$hide_intro){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($form['login']) && isset($form['pass']))) {
		//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['login'] == "") {
		$msgs []  = 'Nie podano loginu';
	}
	if ( $form['pass'] == "") {
		$msgs []   = 'Nie podano hasła';
	}

	//nie ma sensu walidować dalej, gdy brak parametrów
	if (count($msgs)>0) return false;

	// sprawdzenie, czy dane logowania są poprawne
	// - takie informacje najczęściej przechowuje się w bazie danych
	//   jednak na potrzeby przykładu sprawdzamy bezpośrednio
	if ($form['login'] == "admin" && $form['pass'] == "admin") {
		session_start();
		$_SESSION['role'] = 'admin';
		return true;
	}
	if ($form['login'] == "user" && $form['pass'] == "user") {
		session_start();
		$_SESSION['role'] = 'user';
		return true;
	}
	
	$msgs [] = 'Niepoprawny login lub hasło';
	return false; 
}

//inicjacja potrzebnych zmiennych
$form = array();
$msgs = array();
$infos = array();
$result = null;
$hide_intro = false;
// pobierz parametry i podejmij akcję
getParamsLogin($form,$infos,$msgs,$hide_intro);

if (!validateLogin($form,$infos,$msgs,$hide_intro)) {
	//jeśli błąd logowania to wyświetl formularz z tekstami z $messages



//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParamsLogin($form,$infos,$msgs,$hide_intro);

	$smarty = new Smarty();

	$smarty->assign('app_url',_APP_URL);
	$smarty->assign('root_path',_ROOT_PATH);
	$smarty->assign('page_title','Logowanie');
	$smarty->assign('page_description','Zaloguj się aby korzystać z strony');
	$smarty->assign('page_header','Logowanie');
	
	$smarty->assign('hide_intro',$hide_intro);
	
	//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
	$smarty->assign('form',$form);
	$smarty->assign('result',$result);
	$smarty->assign('messages',$msgs);
	$smarty->assign('infos',$infos);
	
	// 5. Wywołanie szablonu
	$smarty->display(_ROOT_PATH.'/app/security/login.html');
	
} else { 
	//ok przekieruj lub "forward" na stronę główną
	
	//redirect - przeglądarka dostanie ten adres do "przejścia" na niego (wysłania kolejnego żądania)
	header("Location: "._APP_URL);
	
	//"forward"
	//include _ROOT_PATH.'/index.php';
}