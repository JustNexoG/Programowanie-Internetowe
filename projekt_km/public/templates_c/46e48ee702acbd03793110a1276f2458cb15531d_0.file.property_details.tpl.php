<?php
/* Smarty version 3.1.30, created on 2024-06-05 16:53:52
  from "C:\xampp\htdocs\projekt_km\app\views\property_details.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66607c003982c9_28677636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e48ee702acbd03793110a1276f2458cb15531d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_km\\app\\views\\property_details.tpl',
      1 => 1717437427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template.tpl' => 1,
  ),
),false)) {
function content_66607c003982c9_28677636 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93240875066607c00397d12_15700129', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_93240875066607c00397d12_15700129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80">
        <div class="u-clearfix u-sheet u-sheet-1" style="min-height: 450px; text-align: center;">
            <h1 class="u-text u-text-1">Szczegóły nieruchomości</h1>
            <?php if (\core\RoleUtils::inRole("moderator") || (isset($_smarty_tpl->tpl_vars['logged_user']->value) && $_smarty_tpl->tpl_vars['property']->value->ownerId == $_smarty_tpl->tpl_vars['logged_user']->value->idUser)) {?>
                <a href="<?php echo url(array('action'=>'property_edit','id'=>$_smarty_tpl->tpl_vars['property']->value->idProperty),$_smarty_tpl);?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1 btn btn-primary" style="margin: 10px;">Edytuj</a>
                <a href="<?php echo url(array('action'=>'delete_property','id'=>$_smarty_tpl->tpl_vars['property']->value->idProperty),$_smarty_tpl);?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1 btn btn-danger" style="margin: 10px;" onclick="return confirm('Czy na pewno chcesz usunąć tę nieruchomość?');">Usuń</a>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['logged_user']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['is_favorite']->value) {?>
                    <a href="<?php echo url(array('action'=>'remove_from_favorites','id'=>$_smarty_tpl->tpl_vars['property']->value->idProperty),$_smarty_tpl);?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 10px;">Usuń z ulubionych</a>
                <?php } else { ?>
                    <a href="<?php echo url(array('action'=>'add_to_favorites','id'=>$_smarty_tpl->tpl_vars['property']->value->idProperty),$_smarty_tpl);?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 10px;">Dodaj do ulubionych</a>
                <?php }?>
            <?php }?>
            <div class="u-expanded-width u-list u-list-1" style="min-height: 450px">
                <div class="u-repeater u-repeater-1" style="min-height: 450px">
                    <?php if ($_smarty_tpl->tpl_vars['property']->value->images) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['property']->value->images, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                        <div class="u-container-style u-list-item u-repeater-item" style="margin-bottom: 75px; text-align: center;">
                            <div class="u-container-layout u-similar-container u-container-layout-1">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="" class="u-image-default u-preserve-proportions" style="margin-bottom: 25px; max-width: 100%; height: auto; max-height: 1080px;">
                            </div>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>
                    <div class="u-container-style u-list-item u-repeater-item" style="margin-top: 200px; margin-bottom: 75px; text-align: left;">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <h2 class="u-text u-text-2"><?php echo $_smarty_tpl->tpl_vars['property']->value->address;?>
</h2>
                            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3"><span style="text-decoration: underline;">Cena:</span> <?php echo $_smarty_tpl->tpl_vars['property']->value->price;?>
 PLN</h5>
                            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3"><span style="text-decoration: underline;">Typ:</span> <?php echo $_smarty_tpl->tpl_vars['property']->value->type;?>
</h5>
                            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3" style="text-decoration: underline;">Opis:</h5>
                            <h6 class="u-custom-font u-font-pt-sans u-text u-text-3" style="margin-top: 0; font-size: 2rem;"><?php echo $_smarty_tpl->tpl_vars['property']->value->description;?>
</h6>
                            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3"><span style="text-decoration: underline;">Data dodania:</span> <?php echo $_smarty_tpl->tpl_vars['property']->value->datePosted;?>
</h5>
                            
                        </div>
                    </div>
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
