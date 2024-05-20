<?php
namespace app\controllers;

use app\forms\RegisterForm;

class RegisterCtrl {
    private $form;

    public function __construct() {
        $this->form = new RegisterForm();
    }

    public function action_registerShow() {
        getSmarty()->assign('form', $this->form);
        getSmarty()->display('RegisterView.tpl');
    }

    public function action_register() {
        $this->form->login = $_POST['login'];
        $this->form->password = $_POST['password'];
        $this->form->email = $_POST['email'];
        $this->form->firstName = $_POST['firstName'];
        $this->form->lastName = $_POST['lastName'];

        $login = hash('sha256', $this->form->login);
        $password = password_hash($this->form->password, PASSWORD_BCRYPT);

        $db = getDB();

        $userExists = $db->has("users", [
            "login" => $login
        ]);

        if ($userExists) {
            getSmarty()->assign('msg', 'Login jest już używany.');
            $this->action_registerShow();
            return;
        }

        $emailExists = $db->has("users", [
            "email" => $this->form->email
        ]);

        if ($emailExists) {
            getSmarty()->assign('msg', 'Email jest już używany.');
            $this->action_registerShow();
            return;
        }

        try {
            $db->insert("users", [
                "login" => $login,
                "password" => $password,
                "email" => $this->form->email,
                "firstName" => $this->form->firstName,
                "lastName" => $this->form->lastName
            ]);

            $userId = $db->id();

            $db->insert("userrole", [
                "idUser" => $userId,
                "idRole" => 2,
                "assignedDate" => date("Y-m-d H:i:s")
            ]);

            header("Location: " . getConf()->action_root . "registerSuccess");
        } catch (Exception $e) {
            getSmarty()->assign('msg', 'Błąd: ' . $e->getMessage());
            $this->action_registerShow();
        }
    }
}
?>
