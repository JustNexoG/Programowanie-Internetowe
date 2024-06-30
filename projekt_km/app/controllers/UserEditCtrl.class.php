<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Validator;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\UserEditForm;

class UserEditCtrl {

    private $form;

    public function __construct() {
        $this->form = new UserEditForm();
    }

    public function action_user_edit() {
        $this->form->user_id = SessionUtils::load("user_id", true);
        
        if (!$this->form->user_id) {
            App::getRouter()->redirectTo('show_login');
            return;
        }

        $user = App::getDB()->get("users", "*", ["idUser" => $this->form->user_id]);

        if (!$user) {
            App::getRouter()->redirectTo('mainpage');
            return;
        }

        $this->form->email = $user["email"];
        $this->form->firstName = $user["firstName"];
        $this->form->lastName = $user["lastName"];

        $this->generateView('edit_user.tpl', 'Edycja użytkownika');
    }
    
    public function action_update_user() {
        $this->form->user_id = SessionUtils::load("user_id", true);

        if (!$this->form->user_id) {
            App::getRouter()->redirectTo('show_login');
            return;
        }

        $user = App::getDB()->get("users", "*", ["idUser" => $this->form->user_id]);

        if (!$user) {
            App::getRouter()->redirectTo('mainpage');
            return;
        }

        $this->validateUserForm();

        if (!App::getMessages()->isError()) {
            $userId = SessionUtils::load("user_id", true);
            
            $data = [
                "email" => $this->form->email,
                "firstName" => $this->form->firstName,
                "lastName" => $this->form->lastName,
                "lastModifiedBy" => $userId,
                "lastModifiedDate" => date("Y-m-d H:i:s"),
            ];

            if (!empty($this->form->password)) {
                $data["password"] = password_hash($this->form->password, PASSWORD_BCRYPT);
            }

            App::getDB()->update("users", $data, ["idUser" => $this->form->user_id]);

            $loggedUser = SessionUtils::load("logged_user", true);
            $loggedUser->email = $this->form->email;
            $loggedUser->firstName = $this->form->firstName;
            $loggedUser->lastName = $this->form->lastName;
            SessionUtils::store("logged_user", $loggedUser);

            App::getRouter()->redirectTo('mainpage');
        } else {
            $this->generateView('edit_user.tpl', 'Edycja użytkownika');
        }
    }

    private function validateUserForm() {
        $v = new Validator();

        $this->form->email = $v->validateFromPost("email", [
            'required' => true,
            'email' => true,
            'required_message' => 'Email jest wymagany.',
            'validator_message' => 'Podano nieprawidłowy adres email.'
        ]);

        $this->form->firstName = $v->validateFromPost("firstName", [
            'required' => true,
            'required_message' => 'Imię jest wymagane.',
            'min_length' => 1,
            'validator_message' => 'Nie podano imienia.'
        ]);

        $this->form->lastName = $v->validateFromPost("lastName", [
            'required' => true,
            'required_message' => 'Nazwisko jest wymagane.',
            'min_length' => 1,
            'validator_message' => 'Nie podano nazwiska.'
        ]);

        $this->form->password = $v->validateFromPost("password", [
            'min_length' => 4,
            'validator_message' => 'Hasło musi mieć przynajmniej 4 znaki.'
        ]);

        $this->form->confirm_password = $v->validateFromPost("confirm_password");
        
        $loggedUser = SessionUtils::load("logged_user", true);
        if (App::getDB()->has("users", ["AND" => ["email" => $this->form->email, "idUser[!]" => $loggedUser->idUser]])) {
            App::getMessages()->addMessage(new Message('Email już istnieje.', Message::ERROR));
        }
        
        if ($this->form->password !== $this->form->confirm_password) {
            App::getMessages()->addMessage(new Message('Hasła się nie zgadzają.', Message::ERROR));
        }
    }

    private function generateView($template, $page_title) {
        $loggedUser = SessionUtils::load("logged_user", true);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('page_title', $page_title);
        App::getSmarty()->assign('messages', App::getMessages()->getMessages());
        App::getSmarty()->assign("logged_user", $loggedUser);
        App::getSmarty()->display($template);
    }
}
?>
