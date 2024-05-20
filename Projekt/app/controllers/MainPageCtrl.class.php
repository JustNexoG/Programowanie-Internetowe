<?php

namespace app\controllers;


use PDOException;

class MainPageCtrl {

	
	
	public function action_mainPage(){
		
		getSmarty()->display('MainPage.tpl');
	}
	
}
