<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="page_type" content="np-template-header-footer-from-plugin">
        <title>{$page_title|default:"Tytuł domyślny"}</title>
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/nicepage.css" media="screen">
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/style.css" media="screen">
        <script class="u-script" type="text/javascript" src="{$conf->app_url}/assets/js/jquery.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="{$conf->app_url}/assets/js/nicepage.js" defer=""></script>
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|PT+Sans:400,400i,700,700i">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
        <link rel="stylesheet" href="{$conf->app_url}/assets/css/all.css">
        <script type="text/javascript" src="{$conf->app_url}/assets/js/functions.js"></script>

        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="{$page_title|default:'Tytuł domyślny'}">
        <meta property="og:type" content="website"> 
    </head>
    <body>
        <header class="u-clearfix u-header u-header" id="sec-08c3">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <a href="{$conf->action_root}mainpage" class="u-image u-logo u-image-1">
                  <img src="{$conf->app_url}/assets/images/logo.png" class="u-logo-image u-logo-image-1">
                </a>

                <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                    <div class="u-nav-container">
                        <ul class="u-nav u-unstyled u-nav-1">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}mainpage" style="padding: 10px 20px;">Strona Główna</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}property_list/1" style="padding: 10px 20px;">Nieruchomości</a></li>
                            {if not \core\RoleUtils::inAnyRole()}
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}show_login" style="padding: 10px 20px;">Logowanie</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}show_register" style="padding: 10px 20px;">Rejestracja</a></li>
                            {/if}
                            {if \core\RoleUtils::inAnyRole()}
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}favorites" style="padding: 10px 20px;">Ulubione</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}logout" style="padding: 10px 20px;">Wyloguj</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{$conf->action_root}user_edit">Zalogowany: {$logged_user->login}</a></li>
                            {/if}
                        </ul>
                    </div>
                </nav>
            </div>
        </header> 

        {block name=content} Treść domyślna. {/block}

        <footer class="u-align-center u-clearfix u-footer u-palette-2-base u-footer" id="sec-8349">
            <div class="u-clearfix u-sheet u-sheet-1">
                <p class="u-small-text u-text u-text-variant u-text-1">Copyright © 2024 Kewin Mazur</p>
            </div>
        </footer>
    </body>
</html>
