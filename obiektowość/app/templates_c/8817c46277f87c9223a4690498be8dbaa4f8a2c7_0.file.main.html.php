<?php
/* Smarty version 4.3.2, created on 2024-04-09 00:23:19
  from 'C:\xampp\htdocs\php_05\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_66146e57c3e7c1_16275276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8817c46277f87c9223a4690498be8dbaa4f8a2c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05\\templates\\main.html',
      1 => 1712614976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66146e57c3e7c1_16275276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
	
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>	
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" >
	
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
 /vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
 /vendor/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
 /vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
 /vendor/lightcase/lightcase.css">
	
	<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_hide_intro.css">
	<?php }?>
	
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/softscroll.js"><?php echo '</script'; ?>
>

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">
	



	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
 /css/style.css">	
	
	<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"><?php echo '</script'; ?>
>
	
</head>
<body>
<body data-spy="scroll" data-target="#navbar-nav-header" class="static-layout">
	<div class="boxed-page ">
		<nav id="gtco-header-navbar" class="navbar navbar-expand-lg py-4 bg-white">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <span class="lnr lnr-moon"></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#app_content">Kalkulator</a>
                </li>				
			</ul>
		</div>
	</div>
</nav>

<!-- zdjecie z napisem-->
<div class="jumbotron d-flex align-items-center" style="background-image: url(img/pic03.jpg)">
  <div class="container text-center">
    <h1 class="display-2 mb-4"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<h6 class="display-8 mb-4"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</h6>
        <p>
            <a href="#app_content" class="btn btn-secondary " >Idź do formularza</a>
        </p>	
  </div>
</div>

<div id="app_content" class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8151770566146e57c3d975_76592732', 'content');
?>


</div>

<!-- !!!!!!!!!!footer -->
<footer class="mastfoot mb-3 bg-white py-4 border-top">
    <div class="inner container">
         <div class="row">
         	<div class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-center">
				<p>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200275696266146e57c3e149_63424805', 'footer');
?>

				</p>			
         		<p class="mb-0">Coppyrigth Kewin Mazur. HTML5UP</p>
         	</div>
		</div>
	</div>
</footer>

	<!-- External JS -->
	<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/bootstrap/popper.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/select2/select2.min.js "><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/owlcarousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/isotope/isotope.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/lightcase/lightcase.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/waypoints/waypoint.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/countTo/jquery.countTo.js"><?php echo '</script'; ?>
>

	<!-- Main JS -->
	<?php echo '<script'; ?>
 src="js/app.min.js "><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//localhost:35729/livereload.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_8151770566146e57c3d975_76592732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8151770566146e57c3d975_76592732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_200275696266146e57c3e149_63424805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_200275696266146e57c3e149_63424805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
