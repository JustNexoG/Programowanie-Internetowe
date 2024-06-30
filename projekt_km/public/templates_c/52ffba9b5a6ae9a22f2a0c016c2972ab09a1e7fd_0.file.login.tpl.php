<?php
/* Smarty version 3.1.30, created on 2024-06-11 19:39:14
  from "C:\xampp\htdocs\projekt_km\app\views\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66688bc2aa8714_12633908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52ffba9b5a6ae9a22f2a0c016c2972ab09a1e7fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_km\\app\\views\\login.tpl',
      1 => 1717374517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template.tpl' => 1,
  ),
),false)) {
function content_66688bc2aa8714_12633908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178063204266688bc2aa8394_00063446', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_178063204266688bc2aa8394_00063446 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <body class="u-body">
	<section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
            <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 623px;">
              <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Logowanie</h1>
              
                <form class="pure-form pure-form-stacked" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">
                    <fieldset style="width: 100px; margin: auto;">
                        <label for="login">Login: </label>
                        <input type="text" name="login" id="login" placeholder="Login" style="color: black;" <?php if (isset($_smarty_tpl->tpl_vars['login']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"<?php }?>/>
                        <label for="password">Hasło: </label>
                        <input type="password" name="password" id="password" placeholder="Hasło" style="color: black;"/>
                        <button type="submit" class="pure-button pure-button-primary" style="background-color: #6e2aad; margin-top: 5px;">Zaloguj</button>
                    </fieldset>
                </form>  

                <div style="text-align: center;">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
show_register">Nie posiadasz konta? Zarejestruj się!</a>
                </div>
                        
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 20px auto 20px auto;"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
         
            </div>
        </section>
<?php
}
}
/* {/block 'content'} */
}
