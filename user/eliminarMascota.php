<?php
session_start(); // Inicia la sesión si aún no se ha hecho
include ('../config/conexion.php');

$idMascota = $_GET['idMascota'];
$sql = "DELETE FROM perfilmascota WHERE idMascota = '$idMascota' ";

$query = mysqli_query($conexion, $sql);

if ($query === TRUE) {
    // Recupera la información del usuario actual (presumiblemente desde la sesión)
    $idUsuario = $_SESSION['idUsuario'];

    // Realiza una consulta para obtener más información del usuario
    $consulta = "SELECT * FROM perfilusuario WHERE idUsuario = '$idUsuario'";
    $resultado1 = $conexion->query($consulta);
    
    if ($resultado1) {
        $resultado = $resultado1->fetch_assoc();
        
        // Actualiza la información en la sesión
        $_SESSION['idUsuario'] = $resultado['idUsuario'];

        // Redirige a perfilUsuario.php con el idUsuario actualizado
        header("location:../user/perfilUsuario.php?idUsuario=" . $_SESSION['idUsuario']);
        exit(); // Asegura que el script se detenga después de la redirección
    }
} else {
    // Manejo de error si la eliminación falla
    echo "Error al eliminar la mascota: " . mysqli_error($conexion);
}

// Cierra la conexión a la base de datos al final del script
mysqli_close($conexion);
?>
