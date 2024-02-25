<?php
    if($_GET){
        $nombre=$_GET["nombre"];
        echo "Hola ".$nombre;
    }
/* 
    GET = Es el envio de datos a traves de una URL.
    La diferencia con POST es que GET envia los datos a traves de la URL, eso quiere decir que estos datos van a aparecer en la url del navegador. POST, en cambio, envia esos datos pero de manera oculta.
*/
?>