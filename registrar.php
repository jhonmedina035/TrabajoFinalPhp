<?PHP
   include('conexion.php');

   $nombre=$_REQUEST['nombre'];
   $apellidos=$_REQUEST['apellidos'];
   $correo=$_REQUEST['email'];
   $clave=$_REQUEST['clave'];
   
   $salt = substr ($correo, 0, 3);
   $clave_crypt = crypt ($clave, $salt);
   $instruccion = "INSERT INTO usuarios (nombre , apellidos , email , clave) VALUES ('$nombre', '$apellidos', '$correo', '$clave_crypt')";
   $consulta = mysqli_query ( $conexion, $instruccion)
      or die ("Fallo en la inserción");
   mysqli_close ($conexion);
   print ("Usuario $usuario insertado con Éxito\n"); 
   echo "<script>
   window.alert('Usuario $usuario agregado con Éxito\\n Ingrese nuevamente con sus datos');
   window.location.replace('index.php'); 
   </script>"
?>