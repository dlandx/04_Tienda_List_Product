<?php

    /* Fichero productos.php -> Listado de productos.
     *      - Listar los productos de la tienda.
     *      - Permitir al usuario seleccionar productos que va a comprar.
     */
    session_start(); // Crear o Abrir sesión..
    // Antes comprobar que el usuario esta logueado...
    if(!isset($_SESSION['user'])){
        header("Location: login.php?info='Debes loguearte primero'");
        exit();
    }

    // Cargamos los fichero '.php' que se van a utilizar...
    spl_autoload_register(function ($class){
        if (strpos($class,"Smarty")!==false){
             require_once('Smarty.class.php');  
        } else {
             require_once("./POO/$class.php");  
        }
    });
        
    $view_products = new Smarty(); // Creamos un objeto para gestionar la plantilla Smarty...
    // Configuramos los directorios
    $view_products->template_dir = './Smarty/template/';
    $view_products->compile_dir = './Smarty/template_c/';

    $productos = BBDD::obtenerProductos(); // Obtenemos los producto de la BBDD...
    //var_dump($productos);
    // Enviamos un valor a la plantilla Smarty, el array con los productos de la BBDD...
    $view_products->assign('listaProductos', $productos); // Utilizado en listaProductos.tpl
    $view_products->display('productos.tpl'); // Mostrar plantilla -> Login
