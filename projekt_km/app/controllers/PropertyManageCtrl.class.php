<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Validator;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\PropertyManageForm;

class PropertyManageCtrl {

    private $form;

    public function __construct() {
        $this->form = new PropertyManageForm();
    }

    public function action_property_insert() {
        $this->generateView('add_property.tpl', 'Dodaj nieruchomość');
    }

    public function action_add_property() {
        $loggedUser = SessionUtils::load("logged_user", true);

        $this->validatePropertyForm();

        if (!App::getMessages()->isError()) {
            $userId = SessionUtils::load("user_id", true);
            App::getDB()->insert("properties", [
                "address" => $this->form->address,
                "description" => $this->form->description,
                "price" => $this->form->price,
                "type" => $this->form->type,
                "ownerId" => $userId,
                "datePosted" => date("Y-m-d H:i:s")
            ]);

            $property_id = App::getDB()->id();

            $this->saveImages($property_id);
            App::getRouter()->redirectTo('property_list/1');
        } else {
            $this->generateView('add_property.tpl', 'Dodaj nieruchomość');
        }
        $loggedUser = SessionUtils::load("logged_user", true);
        App::getSmarty()->assign("logged_user", $loggedUser);
    }

    public function action_property_edit() {
        $this->form->property_id = ParamUtils::getFromCleanURL(1);
        $property = App::getDB()->get("properties", "*", ["idProperty" => $this->form->property_id]);

        if (empty($property)) {
            App::getRouter()->redirectTo('property_list');
        } else {
            App::getSmarty()->assign("property", $property);
            $this->generateView('edit_property.tpl', 'Edytuj nieruchomość');
        }
    }

    public function action_update_property() {
        $this->form->property_id = ParamUtils::getFromPost("property_id");
        $userId = SessionUtils::load("user_id", true);

        $property = App::getDB()->get("properties", "*", ["idProperty" => $this->form->property_id]);

        if (!$property) {
            App::getRouter()->redirectTo('property_list/1');
            return;
        }

        if ($property["ownerId"] != $userId && !$this->isUserModerator($userId)) {
            App::getRouter()->redirectTo('property_list/1');
            return;
        }

        $this->validatePropertyForm();

        if (!App::getMessages()->isError()) {
            App::getDB()->update("properties", [
                "address" => $this->form->address,
                "description" => $this->form->description,
                "price" => $this->form->price,
                "type" => $this->form->type,
                "lastModifiedBy" => $userId,
                "lastModifiedDate" => date("Y-m-d H:i:s")
                    ], [
                "idProperty" => $this->form->property_id
            ]);

            $this->saveImages($this->form->property_id);
            App::getRouter()->redirectTo('property_list/1');
        } else {
            $property = App::getDB()->get("properties", "*", ["idProperty" => $this->form->property_id]);
            App::getSmarty()->assign("property", $property);
            $this->generateView('edit_property.tpl', 'Edytuj nieruchomość');
        }
    }

    public function action_delete_property() {
        $this->form->property_id = ParamUtils::getFromCleanURL(1);
        $userId = SessionUtils::load("user_id", true);

        $property = App::getDB()->get("properties", "*", ["idProperty" => $this->form->property_id]);

        if (!$property) {
            App::getRouter()->redirectTo('property_list/1');
            return;
        }

        if ($property["ownerId"] != $userId && !$this->isUserModerator($userId)) {
            App::getRouter()->redirectTo('property_list/1');
            return;
        }

        $images = App::getDB()->select("property_images", "*", ["property_id" => $this->form->property_id]);

        foreach ($images as $image) {
            if (file_exists($image['imagePath'])) {
                unlink($image['imagePath']);
            }
        }

        App::getDB()->delete("favorites", ["idProperty" => $this->form->property_id]);
        App::getDB()->delete("property_images", ["property_id" => $this->form->property_id]);
        App::getDB()->delete("properties", ["idProperty" => $this->form->property_id]);
        App::getRouter()->redirectTo('property_list/1');
    }

    private function validatePropertyForm() {
        $validator = new Validator();

        $this->form->address = $validator->validateFromRequest("address", [
            'required' => true,
            'required_message' => 'Adres jest wymagany.',
            'min_length' => 5,
            'validator_message' => 'Adres musi mieć przynajmniej 5 znaków.'
        ]);

        $this->form->description = $validator->validateFromRequest("description", [
            'required' => true,
            'required_message' => 'Opis jest wymagany.',
            'min_length' => 10,
            'validator_message' => 'Opis musi mieć przynajmniej 10 znaków.'
        ]);

        $this->form->price = $validator->validateFromRequest("price", [
            'required' => true,
            'required_message' => 'Cena jest wymagana.',
            'numeric' => true,
            'validator_message' => 'Cena musi być liczbą.'
        ]);

        $this->form->type = $validator->validateFromRequest("type", [
            'required' => true,
            'required_message' => 'Typ nieruchomości jest wymagany.'
        ]);
    }

    private function saveImages($property_id) {
        if (!empty($_FILES['images']['name'][0])) {
            $imageCount = count($_FILES['images']['name']);
            for ($i = 0; $i < $imageCount; $i++) {
                $imageName = $_FILES['images']['name'][$i];
                $imageTmpName = $_FILES['images']['tmp_name'][$i];
                $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);
                $uniqueImageName = uniqid('property_', true) . '.' . $imageExtension;
                $imagePath = "uploads/" . $uniqueImageName;

                if (move_uploaded_file($imageTmpName, $imagePath)) {
                    App::getDB()->insert("property_images", [
                        "property_id" => $property_id,
                        "imagePath" => $imagePath
                    ]);
                }
            }
        }
    }

    private function isUserModerator($userId) {
        $roles = App::getDB()->select("userrole", 
                ["[><]roles" => ["idRole" => "idRole"]], 
                ["roles.roleName"], 
                ["userrole.idUser" => $userId]);

        return in_array("moderator", array_column($roles, "roleName"));
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