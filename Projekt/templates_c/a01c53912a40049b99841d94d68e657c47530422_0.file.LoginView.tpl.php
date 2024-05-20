<?php
/* Smarty version 4.3.2, created on 2024-05-21 00:47:18
  from 'C:\xampp\htdocs\Projekt\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664bd2f67c8b77_02508341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a01c53912a40049b99841d94d68e657c47530422' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\LoginView.tpl',
      1 => 1716044267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664bd2f67c8b77_02508341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_449701468664bd2f67c2d81_85861972', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_449701468664bd2f67c2d81_85861972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_449701468664bd2f67c2d81_85861972',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
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
			<input id="id_pass" type="password" name="pass" required/><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	
<?php
}
}
/* {/block 'top'} */
}
