<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\PropertyDetailsForm;

class PropertyDetailsCtrl {

    private $form;

    public function __construct() {
        $this->form = new PropertyDetailsForm();
    }

    public function action_property_details() {
        $property_id = ParamUtils::getFromCleanURL(1);
        $loggedUser = SessionUtils::load("logged_user", true);

        $property = App::getDB()->get("properties", "*", ["idProperty" => $property_id]);

        if ($property) {
            $property_images = App::getDB()->select("property_images", "imagePath", ["property_id" => $property_id]);
            $property['images'] = $property_images;

            $is_favorite = false;
            if ($loggedUser) {
                $is_favorite = App::getDB()->has("favorites", [
                    "idUser" => $loggedUser->idUser,
                    "idProperty" => $property_id
                ]);
            }

            App::getSmarty()->assign("property", (object) $property);
            App::getSmarty()->assign("is_favorite", $is_favorite);
            App::getSmarty()->assign("logged_user", $loggedUser);
            App::getSmarty()->assign('page_title', 'Szczegóły nieruchomości');
            App::getSmarty()->display("property_details.tpl");
        } else {
            App::getMessages()->addMessage(new Message("Nieruchomość nie została znaleziona", Message::ERROR));
            App::getRouter()->redirectTo('property_list');
        }
    
    }
}
