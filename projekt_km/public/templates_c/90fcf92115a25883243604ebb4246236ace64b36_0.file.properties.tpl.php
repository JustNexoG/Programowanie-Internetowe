<?php
/* Smarty version 3.1.30, created on 2024-06-05 16:53:49
  from "C:\xampp\htdocs\projekt_km\app\views\properties.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66607bfd4c1437_50348028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90fcf92115a25883243604ebb4246236ace64b36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_km\\app\\views\\properties.tpl',
      1 => 1717438894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template.tpl' => 1,
    'file:property_list_partial.tpl' => 1,
  ),
),false)) {
function content_66607bfd4c1437_50348028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192204960866607bfd4c0f18_78141622', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_192204960866607bfd4c0f18_78141622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
<body class="u-body">
    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80" style="padding-bottom: 100px;">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-1" style="margin-bottom: 20px;">Nieruchomości</h1>
            <?php if (isset($_smarty_tpl->tpl_vars['logged_user']->value) && \core\RoleUtils::inRole("user")) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
property_insert" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 0;">Dodaj nieruchomość</a>
            <?php }?>
            <form id="property-search-form" class="pure-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
find_properties" onsubmit="ajaxPostForm('property-search-form', '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
find_properties', 'property-listings'); return false;">

                <fieldset>
                    <input type="text" id="address" name="address" placeholder="Wyszukaj nieruchomości" style="color: black; margin-top: 5px; width: 300px;" />
                    <input type="hidden" id="page" name="page" value="1" />
                    <button type="submit" class="pure-button pure-button-primary" style="background-color: #6e2aad; margin-top: 5px;">Wyszukaj</button>
                </fieldset>
            </form>
                
            <div id="property-listings" class="u-expanded-width u-list u-list-1">
                <?php $_smarty_tpl->_subTemplateRender("file:property_list_partial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>

                <div style="margin-top: 50px; position: relative;">
                    <?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?>
                        <a class="pure-button" href="<?php echo url(array('action'=>'property_list','page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
" title="Poprzednia strona" style="font-size: 200%; color: black; position: absolute; left: -50px;"><<i class="fas fa-angle-left"></i></a>
                    <?php }?>
                    <p style="font-size: 200%; position: absolute; right: 50%; margin-top: 0;">> <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 <</p>
                    <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['max_page']->value) {?>
                        <a class="pure-button" href="<?php echo url(array('action'=>'property_list','page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
" title="Następna strona" style="font-size: 200%; color: black; position: absolute; right: -50px;">><i class="fas fa-angle-right"></i></a>
                    <?php }?>
                </div>
        </div>
    </section>
</body>
<?php
}
}
/* {/block 'content'} */
}
