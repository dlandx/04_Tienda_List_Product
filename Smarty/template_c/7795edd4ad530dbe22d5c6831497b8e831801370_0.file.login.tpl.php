<?php
/* Smarty version 3.1.33, created on 2019-02-05 21:59:17
  from 'C:\xampp\htdocs\T_Productos\Smarty\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c59f92500c1f7_22395664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7795edd4ad530dbe22d5c6831497b8e831801370' => 
    array (
      0 => 'C:\\xampp\\htdocs\\T_Productos\\Smarty\\template\\login.tpl',
      1 => 1549400341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c59f92500c1f7_22395664 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    
    <body>
        <div class="content c_login">
            <img src="https://image.flaticon.com/icons/png/512/419/419280.png" alt="">
            
            <div class="login">
                <span class="info"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
                
                <form action="./login.php" method="POST">
                    <h1>Login</h1>
                    <input type="text" placeholder="Ingresar usuario" name="user" value="" class="campo" autocomplete="off">
                    <input type="password" placeholder="Ingresar contraseña" name="pass" value="" class="campo">
                    <button type="submit" name="btn" value="Login" class="btn">Login</button>
                    <!-- <input type="submit" class="success" value="Login" name="btn"> -->
                </form>
            </div>
        </div>
    </body>
</html><?php }
}
