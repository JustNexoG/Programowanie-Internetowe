<?php
require_once 'init.php';

getRouter()->setDefaultRoute('mainPage'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('mainPage',    'MainPageCtrl');
getRouter()->addRoute('loginShow',     'LoginCtrl');
getRouter()->addRoute('login',         'LoginCtrl');
getRouter()->addRoute('logout',        'LoginCtrl');
getRouter()->addRoute('registerShow',  'RegisterCtrl');
getRouter()->addRoute('register',      'RegisterCtrl');
getRouter()->addRoute('registerSuccess', 'RegisterSuccessCtrl');

getRouter()->go();
?>
