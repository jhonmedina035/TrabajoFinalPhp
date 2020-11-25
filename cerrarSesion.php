<?PHP
   session_start ();
?>
<HTML LANG="es">
<HEAD>
<TITLE>Desconectar</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">

</HEAD>
<BODY>

<?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
      session_destroy ();
      print ("<BR><BR><P ALIGN='CENTER'>Conexión finalizada</P>\n");
      print ("<P ALIGN='CENTER'><a class='btn btn-primary' href='index.php' role='button'>Conectar</a></P>\n");
   }
   
   else
   {
      print ("<BR><BR>\n");
      print ("<P ALIGN='CENTER'>No existe una conexión activa</P>\n");
      print ("<P ALIGN='CENTER'><a class='btn btn-primary' href='login.php' role='button'>Conectar</a></P>\n");
   }
?>

</BODY>
</HTML>