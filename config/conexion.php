<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $db = "proyectophp";

    $conexion = new mysqli($servidor, $usuario, $clave, $db);

    if($conexion){
        echo "conexion exitosa";
    }
    else{
        echo "Error: no se puede conectar a la base de datos ";
    }

 
?>