<?php
/* Smarty version 3.1.33, created on 2019-02-05 23:03:19
  from 'C:\xampp\htdocs\T_Productos\Smarty\template\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5a0827c10576_11618844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81d6cfb4ce52685cdb88cc8d87d5a14dc2961386' => 
    array (
      0 => 'C:\\xampp\\htdocs\\T_Productos\\Smarty\\template\\productos.tpl',
      1 => 1549404129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5a0827c10576_11618844 (Smarty_Internal_Template $_smarty_tpl) {
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
                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listaProductos']->value, 'producto', false, NULL, 'pos', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
                                    <div class="c_list">
                    <div class="c_btn"><button type='submit' name='btn' value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['cod'];?>
">Añadir</button></div>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                                <?php if (($_smarty_tpl->tpl_vars['key']->value === "nombre_corto")) {?>
                            <div class="list"><span class="name"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
                        <?php }?>

                        <?php if (($_smarty_tpl->tpl_vars['key']->value === "PVP")) {?>
                            <span class="price"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span></div>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            
            <div class="content_cesta">
                
            </div>
        </div>
    </body>
</html><?php }
}
