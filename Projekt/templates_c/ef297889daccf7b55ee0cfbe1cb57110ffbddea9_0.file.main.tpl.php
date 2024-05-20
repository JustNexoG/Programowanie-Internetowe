<?php
/* Smarty version 4.3.2, created on 2024-05-21 00:46:55
  from 'C:\xampp\htdocs\Projekt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664bd2dfe55f43_09195325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef297889daccf7b55ee0cfbe1cb57110ffbddea9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\templates\\main.tpl',
      1 => 1716243526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664bd2dfe55f43_09195325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Aplikacja bazodanowa</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
</head>

<body style="margin: 20px;">

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
mainPage" class="pure-menu-heading pure-menu-link">Strona główna</a>
	<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="pure-menu-heading pure-menu-link">Wyloguj</a>
		<span class="pure-menu-heading pure-menu-link">(<?php echo $_smarty_tpl->tpl_vars['user_login']->value;?>
)</span>
	<?php } else { ?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registerShow" class="pure-menu-heading pure-menu-link">Zarejestruj</a>
		<span class="pure-menu-heading pure-menu-link">(Niezalogowany)</span>
	<?php }?>
</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_246141206664bd2dfe4f018_77352089', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_590888371664bd2dfe4f668_83615392', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1178808768664bd2dfe559e3_65593434', 'bottom');
?>


</body>

</html>
<?php }
/* {block 'top'} */
class Block_246141206664bd2dfe4f018_77352089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_246141206664bd2dfe4f018_77352089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_590888371664bd2dfe4f668_83615392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_590888371664bd2dfe4f668_83615392',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
<div class="messages error bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
<div class="messages info bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_1178808768664bd2dfe559e3_65593434 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_1178808768664bd2dfe559e3_65593434',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
