<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <link rel="stylesheet" href="Informacion.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
<?php
    session_start();
    include ('../config/conexion.php');
    
    // Verifica si el usuario está autenticado
    if (isset($_SESSION['idUsuario'])) {
        // Obtén el idUsuario de la sesión
        $idUsuario = $_SESSION['idUsuario'];
        
        // Crea un enlace al perfil del usuario con su ID
        $perfilLink = "perfilUsuario.php?idUsuario=$idUsuario";
    }
    ?>

    <!-- ... tu contenido HTML ... -->
    
    <div class="container" style="position: absolute; top: 20px; left: 30px; width: 100px; height: 100px;">
        <?php if (isset($perfilLink)) { ?>
            <a href="<?php echo $perfilLink; ?>" class="btn btn-success">Perfil</a>
        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <br></br>
    <h1 align="center" class="h1">
        <font color="000000">Tenencia Responsable</font>
    </h1>
    <div class="parrafo">
        <strong>
            <p>Con frecuencia creemos erróneamente que somos dueños responsables de nuestras mascotas, porque para la mayoría
                de las personas ser un dueño responsable es darle de comer, ponerle agua, darle cariño, pero ser un dueño responsable
                es mucho más complicado y es por no tomar en cuenta estas recomendaciones que a largo o mediano plazo estamos afectando la salud de nuestra mascota y su calidad de vida,
                es por eso que en esta página web veremos que es la tenencia responsable y como llego a ser un dueño responsable.
            </p>
        </strong>
    </div>

    <br><br><br><br><br>
    <h1 align="center" class="tamaño">Bienvenidos</h1>
    <br><br>
    <ul align="center" class="menu">
        <li><a href="./Información/Respeto.php">Respeto</a></li>
        <li><a href="./Información/Responsabilidad.php">Responsabilidad</a></li>
        <li><a href="./Información/ProcesoDeVacunacion.php">Proceso de vacunación</a></li>
        <li><a href="./Información/ProcesoDeDesparacitacion.php">Proceso de desparacitación</a></li>
        <li><a href="./Información/Microchip.php">Microchip</a></li>
        <li><a href="./Información/Esterilizacion.php">Esterilización</a></li>
    </ul>
</body>

</html>