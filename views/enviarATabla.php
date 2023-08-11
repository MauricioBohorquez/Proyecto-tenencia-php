<?php
include ('../config/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Traer los datos por POST
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $cedula = $_POST['cedula'];
    $sexo = $_POST['sexo'];
    $ciudadResidencia = $_POST['ciudadResidencia'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $clave = md5($_POST['clave']);

    
    // Insertar en la base de datos 
    $sql = "INSERT INTO perfilusuario (name, age, FechaNacimiento, Cedula, Sexo, CiudadResidencia, NumeroTelefono, Email, clave) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssssssss", $nombre, $edad, $fechaNacimiento, $cedula, $sexo, $ciudadResidencia, $telefono, $email, $clave);
    
    // Ejecutar la sentencia de inserción
    if ($stmt->execute() === TRUE) {
        // Obtener el último ID insertado
        $idInsertado = $conexion->insert_id;

        echo "ID del usuario insertado: " . $idInsertado;
        header("location:../user/perfilUsuario.php?idUsuario=$idInsertado");
    } else {
        echo "Error al insertar el registro: " . $stmt->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear mascota</title>
</head>

<body>
    <br><br>
    <a href="crearMascota.php"></a>
</body>

</html>