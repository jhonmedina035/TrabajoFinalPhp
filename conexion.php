<?php
    
  $servidor = "localhost";
  $usuario = "root";
  $contrasena = "";
  $nombrebd = "bdtienda";
 
  $conexion = mysqli_connect($servidor, $usuario, $contrasena, $nombrebd);
 
  if(mysqli_connect_errno()){
	  echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
  }
    
?>    