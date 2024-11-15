<?php

include $conf->root_path.'/app/security/check.php';



require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcCredForm.class.php';
require_once $conf->root_path.'/app/CalcCredResult.class.php';




/** Kontroler kalkulatora Kredytowego
 * @author Marcel Smarczyk
 *
 */
class CalcCredCtrl {

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
		$this->form = new CalcCredForm();
		$this->result = new CalcCredResult();
		$this->hide_intro = false;
	}
	


	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->KwotaKredytu = isset($_REQUEST ['KwotaKredytu']) ? $_REQUEST ['KwotaKredytu'] : null;
		$this->form->Oprocentowanie = isset($_REQUEST ['Oprocentowanie']) ? $_REQUEST ['Oprocentowanie'] : null;
		$this->form->Lata = isset($_REQUEST ['Lata']) ? $_REQUEST ['Lata'] : null;
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		global $role;
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->KwotaKredytu ) && isset ( $this->form->Oprocentowanie ) && isset ( $this->form->Lata ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		} else { 
			$this->hide_intro = true; //przyszły pola formularza, więc - schowaj wstęp
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->KwotaKredytu == "") {
			$this->messages->addError('Nie podano Kwoty Kredytu');
		}
		if ($this->form->Oprocentowanie == "") {
			$this->messages->addError('Nie podano Oprocentowania');
		}
		if ($this->form->Lata == "") {
			$this->messages->addError('Nie podano Lat spłaty');
		}
		if (intval($this->form->KwotaKredytu) >= 200000) { // kwoty więkesze równe od 200k może obliczać tylko administrator
			if ($role != 'admin'){
				$this->messages->addError('Tylko administrator obliczać kwoty od 200k w górę!');
			}
		}





		
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->messages->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->KwotaKredytu )) {
				$this->messages->addError('Kwota kredytu nie jest liczbą');
			}
			
			if (! is_numeric ( $this->form->Oprocentowanie )) {
				$this->messages->addError('Oprocentowanie nie jest liczbą');
			}

			if (! is_numeric ( $this->form->Lata )) {
				$this->messages->addError('Lata nie jest liczbą');
			}
		}
		
		return ! $this->messages->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->KwotaKredytu = intval($this->form->KwotaKredytu);
			$this->form->Oprocentowanie = intval($this->form->Oprocentowanie);
			$this->form->Lata = intval($this->form->Lata);
			$this->messages->addInfo('Parametry poprawne.');
				
			//wykonanie operacji


						$miesiecznaStopaOprocentowania = ($this->form->Oprocentowanie/100) / 12; 
						$this->result->result =$this->form->KwotaKredytu * $miesiecznaStopaOprocentowania * (pow(1 + $miesiecznaStopaOprocentowania, $this->form->Lata  * 12)) / (pow(1 + $miesiecznaStopaOprocentowania, $this->form->Lata  * 12) - 1);
			
			$this->messages->addInfo('Wykonano obliczenia.');
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
		
		$smarty->assign('page_title','Kalkulator Kredytowy');
		$smarty->assign('page_description',' ');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('messages',$this->messages);
		$smarty->assign('form',$this->form);
		$smarty->assign('result',$this->result);
		
		
		$smarty->display($conf->root_path.'/app/calcCred.html');
	}
}
