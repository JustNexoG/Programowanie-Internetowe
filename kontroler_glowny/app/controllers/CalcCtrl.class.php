<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl
{

	private $form;
	private $result;


	public function __construct()
	{
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

	public function getParams()
	{
		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
		$this->form->z = getFromRequest('z');
	}

	public function validate()
	{

		if (!(isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) {

			return false;
		}


		if ($this->form->x == "") {
			getMessages()->addError('Nie podano liczby 1');
		}
		if ($this->form->y == "") {
			getMessages()->addError('Nie podano liczby 2');
		}
		if ($this->form->z == "") {
			getMessages()->addError('Nie podano liczby 3');
		}


		if (!getMessages()->isError()) {


			if (!is_numeric($this->form->x)) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}

			if (!is_numeric($this->form->y)) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}

			if (!is_numeric($this->form->z)) {
				getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		return !getMessages()->isError();
	}


	public function process()
	{

		$this->getParams();

		if ($this->validate()) {


			$this->form->x = intval($this->form->x);
			$this->form->y = intval($this->form->y);
			$this->form->z = intval($this->form->z);
			getMessages()->addInfo('Parametry poprawne.');


			$this->result->result = ($this->form->x * (($this->form->z / 100) / 12) * ((1 + (($this->form->z / 100) / 12)) ** ($this->form->y * 12))) / ((((1 + ($this->form->z / 12 / 100)) ** ($this->form->y * 12))) - 1);

			$this->result->result = number_format($this->result->result, 2, '.', '');

			getMessages()->addInfo('Wykonano obliczenia.');
		}

		$this->generateView();
	}



	public function generateView()
	{

		getSmarty()->assign('page_title', 'Przykład 06');
		getSmarty()->assign('page_description', 'Kolejne rozszerzenia dla aplikacja z jednym "punktem wejścia". Do nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw.');
		getSmarty()->assign('page_header', 'Kontroler główny');

		getSmarty()->assign('form', $this->form);
		getSmarty()->assign('res', $this->result);

		getSmarty()->display('CalcView.tpl');
	}
}
