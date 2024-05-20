<?php
/* Smarty version 4.3.2, created on 2024-05-21 00:47:27
  from 'C:\xampp\htdocs\Projekt\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664bd2ffb3f6b8_31717523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02f43cf7a1efcc65d2709ace1906634007b4cd7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\RegisterView.tpl',
      1 => 1716042043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664bd2ffb3f6b8_31717523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1357719389664bd2ffb36ae0_68537270', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1357719389664bd2ffb36ae0_68537270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1357719389664bd2ffb36ae0_68537270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Rejestracja użytkownika</legend>
	<?php if ((isset($_smarty_tpl->tpl_vars['msg']->value))) {?>
	<p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
	<?php }?>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_login">Login: </label>
			<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" required/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">Hasło: </label>
			<input id="id_pass" type="password" name="password" required/><br />
		</div>
        <div class="pure-control-group">
			<label for="id_email">Email: </label>
			<input id="id_email" type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" />
		</div>
        <div class="pure-control-group">
			<label for="id_firstName">Imię: </label>
			<input id="id_firstName" type="text" name="firstName" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->firstName;?>
" />
		</div>
        <div class="pure-control-group">
			<label for="id_lastName">Nazwisko: </label>
			<input id="id_lastName" type="text" name="lastName" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lastName;?>
" />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Zarejestruj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
<?php
}
}
/* {/block 'top'} */
}
