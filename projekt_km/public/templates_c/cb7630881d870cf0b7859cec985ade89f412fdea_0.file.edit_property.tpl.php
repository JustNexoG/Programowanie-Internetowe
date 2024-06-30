<?php
/* Smarty version 3.1.30, created on 2024-06-05 16:57:15
  from "C:\xampp\htdocs\projekt_km\app\views\edit_property.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66607ccb149a39_42400703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb7630881d870cf0b7859cec985ade89f412fdea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_km\\app\\views\\edit_property.tpl',
      1 => 1717434919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template.tpl' => 1,
  ),
),false)) {
function content_66607ccb149a39_42400703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162974649766607ccb149521_18967105', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_162974649766607ccb149521_18967105 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
        <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px">
            <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Edytuj nieruchomość</h1>
            <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
                <div class="u-repeater u-repeater-1" style="min-height: 450px">
                    <form class="pure-form pure-form-stacked" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
update_property" enctype="multipart/form-data" id="update_property_form">
                        <fieldset style="width: 100px; margin: auto;">
                            <label for="address">Adres: </label>
                            <input type="text" name="address" id="address" placeholder="Adres" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['address'];?>
" style="color: black;"/>
                            
                            <label for="description">Opis: </label>
                            <textarea id="description" name="description" class="pure-input-1-2" placeholder="Opis nieruchomości." rows="10" cols="50" style="color: black; height: auto; width: auto; resize: none;"><?php echo $_smarty_tpl->tpl_vars['property']->value['description'];?>
</textarea>
                            
                            <label for="price">Cena: </label>
                            <input type="text" name="price" id="price" placeholder="Cena" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['price'];?>
" style="color: black;"/>
                            
                            <label for="type">Typ nieruchomości: </label>
                            <input type="radio" id="wynajem" name="type" value="Wynajem" <?php if ($_smarty_tpl->tpl_vars['property']->value['type'] == 'Wynajem') {?>checked<?php }?> style="color: black; width: 10%; float:left;">
                            <label for="wynajem" style="color: white; width: 40%; float:left;">Wynajem</label>
                            <input type="radio" id="sprzedaz" name="type" value="Sprzedaż" <?php if ($_smarty_tpl->tpl_vars['property']->value['type'] == 'Sprzedaż') {?>checked<?php }?> style="color: black; width: 10%; float:left;">
                            <label for="sprzedaz" style="color: white;width: 40%; float:left;">Sprzedaż</label>
                            <input type="hidden" id="property_id" name="property_id" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['idProperty'];?>
"/>
                            
                            <label for="images">Dodaj nowe zdjęcia: </label>
                            <input type="file" name="images[]" id="images" multiple style="color: black;"/>
                            <button type="submit" class="pure-button pure-button-primary" style="background-color: #1cb841; margin-top: 5px;">Zapisz</button>
                        </fieldset>
                    </form>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
remove_all_images" style="text-align: center;">
                        <input type="hidden" name="property_id" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['idProperty'];?>
">
                        <button type="submit" class="pure-button pure-button-danger" style="background-color: #d22d35; margin-top: 10px;">Usuń wszystkie zdjęcia</button>
                    </form>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
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
