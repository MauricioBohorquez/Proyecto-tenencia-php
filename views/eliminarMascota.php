<?php
 include ('../config/conexion.php');

  $idMascota = $_GET['idMascota'];
  $sql = "DELETE FROM perfilmascota WHERE idMascota = '$idMascota' ";

  $query = mysqli_query($conexion, $sql);
  if($query === TRUE){
    header("Location:../admin/menuMascotas.php");
  }

?>