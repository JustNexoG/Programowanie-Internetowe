<?php
require_once dirname(__FILE__) . '/../config.php';

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH . '/app/security/check.php';

//pobranie parametrów
function getParams(&$kwota, &$lata, &$oprocentowanie)
{
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota, &$lata, &$oprocentowanie, &$messages)
{
	// sprawdzenie, czy parametry zostały przekazane
	if (!(isset($kwota) && isset($lata) && isset($oprocentowanie))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ($kwota == "") {
		$messages[] = 'Nie podano kwoty';
	}
	if ($lata == "") {
		$messages[] = 'Nie podano liczby lat';
	}
	if ($oprocentowanie == "") {
		$messages[] = 'Nie podano oprocentowania';
	}

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count($messages) != 0) return false;

	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (!is_numeric($kwota)) {
		$messages[] = 'Kwota kredytu nie jest poprawną liczbą dodatnią';
	}

	if (!is_numeric($lata)) {
		$messages[] = 'Liczba lat nie jest poprawną liczbą całkowitą dodatnią';
	}

	if (!is_numeric($oprocentowanie)) {
		$messages[] = 'Oprocentowanie nie jest poprawną wartością';
	}

	if (count($messages) != 0) return false;
	else return true;
}

function process(&$kwota, &$lata, &$oprocentowanie, &$messages, &$result)
{
	global $role;

	$kwota = floatval($kwota);
        $lata = intval($lata);
        $oprocentowanie = floatval($oprocentowanie);
        $liczbaMiesiecyNaRok = 12;
        $lacznaLiczbaMiesiecy = $lata * $liczbaMiesiecyNaRok;

        // Funkcja do obliczania wyniku
        function calculateResult($kwota, $oprocentowanie, $lacznaLiczbaMiesiecy, $liczbaMiesiecyNaRok) {
            return $kwota * pow(1 + (($oprocentowanie / 100) / $liczbaMiesiecyNaRok), $lacznaLiczbaMiesiecy) * (($oprocentowanie / 100) / $liczbaMiesiecyNaRok) / (pow(1 + (($oprocentowanie / 100) / $liczbaMiesiecyNaRok), $lacznaLiczbaMiesiecy) - 1);
        }

        if ($lata > 10 || $kwota >= 100000) {
            if ($role == 'admin') {
                $result = calculateResult($kwota, $oprocentowanie, $lacznaLiczbaMiesiecy, $liczbaMiesiecyNaRok);
            } else {
                $messages[] = 'Opcja lata powyżej 10, oraz kwota powyżej 100 tysięcy jest opcją premium/dla administratora. Proszę kupić premium za 100$, lub poprosić o dostęp do konta administratora.';
            }
        } else {
            $result = calculateResult($kwota, $oprocentowanie, $lacznaLiczbaMiesiecy, $liczbaMiesiecyNaRok);
        }
}

$kwota = null;
$lata = null;
$oprocentowanie = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota, $lata, $oprocentowanie);
if (validate($kwota, $lata, $oprocentowanie, $messages)) { // gdy brak błędów
	process($kwota, $lata, $oprocentowanie, $messages, $result);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';