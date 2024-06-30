<?php
/* Smarty version 4.3.2, created on 2024-06-03 19:53:04
  from 'C:\xampp\htdocs\projekt_km\app\views\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_665e03001b7508_85521022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2edd6db650a89f763ecb010aa893f5d724a4308f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_km\\app\\views\\register.tpl',
      1 => 1717437181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e03001b7508_85521022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1876748262665e03001ab366_91601564', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block 'content'} */
class Block_1876748262665e03001ab366_91601564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1876748262665e03001ab366_91601564',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
    <body class="u-body">
        <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
          <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 623px">
            <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Rejestracja</h1>
            
                <form class="pure-form pure-form-stacked" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" id="register_form">
                    <fieldset style="width: 300px; margin: auto;">
                        <label for="login">Login: </label>
                        <input type="text" name="login" placeholder="Login" style="color: black;"/>
                        
                        <label for="password">Hasło: </label>
                        <input type="password" name="password" placeholder="Hasło" style="color: black;"/>
                        
                        <label for="confirm_password">Potwierdź hasło: </label>
                        <input type="password" name="confirm_password" placeholder="Potwierdź hasło" style="color: black;"/>
                        
                        <label for="email">Email: </label>
                        <input type="email" name="email" placeholder="Email" style="color: black;"/>
                        
                        <label for="firstName">Imię: </label>
                        <input type="text" name="firstName" placeholder="Imię" style="color: black;"/>
                        
                        <label for="lastName">Nazwisko: </label>
                        <input type="text" name="lastName" placeholder="Nazwisko" style="color: black;"/>
                        
                        <button type="submit" class="pure-button pure-button-primary" style="background-color: #6e2aad; margin-top: 5px;">Zarejestruj</button>
                    </fieldset>
                </form>  
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 20px auto 20px auto;"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
          </div>
        </section>
                
<?php
}
}
/* {/block 'content'} */
}
