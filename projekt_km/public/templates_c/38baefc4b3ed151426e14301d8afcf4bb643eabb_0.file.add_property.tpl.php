<?php
/* Smarty version 4.3.2, created on 2024-06-03 02:26:08
  from 'C:\xampp\htdocs\projekt_km\app\views\add_property.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_665d0da0821637_26569690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38baefc4b3ed151426e14301d8afcf4bb643eabb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_km\\app\\views\\add_property.tpl',
      1 => 1717374334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665d0da0821637_26569690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276815833665d0da0818aa2_35691998', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "template.tpl");
}
/* {block 'content'} */
class Block_276815833665d0da0818aa2_35691998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_276815833665d0da0818aa2_35691998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
    <body class="u-body">
    
        <!-- Dodawanie nieruchomości -->
        <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
          <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px">
            <h1 class="u-text u-text-1" style="text-align: center; margin-bottom: 10px;">Dodaj nieruchomość</h1>
            <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
              <div class="u-repeater u-repeater-1" style="min-height: 450px">
                
                <form class="pure-form pure-form-stacked" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
add_property" enctype="multipart/form-data" id="add_property_form">
                    <fieldset style="width: 100px; margin: auto;">
                        <label for="address">Adres: </label>
                        <input type="text" name="address" id="address" placeholder="Adres" style="color: black;"/>
                        
                        <label for="price">Cena: </label>
                        <input type="text" name="price" id="price" placeholder="Cena" style="color: black;"/>
                        
                        <label for="type">Typ: </label>
                        <input type="radio" id="wynajem" name="type" value="Wynajem" style="color: black; width: 10%; float:left;">
                        <label for="wynajem" style="color: white; width: 40%; float:left;">Wynajem</label>

                        <input type="radio" id="sprzedaż" name="type" value="Sprzedaż" style="color: black; width: 10%; float:left;">
                        <label for="sprzedaż" style="color: white;width: 40%; float:left;">Sprzedaż</label>

                            
                        <label for="description">Opis: </label>
                        <textarea id="description" name="description" form="add_property_form" class="pure-input-1-2" placeholder="Opis nieruchomości." rows="10" cols="50" style="color: black; height: auto; width: auto; resize: none;"></textarea>
                        
                        <label for="images">Zdjęcia: </label>
                        <input type="file" name="images[]" id="images" multiple style="color: black;"/>
                        <button type="submit" class="pure-button pure-button-primary" style="background-color: #6e2aad; margin-top: 5px;">Zapisz</button>
                    </fieldset>
                </form>  
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <p style="background-color: #d22d35; padding: 3px 3px 3px 6px; width: 300px; border-radius: 3px; margin: 0 auto 20px auto;"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</p>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    
              </div>
            </div>
          </div>
        </section>
                
        
<?php
}
}
/* {/block 'content'} */
}
