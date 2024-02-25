<?php

    if($_POST){
        //Recibir informacion del formulario HTML ( Metodo POST )
        $nombre=$_POST["txtNombre"];
        echo "Hola ".$nombre;
    }
?>

<!-- 
    Metodo POST: Sirve para enviar informacion a traves de un input. $_POST Es un array asociativo de variables pasadas al script actual a traves del metodo POST de HTTP. 
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        <p>Nombre:</p>
        <input type="text" name="txtNombre" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>