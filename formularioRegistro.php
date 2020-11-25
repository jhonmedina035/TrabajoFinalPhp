<HTML LANG="es">
<HEAD>
   <TITLE>Agregar un usuario</TITLE>
   <!-- Bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilos.css">
</HEAD>

<BODY>

<BR><BR>

<div class="contenedor">
    <h1> Registro de usuarios </h1>

    <form action="registrar.php" method="POST">

        <P form-group><LABEL CLASS='etiqueta-entrada'>Nombre:</LABEL>
        <INPUT TYPE='TEXT' NAME='nombre' SIZE='15' class="form-control" required></P>

        <P form-group><LABEL CLASS='etiqueta-entrada'>Apellidos:</LABEL>
        <INPUT TYPE='TEXT' NAME='apellidos' SIZE='15' class="form-control" required></P>

        <P form-group><LABEL CLASS='etiqueta-entrada'>Correo:</LABEL>
        <INPUT TYPE='TEXT' NAME='email' SIZE='15' class="form-control" required></P>

        <P form-group><LABEL CLASS='etiqueta-entrada'>Clave:</LABEL>
        <INPUT TYPE='PASSWORD' NAME='clave' SIZE='15' class="form-control" required></P>

        <P><button type='submit' class='btn btn-primary btn-lg btn-block'>Registrar</button></P>
        
    </form>

</div>    


</BODY>
</HTML>