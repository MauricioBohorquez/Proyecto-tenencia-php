<?php
include('../config/conexion.php');
$idUsuario = isset($_GET['idUsuario']) ? $_GET['idUsuario'] : '';
$sql = "SELECT * FROM perfilusuario WHERE idUsuario = '" . $idUsuario . "'  ";
$resultado = mysqli_query($conexion, $sql);
while ($fila = mysqli_fetch_assoc($resultado)) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar Usario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <h1 align="center ">Actualizar Datos De Usuario</h1>
        <form align="center" method="POST">
            <input type="hidden" name="idUsuario" value="<?php echo $fila['idUsuario'] ?>">
            <input type="text" name="name" placeholder="Digite su nombre" value="<?php echo $fila['name'] ?>">
            <br><br>
            <input type="text" name="age" placeholder="Digite su edad " value="<?php echo $fila['age'] ?>">
            <br><br>
            <input type="date" name="FechaNacimiento" placeholder="Digite fecha nacimiento " value="<?php echo $fila['FechaNacimiento'] ?>">
            <br><br>
            <input type="text" name="Cedula" placeholder="Digite su cedula" value="<?php echo $fila['Cedula'] ?>">
            <br><br>
            <input type="text" name="Sexo" placeholder="Digite su genero" value="<?php echo $fila['Sexo'] ?>">
            <br><br>
            <input type="text" name="CiudadResidencia" placeholder="Ciudad de residencia" value="<?php echo $fila['CiudadResidencia'] ?>">
            <br><br>
            <input type="text" name="NumeroTelefono" placeholder="Digite su telefono" value="<?php echo $fila['NumeroTelefono'] ?>">
            <br><br>
            <input type="text" name="Email" placeholder="Digite su correo" value="<?php echo $fila['Email'] ?>">
            <br><br>
            <input type="submit" value="Actualizar" class="btn btn-success">
        </form>
    
    </body>

    </html>

    <?php

    $idUsuario = isset($_GET['idUsuario']) ? $_GET['idUsuario'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $FechaNacimiento = isset($_POST['FechaNacimiento']) ? $_POST['FechaNacimiento'] : '';
    $Cedula = isset($_POST['Cedula']) ? $_POST['Cedula'] : '';
    $Sexo = isset($_POST['Sexo']) ? $_POST['Sexo'] : '';
    $CiudadResidencia = isset($_POST['CiudadResidencia']) ? $_POST['CiudadResidencia'] : '';
    $NumeroTelefono = isset($_POST['NumeroTelefono']) ? $_POST['NumeroTelefono'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    if ($name != null || $age != null || $FechaNacimiento != null || $Cedula != null || $Sexo != null || $CiudadResidencia != null || $NumeroTelefono != null || $Email != null ) {

        $sql2 = "UPDATE perfilusuario SET name='" . $name . "', age='" . $age . "', FechaNacimiento='" . $FechaNacimiento . "', Cedula='" . $Cedula . "', Sexo='" . $Sexo . "', CiudadResidencia='" . $CiudadResidencia . "', NumeroTelefono='" . $NumeroTelefono . "', Email='" . $Email . "' WHERE idUsuario = '" . $idUsuario . "' ";
        mysqli_query($conexion, $sql2);

        if ($sql2) {
        header("location:perfilUsuario.php?idUsuario=$idUsuario ");
            
        } else {
            echo "error al actualizar";
        }
    }


    ?>
    <?php } ?>