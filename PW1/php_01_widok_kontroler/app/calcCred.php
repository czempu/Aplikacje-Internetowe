<?php

// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

	$x1 = $_REQUEST ['x1'];
	$y1 = $_REQUEST ['y1'];
	$z1 = $_REQUEST ['z1'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane

if ( ! (isset($x1) && isset($y1) && isset($z1) && isset($mode)))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane

	if ( $x1 == "") {
		$messages [] = 'Nie podano Kwoty Kredytu';
	}
	if ( $y1 == "") {
		$messages [] = 'Nie podano Oprocentowania';
	}
	if ( $z1 == "") {
		$messages [] = 'Nie podano Ile lat';
	}


//nie ma sensu walidować dalej gdy brak parametrów
if (empty( $messages )) {
		// sprawdzenie, czy $x i $y są liczbami całkowitymi
		if (! is_numeric( $x1 )) {
			$messages [] = 'Kwota Kredytu nie jest liczbą całkowitą';
		}
		
		if (! is_numeric( $y1 )) {
			$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
		}	
		if (! is_numeric( $z1 )) {
			$messages [] = 'Ilość lat nie jest liczbą całkowitą';
		}	
	
	}



// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) { // gdy brak błędów
	
		// r = miesięczna stopa oprocentowania
		$r = ($y1/100) / 12; 
		$result = $x1 * $r * (pow(1 + $r, $z1 * 12)) / (pow(1 + $r, $z1 * 12) - 1);
		$result='Miesięczna Rata: '.$result;	
	}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calcCred_view.php';
