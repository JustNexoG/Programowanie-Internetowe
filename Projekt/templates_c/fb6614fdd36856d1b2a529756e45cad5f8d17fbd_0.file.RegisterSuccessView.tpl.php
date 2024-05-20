<?php
/* Smarty version 4.3.2, created on 2024-05-21 00:47:46
  from 'C:\xampp\htdocs\Projekt\app\views\RegisterSuccessView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664bd31223a680_82022220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb6614fdd36856d1b2a529756e45cad5f8d17fbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projekt\\app\\views\\RegisterSuccessView.tpl',
      1 => 1716043026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664bd31223a680_82022220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1040155947664bd3122379b0_50416813', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1040155947664bd3122379b0_50416813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1040155947664bd3122379b0_50416813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-u-1">
    <h2>Rejestracja zakończona sukcesem!</h2>
    <p>Twój użytkownik został pomyślnie zarejestrowany. Możesz teraz <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow">zalogować się</a>.</p>
</div>
<?php
}
}
/* {/block 'top'} */
}
