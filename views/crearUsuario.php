

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear usuario</title>
    <?php include('../config/conexion.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <h1 align="center ">Registrar nuevo usuario</h1>
    
    <form action="../views/enviarATabla.php" method="post" align="center">
        <input type="text" name="nombre" placeholder="Digite su nombre">
        <br><br>
        <input type="text" name="edad" placeholder="Digite su edad ">
        <br><br>
        <input type="date" name="fechaNacimiento" placeholder="Digite fecha nacimiento ">
        <br><br>
        <input type="text" name="cedula" id="cedula" placeholder="Digite su cedula">
        <br><br>
            <select name="sexo" align="center" >
                <option selected>Selecciona tu genero</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
                <option value="Otro">otro</option>
            </select>
        <br><br>
        <input type="text" name="ciudadResidencia" placeholder="Ciudad de residencia">
        <br><br>
        <input type="text" name="telefono"  placeholder="Digite su telefono">
        <br><br>
        <input type="text" name="email" placeholder="Digite su correo">
        <br><br>
        <input type="password" name="clave" placeholder="Digite una contraseña">
        <br><br>
        <input type="submit" value="Registrar" class="btn btn-success">
    </form>
</body>
</html>