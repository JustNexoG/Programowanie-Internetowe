<?php
namespace app\controllers;

class RegisterSuccessCtrl {
    public function action_registerSuccess() {
        getSmarty()->display('RegisterSuccessView.tpl');
    }
}
?>
