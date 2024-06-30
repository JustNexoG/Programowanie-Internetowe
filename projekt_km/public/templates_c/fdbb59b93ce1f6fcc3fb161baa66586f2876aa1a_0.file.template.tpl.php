<?php
/* Smarty version 3.1.30, created on 2024-06-05 16:53:37
  from "C:\xampp\htdocs\projekt_km\app\views\templates\template.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66607bf19c84d7_16946593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdbb59b93ce1f6fcc3fb161baa66586f2876aa1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_km\\app\\views\\templates\\template.tpl',
      1 => 1717429101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66607bf19c84d7_16946593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="page_type" content="np-template-header-footer-from-plugin">
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/nicepage.css" media="screen">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/style.css" media="screen">
        <?php echo '<script'; ?>
 class="u-script" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.js" defer=""><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 class="u-script" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/nicepage.js" defer=""><?php echo '</script'; ?>
>
        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
        <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|PT+Sans:400,400i,700,700i">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/all.css">
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/functions.js"><?php echo '</script'; ?>
>

        <meta name="theme-color" content="#478ac9">
        <meta property="og:title" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? 'Tytuł domyślny' : $tmp);?>
">
        <meta property="og:type" content="website"> 
    </head>
    <body>
        <header class="u-clearfix u-header u-header" id="sec-08c3">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
mainpage" class="u-image u-logo u-image-1">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/logo.png" class="u-logo-image u-logo-image-1">
                </a>

                <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                    <div class="u-nav-container">
                        <ul class="u-nav u-unstyled u-nav-1">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
mainpage" style="padding: 10px 20px;">Strona Główna</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
property_list/1" style="padding: 10px 20px;">Nieruchomości</a></li>
                            <?php if (!\core\RoleUtils::inAnyRole()) {?>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
show_login" style="padding: 10px 20px;">Logowanie</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
show_register" style="padding: 10px 20px;">Rejestracja</a></li>
                            <?php }?>
                            <?php if (\core\RoleUtils::inAnyRole()) {?>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
favorites" style="padding: 10px 20px;">Ulubione</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" style="padding: 10px 20px;">Wyloguj</a></li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
user_edit">Zalogowany: <?php echo $_smarty_tpl->tpl_vars['logged_user']->value->login;?>
</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </nav>
            </div>
        </header> 

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81683082966607bf19c7e62_43287173', 'content');
?>


        <footer class="u-align-center u-clearfix u-footer u-palette-2-base u-footer" id="sec-8349">
            <div class="u-clearfix u-sheet u-sheet-1">
                <p class="u-small-text u-text u-text-variant u-text-1">Copyright © 2024 Kewin Mazur</p>
            </div>
        </footer>
    </body>
</html>
<?php }
/* {block 'content'} */
class Block_81683082966607bf19c7e62_43287173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Treść domyślna. <?php
}
}
/* {/block 'content'} */
}
