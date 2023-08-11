
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <br><br>
    <div class="container">
        <h1 align="center" style="background-color:black; color:aliceblue">Listado de usuarios</h1>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">idUsuario</th>
                    <th scope="col">name</th>
                    <th scope="col">age</th>
                    <th scope="col">FechaNacimiento</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Genero</th>
                    <th scope="col">CiudadResidencia</th>
                    <th scope="col">NumeroTelefono</th>
                    <th scope="col">correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include ('../config/conexion.php');

                $query = $conexion->query("SELECT * FROM perfilusuario");

                while ($resultado = $query->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"> <?php echo $resultado['idUsuario'] ?> </th>
                        <th scope="row"> <?php echo $resultado['name'] ?> </th>
                        <th scope="row"> <?php echo $resultado['age'] ?> </th>
                        <th scope="row"> <?php echo $resultado['FechaNacimiento'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Cedula'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Sexo'] ?> </th>
                        <th scope="row"> <?php echo $resultado['CiudadResidencia'] ?> </th>
                        <th scope="row"> <?php echo $resultado['NumeroTelefono'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Email'] ?> </th>
                        <th>
                            <a href="../views/editarUsuario.php?idUsuario=<?php echo $resultado['idUsuario']?>" class="btn btn-warning">Editar</a>
                            <a href="../views/eliminarUsuario.php?idUsuario=<?php echo $resultado['idUsuario'] ?>" class="btn btn-danger">Eliminar</a>
                            <a href="../views/menuMascotasUsuario.php?idUsuario=<?php echo $resultado['idUsuario'] ?>" class="btn btn-success">Mascotas</a>
                        </th>

                    </tr>
                <?php
                }
                ?>




            </tbody>
        </table>
    </div>


    <br>
    <div class="container">
    <center>
        <a href="../views/crearUsuario.php" class="btn btn-success">Nuevo Usuario</a>
    </center>
    </div>
        <div class="container" style="position: absolute; top: 20px; right: 30px; width: 100px; height: 100px;">
            <a href="../cerrarSesion.php" class="btn btn-danger">Cerrar Sesión</a>
        </div>

</body>

</html>