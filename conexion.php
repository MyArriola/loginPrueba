<?php
    $host = "localhost";
    $user = "root";
    $pw = "";
    $db = "login";

    $_SESSION['conexion'] = mysqli_connect($host,$user,$pw,$db) or die ("ERROR: CONEXIÓN CON LA BASE DE DATOS");
?>