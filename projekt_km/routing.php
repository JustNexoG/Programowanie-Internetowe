<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('mainpage');
App::getRouter()->setLoginRoute('show_login');


//Login
Utils::addRoute('show_login', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

//Register
Utils::addRoute('show_register', 'RegisterCtrl');
Utils::addRoute('register', 'RegisterCtrl');

//Tam gdzie są listy
Utils::addRoute('mainpage', 'PropertyListCtrl');
Utils::addRoute('property_list', 'PropertyListCtrl');
Utils::addRoute('find_properties', 'PropertyListCtrl');
Utils::addRoute('find_properties', 'PropertyListCtrl');

//Tu gdzie są detale
Utils::addRoute('property_details', 'PropertyDetailsCtrl');


//Usuwanie zdjęć w edycji
Utils::addRoute('remove_all_images', 'ImageManageCtrl', ['user','moderator']);

//Zarządzanie
Utils::addRoute('property_insert', 'PropertyManageCtrl', ['user','moderator']);
Utils::addRoute('delete_property', 'PropertyManageCtrl', ['user','moderator']);
Utils::addRoute('property_edit', 'PropertyManageCtrl', ['user','moderator']);
Utils::addRoute('update_property', 'PropertyManageCtrl', ['user','moderator']);
Utils::addRoute('add_property', 'PropertyManageCtrl', ['user']);

//Użytkownik edit
Utils::addRoute('user_edit', 'UserEditCtrl', ['user','moderator']);
Utils::addRoute('update_user', 'UserEditCtrl', ['user','moderator']);

//Ulubione
Utils::addRoute('add_to_favorites', 'FavoritesCtrl', ['user','moderator']);
Utils::addRoute('remove_from_favorites', 'FavoritesCtrl', ['user','moderator']);
Utils::addRoute('favorites', 'FavoritesCtrl', ['user','moderator']);