<?php
/* Smarty version 3.1.30, created on 2024-06-05 16:53:49
  from "C:\xampp\htdocs\projekt_km\app\views\property_list_partial.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66607bfd620416_78742622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55d0bc2140fba4ba496078bd22dc61365d6b62b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_km\\app\\views\\property_list_partial.tpl',
      1 => 1717434035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66607bfd620416_78742622 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['properties']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
    <div class="u-container-style u-list-item u-repeater-item" style="margin-bottom: 50px; min-height: 375px;">
        <div class="u-container-layout u-similar-container u-container-layout-1">
            <?php if (isset($_smarty_tpl->tpl_vars['row']->value['main_image'])) {?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['main_image'];?>
" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" style="height: 400px; width: 550px;">
            <?php } else { ?>
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/default_image.jpg" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" style="height: 400px; width: 550px;">
            <?php }?>
            <h2 class="u-text u-text-2" style="margin-top: -400px; margin-left: 600px"><?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
</h2>
            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3" style="margin-left: 600px">Cena: <?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
 PLN</h5>
            <a href="<?php echo url(array('action'=>'property_details','id'=>$_smarty_tpl->tpl_vars['row']->value['idProperty']),$_smarty_tpl);?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 600px;">Więcej</a>
            <?php if (isset($_smarty_tpl->tpl_vars['logged_user']->value) && ($_smarty_tpl->tpl_vars['logged_user']->value->idUser == $_smarty_tpl->tpl_vars['row']->value['ownerId'] || \core\RoleUtils::inRole("moderator"))) {?>
                <a href="<?php echo url(array('action'=>'property_edit','id'=>$_smarty_tpl->tpl_vars['row']->value['idProperty']),$_smarty_tpl);?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 600px;">Edytuj</a>
                <a href="<?php echo url(array('action'=>'delete_property','id'=>$_smarty_tpl->tpl_vars['row']->value['idProperty']),$_smarty_tpl);?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 600px;" onclick="return confirm('Czy na pewno chcesz usunąć tę nieruchomość?')">Usuń</a>
            <?php }?>
        </div>
    </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
