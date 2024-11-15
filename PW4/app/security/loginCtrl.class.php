<?php




require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/security/loginForm.class.php';
require_once $conf->root_path.'/app/security/loginResult.class.php';




/** Kontroler Strony logowania
 * @author Marcel Smarczyk
 *
 */
class loginCtrl {

	private $messages;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	private $hide_intro; //zmienna informująca o tym czy schować intro



	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->messages = new Messages();
		$this->form = new loginForm();
		$this->result = new loginResult();
		$this->hide_intro = false;
	}
	


	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->login = isset($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
		$this->form->pass = isset($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		} else { 
			$this->hide_intro = true; //przyszły pola formularza, więc - schowaj wstęp
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->login == "") {
			$this->messages->addError('Nie podano loginu');
		}
		if ($this->form->pass == "") {
			$this->messages->addError('Nie podano hasła');
		}
		
		
		return ! $this->messages->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
			global $conf;
			if ($this->form->login == "admin" && $this->form->pass == "admin") {
				session_start();
				$_SESSION['role'] = 'admin';
				header("Location: ".$conf->app_url.'/index.php');
				exit();
			} else{
				if ($this->form->login == "user" && $this->form->pass == "user") {
					session_start();
					$_SESSION['role'] = 'user';
					header("Location: ".$conf->app_url.'/index.php');
					exit();
				} else {
					$this->messages->addError('Niepoprawny login lub hasło');
				}

			}
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Logowanie');
		$smarty->assign('page_description','Zaloguj się aby korzystać z strony');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('messages',$this->messages);
		$smarty->assign('form',$this->form);
		$smarty->assign('result',$this->result);
		
		
		$smarty->display($conf->root_path.'/app/security/login.html');
	}
}
