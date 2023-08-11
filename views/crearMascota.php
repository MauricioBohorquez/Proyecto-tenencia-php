<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear mascota</title>
    <?php include ('../config/conexion.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <h1 align="center ">Registrar nueva mascota</h1>
    <form action="../views/enviarATablaMas.php" method="post" align="center">
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
        <input type="text" name="email" id="email" placeholder="Digite el correo de usuario">
        <br><br>
        <input type="submit" value="Registrar" class="btn btn-success">
    </form>
</body>
</html>