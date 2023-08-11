
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenencia Responsable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-image: url('./imagenes/cat.jpg');
            background-repeat: repeat;
            opacity: 1;
        }
        .h1{
            color: orange;
        }
        </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <div class="logo" style="position: absolute; top: 0; left: 0; width: 100px; height: 100px;">
        <img src="./imagenes/tenencia.png" alt="logo_tenencia">
    </div>
    <div style="position: absolute; top: 20px; right: 30px; width: 100px; height: 100px;">
        <a href="./views/crearUsuario.php" class="btn btn-success">Registrarse</a>
    </div>
    
    <h1 align="center" class="h1">Login</h1>   
    <form method="POST" align="center" style="padding: 50px;">
        <input type="text" name="email" id="Email" placeholder="correo electronico">
        <br><br>
        <input type="password" name="clave" id="clave" placeholder="contraseña" >
        <br><br>
        <input type="submit" value="ingreso" class="btn btn-success">
        <input type="reset" value="limpiar" class="btn btn-warning">
    </form>
    
</body>

</html>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('config/conexion.php');

    $Email = $_POST['email'];
    $clave = md5(stripslashes(strip_tags(htmlspecialchars(trim($_POST['clave'])))));
    // Consulta para perfilusuario
    $consulta = "SELECT * FROM perfilusuario WHERE Email = '$Email' AND clave = '$clave'";
    $resultado1 = $conexion->query($consulta);
    $numreg = $resultado1->num_rows;

    // Consulta para administrador
    $consulta2 = "SELECT * FROM administrador WHERE email = '$Email' AND contraseña = '$clave'";
    $resultado2 = $conexion->query($consulta2);
    $numreg2 = $resultado2->num_rows;

    if ($numreg == 1) {
        $resultado = $resultado1->fetch_assoc();
        $_SESSION['idUsuario'] = $resultado['idUsuario'];
        header("location:user/perfilUsuario.php?idUsuario=" . $_SESSION['idUsuario']);
    } elseif ($numreg2 == 1) {
        $resultado = $resultado2->fetch_assoc();
        $_SESSION['idAdmin'] = $resultado['id_admin'];
        header("location:admin/menuUsuarios.php");
    } else {
        header("location: views/Error.php");
    }
}
?>






