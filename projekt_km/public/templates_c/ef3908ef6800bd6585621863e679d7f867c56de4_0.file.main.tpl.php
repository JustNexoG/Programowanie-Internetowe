<?php
/* Smarty version 3.1.30, created on 2024-06-30 17:03:34
  from "C:\xampp\htdocs\projekt_km\app\views\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_668173c69fde69_20706148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef3908ef6800bd6585621863e679d7f867c56de4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt_km\\app\\views\\main.tpl',
      1 => 1719759805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template.tpl' => 1,
  ),
),false)) {
function content_668173c69fde69_20706148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1644802086668173c69fd209_39244583', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1644802086668173c69fd209_39244583 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  
<body data-home-page="main.tpl" data-home-page-title="Strona Główna" class="u-body"> 
    <section class="u-clearfix u-section-1" id="carousel_27ac">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="800" data-image-height="827">
                            <div class="u-container-layout u-container-layout-1"></div>
                        </div>
                        <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                            <div class="u-container-layout u-valign-middle u-container-layout-2" style="justify-content: start;">
                                <h1 class="u-text u-title u-text-1">Mieszkania/domy</h1>
                                <h5 class="u-text u-text-body-color u-text-2">na wynajem lub sprzedaż. Szukaj w tysiącach nieruchomości, a na pewno znajdziesz coś dla siebie!</h5>
                                <h4 class="u-text u-text-3">Kewin Mazur</h4>
                                <h4 class="u-text u-text-3">Jak już chcesz podkraść mi stronke na projekt i przerobić to zostaw follow na ig XD</h4>
                                <a href="https://www.instagram.com/justnexo/" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-palette-2-base u-btn-1">@justnexo</a>
                                <a href="mailto:kmaz@biuro.HomeHub.pl" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-palette-2-base u-btn-1">kmaz@biuro.HomeHub.pl</a>
                                <a href="tel:+48777777777" class="u-active-none u-btn u-button-style u-hover-none u-none u-text-palette-2-base u-btn-2">+48 777 777 777</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="u-clearfix u-palette-5-dark-3 u-section-2" id="carousel_fd80" style="padding-bottom: 100px;">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-1">Losowe nieruchomości</h1>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <?php
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
/default_image.jpg" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" style="height: 400px; width: 550px;">
                            <?php }?>
                            <h2 class="u-text u-text-2" style="margin-top: -400px; margin-left: 600px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['address'];?>
</h2>
                            <h5 class="u-custom-font u-font-pt-sans u-text u-text-3" style="margin-left: 600px">Cena: <?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
 PLN</h5>
                            <a href="<?php echo url(array('action'=>'property_details','id'=>$_smarty_tpl->tpl_vars['row']->value['idProperty']),$_smarty_tpl);?>
" class="u-active-white u-border-1 u-border-white u-btn u-button-style u-hover-white u-none u-text-active-palette-5-dark-3 u-text-body-alt-color u-text-hover-palette-5-dark-3 u-btn-1" style="margin-left: 600px;">Więcej</a>
                        </div>
                    </div>
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
