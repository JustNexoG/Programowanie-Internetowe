<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\FavoritesForm;

class FavoritesCtrl {

    private $form;

    public function __construct() {
        $this->form = new FavoritesForm();
    }

    public function action_add_to_favorites() {
        $this->form->property_id = ParamUtils::getFromCleanURL(1);
        $this->form->user_id = SessionUtils::load("logged_user", true)->idUser;

        if ($this->form->property_id && $this->form->user_id) {
            App::getDB()->insert("favorites", [
                "idUser" => $this->form->user_id,
                "idProperty" => $this->form->property_id
            ]);

            App::getRouter()->redirectTo('property_list/1');
        } else {
            App::getMessages()->addMessage(new Message("Błąd dodawania do ulubionych", Message::ERROR));
            App::getRouter()->redirectTo('property_list/1');
        }
    }

    public function action_remove_from_favorites() {
        $this->form->property_id = ParamUtils::getFromCleanURL(1);
        $this->form->user_id = SessionUtils::load("logged_user", true)->idUser;

        if ($this->form->property_id && $this->form->user_id) {
            App::getDB()->delete("favorites", [
                "idUser" => $this->form->user_id,
                "idProperty" => $this->form->property_id
            ]);

            App::getRouter()->redirectTo('favorites');
        } else {
            App::getMessages()->addMessage(new Message("Błąd usuwania z ulubionych", Message::ERROR));
            App::getRouter()->redirectTo('favorites');
        }
    }

    public function action_favorites() {
        $this->form->user_id = SessionUtils::load("logged_user", true)->idUser;
        $loggedUser = SessionUtils::load("logged_user", true);

        if ($this->form->user_id) {
            $this->form->page = ParamUtils::getFromCleanURL(1, true, 'Błędna strona');
            $this->form->page = max(1, $this->form->page);
            $offset = ($this->form->page - 1) * 5;

            $favorite_count = App::getDB()->count("favorites", ["idUser" => $this->form->user_id]);
            $max_page = ceil($favorite_count / 5);
            $favorites = App::getDB()->select("favorites", [
                "[><]properties" => ["idProperty" => "idProperty"]
            ], [
                "properties.idProperty",
                "properties.address",
                "properties.price",
                "properties.ownerId"
            ], [
                "favorites.idUser" => $this->form->user_id,
                "LIMIT" => [$offset, 5]
            ]);

            foreach ($favorites as &$property) {
                $property_images = App::getDB()->select("property_images", "imagePath", ["property_id" => $property['idProperty']]);
                if (!empty($property_images)) {
                    $property['main_image'] = $property_images[0];
                } else {
                    $property['main_image'] = "/assets/images/default_image.jpg";
                }
                $property['is_favorite'] = true;
            }

            App::getSmarty()->assign('logged_user', $loggedUser);
            App::getSmarty()->assign("properties", $favorites);
            App::getSmarty()->assign("page", $this->form->page);
            App::getSmarty()->assign("max_page", $max_page);
            App::getSmarty()->assign('page_title', 'Ulubione');
            App::getSmarty()->display("properties.tpl");
        } else {
            App::getMessages()->addMessage(new Message("Błąd ładowania ulubionych", Message::ERROR));
            App::getRouter()->redirectTo('property_list');
        }
    }
}
?>
