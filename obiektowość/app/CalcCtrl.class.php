<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {

	private $msgs; 
	private $form; 
	private $result;
	private $hide_intro; 

	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	
	public function getParams(){
		$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
		$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
		$this->form->z = isset($_REQUEST ['z']) ? $_REQUEST ['z'] : null;
	}

	public function validate(){
		if ( ! (isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) {
			return false;
		} else {
			$this->hide_intro = true;
		}
		
		if ( $this->form->x == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ( $this->form->y == "") {
			$this->msgs->addError('Nie podano okresu spłaty');
		}	
		if ( $this->form->z == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		if (! $this->msgs->isError()) {
		
			if (! is_numeric( $this->form->x )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			if (! is_numeric( $this->form->y )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}	
			if (! is_numeric( $this->form->z )) {
				$this->msgs->addError( 'Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		return ! $this->msgs->isError();
	}
	public function process(){
		
		$this->getparams();
		
		if ($this->validate()) {
		
		$this->form->x = floatval($this->form->x);
		$this->form->y = floatval($this->form->y);
		$this->form->z = floatval($this->form->z);
		$this->msgs->addInfo('Parametry poprawne.');
		
		$rata = ($this->form->x /($this->form->y * 12));
		$rata_procent = $rata * $this->form->z / 100;
		$this->result->result=$rata_procent + $rata;
		
		$this->msgs->addInfo('Wykonano obliczenia.');
		}
	$this->generateView();
	}	
	
	public function generateView(){
		global $conf;
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);

		$smarty->assign('page_title','Kalkulator kredytowy zad 5');
		$smarty->assign('page_description','Obliczymy kretyz za ciebie za darmo');
		$smarty->assign('page_header','Obiekty w PHP');

		$smarty->assign('hide_intro',$this->hide_intro);

		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		$smarty->assign('msgs',$this->msgs);

		$smarty->display($conf->root_path.'/app/CalcView.html');
	}
}
