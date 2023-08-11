<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" align="center">
        <input type="text" name="nombre" placeholder="Digite su nombre">
        <br><br>
        <input type="text" name="email" placeholder="Digite su correo">
        <br><br>
        <input type="password" name="clave" placeholder="Digite una contraseña">
        <br><br>
        <input type="submit" value="Registrar" class="btn btn-success">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('config/conexion.php');
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $clave = md5($_POST['clave']);

    $sql = "INSERT INTO administrador (Nombre, email, contraseña) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $nombre,  $email, $clave);
    
    // Ejecutar la sentencia de inserción
    if ($stmt->execute() === TRUE) {
        header("location:admin/menuUsuarios.php");
    } else {
        echo "Error al insertar el registro: " . $stmt->error;
    }
}
?>