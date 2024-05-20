<?php
/* Smarty version 4.3.2, created on 2024-05-21 00:46:55
  from 'C:\xampp\htdocs\Projekt\app\views\MainPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664bd2dfdee265_04627406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d72a1b53eabce6d026c6dd68fd9febd374e0134' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\MainPage.tpl',
      1 => 1716244940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664bd2dfdee265_04627406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300007229664bd2dfde9db2_30795873', 'top');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_300007229664bd2dfde9db2_30795873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_300007229664bd2dfde9db2_30795873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
mainPage">
	<legend>Opcje wyszukiwania</legend>
	
</form>
</div>	

<?php
}
}
/* {/block 'top'} */
}
