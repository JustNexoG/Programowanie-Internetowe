<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Validator;
use app\forms\RegisterForm;

class RegisterCtrl {

    private $form;

    public function __construct() {
        $this->form = new RegisterForm();
    }

    public function validateRegister() {
        $v = new Validator();

        $this->form->login = $v->validateFromPost('login', [
            'required' => true,
            'required_message' => 'Login jest wymagany.',
            'min_length' => 4,
            'validator_message' => 'Login musi mieć przynajmniej 4 znaki.'
        ]);

        $this->form->password = $v->validateFromPost('password', [
            'required' => true,
            'required_message' => 'Hasło jest wymagane.',
            'min_length' => 4,
            'validator_message' => 'Hasło musi mieć przynajmniej 4 znaki.'
        ]);
        
        $this->form->confirm_password = $v->validateFromPost('confirm_password', [
            'required' => true,
            'required_message' => 'Potwierdzenie hasła jest wymagane.',
            'min_length' => 4,
            'validator_message' => 'Potwierdzenie hasła musi mieć przynajmniej 4 znaki.'
        ]);

        if ($this->form->password !== $this->form->confirm_password) {
            App::getMessages()->addMessage(new Message('Hasła się nie zgadzają.', Message::ERROR));
        }
        
        $this->form->email = $v->validateFromPost('email', [
            'required' => true,
            'required_message' => 'Email jest wymagany.',
            'email' => true,
            'validator_message' => 'Podano nieprawidłowy adres email.'
        ]);

        $this->form->firstName = $v->validateFromPost('firstName', [
            'required' => true,
            'required_message' => 'Imię jest wymagane.',
            'min_length' => 1,
            'validator_message' => 'Nie podano imienia.'
        ]);

        $this->form->lastName = $v->validateFromPost('lastName', [
            'required' => true,
            'required_message' => 'Nazwisko jest wymagane.',
            'min_length' => 1,
            'validator_message' => 'Nie podano nazwiska.'
        ]);
        
        if (App::getDB()->has("users", ["login" => hash('sha256', $this->form->login)])) {
            App::getMessages()->addMessage(new Message('Login już istnieje.', Message::ERROR));
        }

        if (App::getDB()->has("users", ["email" => $this->form->email])) {
            App::getMessages()->addMessage(new Message('Email już istnieje.', Message::ERROR));
        }

        return !App::getMessages()->isError();
    }

    public function action_show_register() {
        $this->generateView('register.tpl', 'Rejestracja');
    }

    public function action_register() {
        if ($this->validateRegister()) {
            $hashedLogin = hash('sha256', $this->form->login);
            $hashedPassword = password_hash($this->form->password, PASSWORD_BCRYPT);

            try {
                App::getDB()->pdo->beginTransaction();

                App::getDB()->insert("users", [
                    "login" => $hashedLogin,
                    "password" => $hashedPassword,
                    "email" => $this->form->email,
                    "firstName" => $this->form->firstName,
                    "lastName" => $this->form->lastName
                ]);

                $userId = App::getDB()->id();
                $roleId = App::getDB()->get("Roles", "idRole", ["roleName" => "user"]);
                App::getDB()->insert("UserRole", ["idUser" => $userId, "idRole" => $roleId]);

                App::getDB()->pdo->commit();
            } catch (\PDOException $e) {
                App::getDB()->pdo->rollBack();
                if ($e->getCode() == 23000) {
                    App::getMessages()->addMessage(new Message('Login już istnieje.', Message::ERROR));
                } else {
                    throw $e;
                }
            }
            App::getRouter()->redirectTo('show_login');
        } else {
            $this->generateView('register.tpl', 'Rejestracja');
        }
    }

    private function generateView($template, $page_title) {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('page_title', $page_title);
        App::getSmarty()->assign('messages', App::getMessages()->getMessages());
        App::getSmarty()->display($template);
    }
}

?>
