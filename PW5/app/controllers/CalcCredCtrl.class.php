<?php
// W skrypcie definicji kontrolera nie trzeba dołączać żadnego skryptu inicjalizacji.
// Konfiguracja, Messages i Smarty są dostępne za pomocą odpowiednich funkcji.
// Kontroler ładuje tylko to z czego sam korzysta.

require_once 'CalcCredForm.class.php';
require_once 'CalcCredResult.class.php';

/** Kontroler kalkulatora
 * @author: Marcel Smarczyk
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
	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->KwotaKredytu = intval($this->form->KwotaKredytu);
			$this->form->Oprocentowanie = intval($this->form->Oprocentowanie);
            $this->form->Lata = intval($this->form->Lata);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			
            $miesiecznaStopaOprocentowania = ($this->form->Oprocentowanie/100) / 12; 
            $this->result->result =$this->form->KwotaKredytu * $miesiecznaStopaOprocentowania * (pow(1 + $miesiecznaStopaOprocentowania, $this->form->Lata  * 12)) / (pow(1 + $miesiecznaStopaOprocentowania, $this->form->Lata  * 12) - 1);

			


			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
		
		getSmarty()->assign('page_title','Kalkulator Kredytowy');
		getSmarty()->assign('page_description','Oblicz Miesięczną ratę kredytu');
		getSmarty()->assign('page_header','Kontroler główny');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcCredView.html'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}
