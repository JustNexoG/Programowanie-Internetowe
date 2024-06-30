<?php
/* Smarty version 3.1.30, created on 2024-06-11 19:39:12
  from "C:\xampp\htdocs\projekt_km\app\views\edit_user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66688bc0712c51_04014509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5afb717965c80e55333bbf4a9895a6a855269c95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_km\\app\\views\\edit_user.tpl',
      1 => 1717437556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template.tpl' => 1,
  ),
),false)) {
function content_66688bc0712c51_04014509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83165209966688bc0712045_59430429', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_83165209966688bc0712045_59430429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
      <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px">
        <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Edycja użytkownika</h1>
        <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
          <div class="u-repeater u-repeater-1" style="min-height: 450px">
            
            <form class="pure-form pure-form-stacked" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
update_user">
                <fieldset style="width: 100px; margin: auto;">
                    <label for="email">Email: </label>
                    <input type="email" name="email" placeholder="Email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
" style="color: black;"/>
                    
                    <label for="firstName">Imię: </label>
                    <input type="text" name="firstName" placeholder="Imię" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->firstName;?>
" style="color: black;"/>
                    
                    <label for="lastName">Nazwisko: </label>
                    <input type="text" name="lastName" placeholder="Nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lastName;?>
" style="color: black;"/>
                    
                    <label for="password">Nowe hasło: </label>
                    <input type="password" name="password" placeholder="Nowe hasło" style="color: black;"/>
                    
                    <label for="confirm_password">Potwierdź hasło: </label>
                    <input type="password" name="confirm_password" placeholder="Potwierdź hasło" style="color: black;"/>
                    
                    <button type="submit" class="pure-button pure-button-primary" style="background-color: #6e2aad; margin-top: 5px;">Zapisz</button>
                </fieldset>
                    <label for="not_mandatory" style="color: #6e2aad; text-align: center;">Zmiana hasła nie jest obowiązkowa, w razie braku zmiany proszę zostawić puste. </label>
            </form>  
            
            <?php if (isset($_smarty_tpl->tpl_vars['messages']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                    <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 0 auto 20px auto;"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
          </div>
        </div>
      </div>
    </section>
            
</body>

<?php
}
}
/* {/block 'content'} */
}
