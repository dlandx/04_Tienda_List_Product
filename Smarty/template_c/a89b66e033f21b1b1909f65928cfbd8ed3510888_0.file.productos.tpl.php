<?php
/* Smarty version 3.1.33, created on 2019-02-24 17:36:21
  from 'C:\xampp\htdocs\EX\Tienda\02_T_Productos\Smarty\template\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c72c805cddc34_57256748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a89b66e033f21b1b1909f65928cfbd8ed3510888' => 
    array (
      0 => 'C:\\xampp\\htdocs\\EX\\Tienda\\02_T_Productos\\Smarty\\template\\productos.tpl',
      1 => 1551026179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c72c805cddc34_57256748 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lista de productos</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    
    <body>
        <div class="content_product">        
            <h1>Listado de productos</h1>

            <div class="list_product">

                            <?php $_smarty_tpl->_assignInScope('result', '');?> 
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaProductos']->value, 'producto', false, NULL, 'pos', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('result', ((($_smarty_tpl->tpl_vars['result']->value).("<div class='c_list'><div class='c_btn'> 

        <button name='add' value=\"")).($_smarty_tpl->tpl_vars['producto']->value->getCod())).("\"'>Añadir</button></div>"));?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->getName_short();
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('result', ((($_smarty_tpl->tpl_vars['result']->value).("<div class='list'><div><span class='name'>")).($_prefixVariable1)).("</span>"));?>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['producto']->value->getPrecio();
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('result', ((($_smarty_tpl->tpl_vars['result']->value).("<span class='price'>")).($_prefixVariable2)).("</span></div>"));?>
        
        <?php $_smarty_tpl->_assignInScope('result', ($_smarty_tpl->tpl_vars['result']->value).("</div></div>"));?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
             </div>
            
            <div class="content_cesta">
                
            </div>
        </div>
    </body>
</html><?php }
}
