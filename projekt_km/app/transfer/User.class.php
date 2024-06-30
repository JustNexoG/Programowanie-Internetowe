<?php

namespace app\transfer;

class User {
    public $idUser;
    public $firstName;
    public $lastName;
    public $email;
    public $roles;
    public $login;

    public function __construct($idUser, $firstName, $lastName, $email, $roles, $login) {
        $this->idUser = $idUser;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->roles = $roles;
        $this->login = $login;
    }
}

?>
