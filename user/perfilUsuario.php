<?php include('../config/conexion.php'); ?>
<?php
session_start();
if (!isset($_SESSION['idUsuario'])) {
    header('location: ../index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url('../imagenes/dog.jpg');
            background-repeat: repeat;
            background-size: cover;
            opacity: 1;
        }

        .tarjeta1 {
            width: 200px;
            height: 200px;
            background-color: lightgray;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            margin: 50px 180px;
        }

        .formulario {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }
    </style>

</head>

<body>
    <h1 align="center">Perfil Del Usuario</h1>
    <div class="container" style="position: absolute; top: 20px; left: 30px; width: 100px; height: 100px;">
        <a href="Informacion.php" class="btn btn-success">inicio</a>
    </div>

    <?php
    $idUsuario = isset($_GET['idUsuario']) ?  $_GET['idUsuario'] : '';
    $query1 = $conexion->query("SELECT * FROM perfilusuario WHERE idUsuario = '" . $idUsuario . "'");
    $numreg = $query1->num_rows; 
    echo $idUsuario;
    if ($numreg >= 1) {
        $resultado = $query1->fetch_assoc();
    ?>
        <div style="position: absolute; top: 20px; right: 30px; width: 100px; height: 100px;">
            <a class="btn btn-success" href="informacionUsuario.php?idUsuario=<?php echo $resultado['idUsuario']; ?>">perfil</a>
        </div>
        <div class="container" style="position: absolute; top: 20px; right: 120px; width: 170px; height: 100px;">
            <a href="../cerrarSesion.php" class="btn btn-danger">Cerrar Sesión</a>
        </div>


        <div class="tarjeta1" onclick="mostrarFormulario()">Agrega tu mascota</div>

        <div id="formulario" class="formulario">
            <h2>Formulario</h2>
            <form method="POST" align="center">
                <input type="text" name="Nombre" id="nombre" placeholder="Digite el nombre">
                <br><br>
                <input type="text" name="Edad" id="edad" placeholder="Digite la edad ">
                <br><br>
                <input type="text" name="Raza" id="Raza" placeholder="Digite la raza ">
                <br><br>
                <input type="text" name="Sexo" id="sexo" placeholder="Digite el genero">
                <br><br>
                <input type="text" name="Tipo" id="tipo" placeholder="Digite el tipo">
                <br><br>
                <input type="text" name="Color" id="color" placeholder="digite el color">
                <br><br>
                <input type="text" name="Alimento" id="alimento" placeholder="Digite el alimento">
                <br><br>
                <input type="submit" value="Guardar" class="btn btn-success">
            </form>
            <button onclick="ocultarFormulario()">Cerrar</button>
        </div>

        
    <?php
    }else{
        //
    }
    ?>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //traer los datos por post

        $nombre = $_POST['Nombre'];
        $edad = $_POST['Edad'];
        $Raza = $_POST['Raza'];
        $sexo = $_POST['Sexo'];
        $tipo = $_POST['Tipo'];
        $color = $_POST['Color'];
        $alimento = $_POST['Alimento'];
        $usuario = $resultado['idUsuario'];

        //insertar en la base de datos
        $sql = "INSERT INTO perfilmascota (Nombre, Edad, Raza, Sexo, Tipo, Color, Alimento, Usuario_Id) VALUES ('$nombre', '$edad', '$Raza', '$sexo', '$tipo', '$color', '$alimento', '$usuario')";
        $query = mysqli_query($conexion, $sql);
        if ($query) {
            echo "guardado"
    ?>
    <?php
        } else {

            echo "incorrecto";
        }
    }
    ?>
    <?php
    $query2 = $conexion->query("SELECT * FROM perfilmascota");

    if ($resultado1 = $query2->fetch_assoc()) {
    ?>

    <div style="position: absolute; top: 200px; right: 400px; width: 100px; height: 100px;">
        <a class="btn btn-success" href="../user/informacionMascota.php?idUsuario=<?php echo $resultado['idUsuario'] ?>">perfil Mascotas</a>
    </div>
    <?php 
    }
    ?>
    

</body>
        <script>
            function mostrarFormulario() {
                document.getElementById("formulario").style.display = "block";
            }

            function ocultarFormulario() {
                document.getElementById("formulario").style.display = "none";
            }
        </script>
</html>