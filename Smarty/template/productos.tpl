<!doctype html>
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

                    {* Obtenemos el valor enviado desde lógica de negocio (productos.php) para recorrer los productos *}
    {* Valor $listaProductos -> Array de array (tantos productos array indexado, producto - array asociativo) *}
    {assign var=result value=''} {* Creamos una variable para concatenar los resultados <p> *}

    {* from=array | item=elemento | key=key | name=ciclo foreach (acceder a las propiedades del foreach) *}
    {foreach name=pos item=producto from=$listaProductos}
        {* Asignar a cada BTN el cod del producto - para tener solo un FORM *}
        {assign var=result value=$result|cat:"<div class='c_list'><div class='c_btn'> 

        <button name='add' value=\""|cat:$producto->getCod()|cat:"\"'>Añadir</button></div>"}
        {* Solo mostrar la columna [nombre_corto y PVP] *}
        {assign var=result value=$result|cat:"<div class='list'><div><span class='name'>"|cat:{$producto->getName_short()}|cat:"</span>"}
        {assign var=result value=$result|cat:"<span class='price'>"|cat:{$producto->getPrecio()}|cat:"</span></div>"}
        
        {assign var=result value=$result|cat:"</div></div>"}
    {/foreach}

    {$result} {* Resultado de la variable concatenda *}
            </div>
            
            <div class="content_cesta">
                
            </div>
        </div>
    </body>
</html>