<?php
namespace app\controllers;

use app\forms\LoginForm;

class LoginCtrl {
    private $form;

    public function __construct() {
        $this->form = new LoginForm();
    }

    public function action_loginShow() {
        getSmarty()->assign('form', $this->form);
        getSmarty()->display('LoginView.tpl');
    }

    public function action_login() {
    $this->form->login = $_POST['login'];
    $this->form->password = $_POST['pass'];

    $login = hash('sha256', $this->form->login); // Hashowanie loginu

    $db = getDB();

    // Sprawdzanie, czy użytkownik istnieje
    $user = $db->get("users", [
        "idUser",
        "login",
        "password",
        "firstName",
        "lastName"
    ], [
        "login" => $login
    ]);

    if ($user) {
        error_log('User found: ' . print_r($user, true)); // Debugowanie użytkownika
        if (password_verify($this->form->password, $user['password'])) {
            $_SESSION['user_id'] = $user['idUser'];
            $_SESSION['user_login'] = $this->form->login; // Przechowuj oryginalny login użytkownika
            $_SESSION['user_name'] = $user['firstName'] . ' ' . $user['lastName'];

            // Pobieranie ról użytkownika z bazy danych
            $roles = $db->select("userrole", [
                "[>]roles" => ["idRole" => "idRole"]
            ], "roles.roleName", [
                "userrole.idUser" => $user['idUser']
            ]);

            $_SESSION['roles'] = $roles;

            // Logowanie debugowania
            error_log('Login successful for user: ' . $user['login']);
            error_log('Session data: ' . print_r($_SESSION, true)); // Debugowanie sesji

            // Przekierowanie na stronę główną
            header("Location: " . getConf()->action_root . "mainPage");
            exit();
        } else {
            getSmarty()->assign('msg', 'Błędny login lub hasło.');
            // Logowanie debugowania
            error_log('Password mismatch for user: ' . $user['login']);
            $this->action_loginShow();
        }
    } else {
        getSmarty()->assign('msg', 'Błędny login lub hasło.');
        // Logowanie debugowania
        error_log('User not found: ' . $login);
        $this->action_loginShow();
    }
}


    public function action_logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: " . getConf()->action_root . "mainPage");
        exit();
    }
}
?>
