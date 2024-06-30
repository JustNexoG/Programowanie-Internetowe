<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\ImageManageForm;

class ImageManageCtrl {
    
    private $form;

    public function __construct() {
        $this->form = new ImageManageForm();
    }

    public function action_remove_all_images() {
        $this->form->propertyId = ParamUtils::getFromPost("property_id");

        if (!$this->form->propertyId) {
            App::getMessages()->addMessage(new Message('Brak ID nieruchomości.', Message::ERROR));
            $this->generateView();
            return;
        }

        $userId = SessionUtils::load("user_id", true);
        $property = App::getDB()->get("properties", "*", ["idProperty" => $this->form->propertyId]);

        if (!$property) {
            App::getMessages()->addMessage(new Message('Nieruchomość nie istnieje.', Message::ERROR));
            $this->generateView();
            return;
        }

        if ($property["ownerId"] != $userId && !$this->isUserModerator($userId)) {
            App::getMessages()->addMessage(new Message('Nie masz uprawnień do usunięcia zdjęć.', Message::ERROR));
            $this->generateView();
            return;
        }

        $images = App::getDB()->select("property_images", "*", ["property_id" => $this->form->propertyId]);

        foreach ($images as $image) {
            $imagePath = $image['imagePath'];

            if (file_exists($imagePath)) {
                if (!unlink($imagePath)) {
                    App::getMessages()->addMessage(new Message('Nie udało się usunąć pliku: ' . $imagePath, Message::ERROR));
                }
            } else {
                App::getMessages()->addMessage(new Message('Plik nie istnieje: ' . $imagePath, Message::WARNING));
            }
        }

        App::getDB()->delete("property_images", ["property_id" => $this->form->propertyId]);

        $this->loadPropertyImages($this->form->propertyId);
        App::getSmarty()->assign("property", $property);
        App::getSmarty()->assign('page_title', "Edytuj nieruchomość");
        $this->generateView();
    }

    private function isUserModerator($userId) {
        $roles = App::getDB()->select("userrole", [
            "[><]roles" => ["idRole" => "idRole"]
        ], [
            "roles.roleName"
        ], [
            "userrole.idUser" => $userId
        ]);

        return in_array("moderator", array_column($roles, "roleName"));
    }

    private function loadPropertyImages($propertyId) {
        $propertyImages = App::getDB()->select("property_images", "*", ["property_id" => $propertyId]);
        App::getSmarty()->assign("property_images", $propertyImages);
    }

    private function generateView() {
        $loggedUser = SessionUtils::load("logged_user", true);
        App::getSmarty()->assign("logged_user", $loggedUser);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->display('edit_property.tpl');
    }
}
?>
