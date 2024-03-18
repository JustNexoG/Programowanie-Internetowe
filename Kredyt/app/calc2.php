<?php

require_once dirname(__FILE__).'/../config.php';

$xx = isset($_REQUEST['xx']) ? $_REQUEST['xx'] : null;
$yy = isset($_REQUEST['yy']) ? $_REQUEST['yy'] : null;
$zz = isset($_REQUEST['zz']) ? $_REQUEST['zz'] : null;

if ( ! (isset($xx) && isset($yy)&& isset($zz))) {

	$messages2 [] = 'Brak danych.';
}


if ( $xx == "") {
	$messages2 [] = 'Brak danych w Kwocie kredytu.';
}
if ( $yy == "") {
	$messages2 [] = 'Brak danych w latach kredytu.';
}

if ( $zz == "") {
	$messages2 [] = 'Brak danych w oprocentowaniu.';
}

if (empty( $messages2 )) {
	
	if (! is_numeric( $xx )) {
		$messages2 [] = 'Proszę wpisać liczbę w kwocie';
	}
	
	if (! is_numeric( $yy )) {
		$messages2 [] = 'Proszę wpisać liczbę w latach';
	}
        
        if (! is_numeric( $zz )) {
		$messages2 [] = 'Proszę wpisać liczbę w oprocentowaniu';
	}

}


if (empty ( $messages2 )) { 
	

	$xx = intval($xx);
	$yy = intval($yy);
        $zz = intval($zz);
	
	$r = $zz/12;
        $n = $yy*12;
        $result2 = ($xx * ($r*(1+$r)^$n)/((1+$r)^$n - 1))/$n;
}

include 'calc_view.php';