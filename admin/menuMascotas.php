<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <br><br>
    <div class="container">
        <h1 align="center" style="background-color: black; color:aliceblue">Listado de Mascotas</h1>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">idMascota</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Raza</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Color</th>
                    <th scope="col">Alimento</th>
                    <th scope="col">Usuario_id</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php

                include ('../config/conexion.php');

                $query = $conexion->query("SELECT * FROM perfilmascota");

                while ($resultado = $query->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"> <?php echo $resultado['idMascota'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Nombre'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Edad'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Raza'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Sexo'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Tipo'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Color'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Alimento'] ?> </th>
                        <th scope="row"> <?php echo $resultado['Usuario_Id']?> </th>
                        <th>
                            <a href="../views/editarMascota.php?idMascota=<?php echo $resultado['idMascota'] ?>" class="btn btn-warning">Editar</a>
                            <a href="../views/eliminarMascota.php?idMascota=<?php echo $resultado['idMascota'] ?>" class="btn btn-danger">Eliminar</a>
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
        <a href="../views/crearMascota.php" class="btn btn-success">Nueva Mascota</a>
    </center>
    </div>
    

</body>

</html>