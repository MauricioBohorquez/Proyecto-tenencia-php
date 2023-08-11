<?php
 include ('../config/conexion.php');

  $idUsuario = $_GET['idUsuario'];
  $sql = "DELETE FROM perfilusuario WHERE idUsuario = '$idUsuario' ";

  $query = mysqli_query($conexion, $sql);
  if($query === TRUE){
    header("Location:../admin/menuUsuarios.php");
  }



?>