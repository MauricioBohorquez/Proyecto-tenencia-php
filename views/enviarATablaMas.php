<?php
include('../config/conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traer los datos por POST
    $nombre = $_POST['Nombre'];
    $edad = $_POST['Edad'];
    $Raza = $_POST['Raza'];
    $sexo = $_POST['Sexo'];
    $tipo = $_POST['Tipo'];
    $color = $_POST['Color'];
    $alimento = $_POST['Alimento'];
    $Email = $_POST['email'];

    // Insertar en la base de datos con una consulta preparada
    $sql = "INSERT INTO perfilmascota (Nombre, Edad, Raza, Sexo, Tipo, Color, Alimento, Usuario_Id) VALUES (?, ?, ?, ?, ?, ?, ?, (SELECT idUsuario FROM perfilusuario where Email = ?))";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssssssss", $nombre, $edad, $Raza, $sexo, $tipo, $color, $alimento, $Email);

    if ($stmt->execute()) {
        echo "correcto";
        header("location:../admin/menuMascotas.php");
    } else {
        echo "incorrecto";
    }
}
?>

