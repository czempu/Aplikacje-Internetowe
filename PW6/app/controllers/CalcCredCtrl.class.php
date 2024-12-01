<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcCredForm;
use app\transfer\CalcCredResult;

/** Kontroler kalkulatora
 * @author Marcel Smarczyk
 *
 */
class CalcCredCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcCredForm();
		$this->result = new CalcCredResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->KwotaKredytu = getFromRequest('KwotaKredytu');
		$this->form->Oprocentowanie = getFromRequest('Oprocentowanie');
		$this->form->Lata = getFromRequest('Lata');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
        if (! (isset ( $this->form->KwotaKredytu ) && isset ( $this->form->Oprocentowanie ) && isset ( $this->form->Lata ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->KwotaKredytu == "") {
			getMessages()->addError('Nie podano Kwoty kredytu');
		}
		if ($this->form->Oprocentowanie == "") {
			getMessages()->addError('Nie podano Oprocentowania');
		}
        if ($this->form->Lata == "") {
			getMessages()->addError('Nie podano Lat');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $KwotaKredytu i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->KwotaKredytu )) {
				getMessages()->addError('Kwota Kredytu nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->Oprocentowanie )) {
				getMessages()->addError('Oprocentowanie nie jest liczbą całkowitą');
			}

            if (! is_numeric ( $this->form->Lata )) {
				getMessages()->addError('Lata nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function action_calcCredCompute(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->KwotaKredytu = intval($this->form->KwotaKredytu);
			$this->form->Oprocentowanie = intval($this->form->Oprocentowanie);
            $this->form->Lata = intval($this->form->Lata);
			getMessages()->addInfo('Parametry poprawne.');
				

                if(!inRole('admin') && $this->form->KwotaKredytu>=200000){
                    getMessages()->addError('Tylko administrator może wykonać tę operację');
                }   else {
                    $miesiecznaStopaOprocentowania = ($this->form->Oprocentowanie/100) / 12; 
                    $this->result->result =$this->form->KwotaKredytu * $miesiecznaStopaOprocentowania * (pow(1 + $miesiecznaStopaOprocentowania, $this->form->Lata  * 12)) / (pow(1 + $miesiecznaStopaOprocentowania, $this->form->Lata  * 12) - 1);        
                    getMessages()->addInfo('Wykonano obliczenia.');
                }

                if($this->form->KwotaKredytu<200000){
                    $miesiecznaStopaOprocentowania = ($this->form->Oprocentowanie/100) / 12; 
                    $this->result->result =$this->form->KwotaKredytu * $miesiecznaStopaOprocentowania * (pow(1 + $miesiecznaStopaOprocentowania, $this->form->Lata  * 12)) / (pow(1 + $miesiecznaStopaOprocentowania, $this->form->Lata  * 12) - 1);        
                    getMessages()->addInfo('Wykonano obliczenia.');
                }






		}
		
		$this->generateView();
	}
	
	public function action_calcCredShow(){
		getMessages()->addInfo('Witaj w kalkulatorze Kredytowym');
		$this->generateView();
	}
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Super hiper kalkulator kredytowy - role');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcCredView.tpl');
	}
}
