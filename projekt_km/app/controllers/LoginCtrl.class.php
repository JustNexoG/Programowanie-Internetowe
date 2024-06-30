<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Validator;
use core\RoleUtils;
use core\SessionUtils;
use app\transfer\User;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function validateLogin() {
        $validator = new Validator();
        
        $this->form->login = $validator->validateFromRequest("login", [
            'required' => true,
            'required_message' => 'Login jest wymagany.',
        ]);
        
        if (!$validator->isLastOK()) {
            App::getMessages()->addMessage(new Message('Nie podano loginu.', Message::ERROR));
            return false;
        }

        $this->form->password = $validator->validateFromRequest("password", [
            'required' => true,
            'required_message' => 'Hasło jest wymagane.',
        ]);
        
        if (!$validator->isLastOK()) {
            App::getMessages()->addMessage(new Message('Nie podano hasła.', Message::ERROR));
            return false;
        }
        
        $hashedLogin = hash('sha256', $this->form->login);
        $user = App::getDB()->select("users", "*", ["login" => $hashedLogin]);
        
        if (!$user) {
            App::getMessages()->addMessage(new Message('Nieprawidłowy login lub hasło.', Message::ERROR));
            App::getSmarty()->assign('login', $this->form->login);
            return false;
        }
        
        if (password_verify($this->form->password, $user[0]['password'])) {
            $userRoles = App::getDB()->select("userrole", [
                "[><]roles" => ["idRole" => "idRole"]
            ], [
                "roles.roleName"
            ], [
                "userrole.idUser" => $user[0]["idUser"]
            ]);

            $roles = array_column($userRoles, "roleName");

            $userObj = new User(
                $user[0]["idUser"],
                $user[0]["firstName"],
                $user[0]["lastName"],
                $user[0]["email"],
                $roles,
                $this->form->login
            );

            SessionUtils::store("logged_user", $userObj);
            SessionUtils::store("user_id", $user[0]["idUser"]);

            foreach ($roles as $role) {
                RoleUtils::addRole($role);
            }
            
            App::getDB()->update("users", [
                "lastLogin" => date("Y-m-d H:i:s")
            ], [
                "idUser" => $user[0]["idUser"]
            ]);
            
            return true;
        } else {
            App::getMessages()->addMessage(new Message('Nieprawidłowy login lub hasło.', Message::ERROR));
            App::getSmarty()->assign('login', $this->form->login);
            return false;
        }
    }

    public function action_show_login() {
        if (RoleUtils::inAnyRole()) {
            App::getSmarty()->assign('page_title', 'Strona główna');
            App::getSmarty()->display('main.tpl');
        } else {
            App::getSmarty()->assign('page_title', 'Logowanie');
            App::getSmarty()->display('login.tpl');
        }
    }
    
    public function action_login() {
        if (RoleUtils::inAnyRole()) {
            App::getSmarty()->assign('page_title', 'Strona główna');
            App::getSmarty()->display('main.tpl');
        } else {
            if (!$this->validateLogin()) {
                App::getSmarty()->display('login.tpl');
            } else {
                App::getRouter()->redirectTo('mainpage');
            }
        }
    }
    
    public function action_logout() {
        if (RoleUtils::inAnyRole()) {
            session_destroy();
            App::getRouter()->redirectTo('mainpage');
        } else {
            App::getSmarty()->assign('page_title', 'Logowanie');
            App::getSmarty()->display('login.tpl');
        }
    }
}

?>
