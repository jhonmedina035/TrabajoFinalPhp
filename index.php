<?PHP
   include('conexion.php');
   //Evita el error de las variables vacias
   error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Iniciar sesión
   session_start();

// Se trae los datos del formulario 
      $correo = $_REQUEST['email'];
      $clave = $_REQUEST['clave'];
      
   
if (isset($correo) && isset($clave))
      {

         $salt = substr ($correo, 0, 3);
         $clave_crypt = crypt ($clave, $salt);
         $instruccion = "SELECT email ,clave FROM usuarios WHERE email = '$correo'"." and clave = '$clave_crypt'";
         $consulta = mysqli_query ($conexion, $instruccion)
            or die ("Fallo en la consulta");
         $nfilas = mysqli_num_rows ($consulta);
         mysqli_close ($conexion);

      // Los datos introducidos son correctos
         if ($nfilas > 0)
         {
            $usuario_valido = $correo;
            $_SESSION["usuario_valido"] = $usuario_valido;
            print ("<P>Sesión : $usuario_valido</P>\n");
            echo" <script>
                    window.alert('Bienvenido $correo');
                  </script>";
         }
      }
?>

<!DOCTYPE HTML> 

<HEAD>
<TITLE>Distribuidora JSM</TITLE>
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
<LINK REL="stylesheet" TYPE="text/css" HREF="estilos.css">
<script src="https://kit.fontawesome.com/86b890441b.js" crossorigin="anonymous"></script>

</HEAD>

<BODY>

 
<div class="contenedor_general">
<div class="content">
<?PHP
// Sesión iniciada
   if (isset($_SESSION["usuario_valido"]))
   {

?>

<div class="contenedor_inicio">
            <header class="encabezado">
                <div class="logo">
                   <img src="img/logo_2.png" >
                </div>
                <nav>
                    <a href="#">Inicio</a>
                    <a href="#">Servicios</a>
                    <a href="#">Contactanos</a>
                    <a href="#">Nosotros</a>
                </nav>
            </header>
            <div class="contenedor">
            <div class="categorias">
            <h2 class="bloque1">Caregoria de produntos</h2>
            <p class="bloque1">
                Estamos llevando a cabo un proceso de transformación digital en el que nuestros clientes podrán ofrecer nuevos servicios
                y alternativas de pago a sus consumidores y encargar mercancía a través de una avanzada plataforma de comercio electrónico.
            </p>
             <div class="menucategorias">
                <div class="bloque1">
                    <h3>Especias</h3>
                    <img src="https://c6f2y5q5.rocketcdn.me/wp-content/uploads/2019/03/mezcla-de-especias-999x640.jpg">
                    <p>La mejor selecion solo para ti</p>
                    <button class="btn btn-primary btn-lg">catalogo</button>
                </div>
                <div class="bloque1">
                    <h3>Fruver</h3>
                    <img src="https://estaticos.miarevista.es/media/cache/1140x_thumb/uploads/images/article/5ea80b695bafe8c012fd5bac/lavarfrutayverdura-ppal.jpg">
                    <p>La mejor selecion solo para ti</p>
                    <button class="btn btn-primary btn-lg">catalogo</button>
                </div>
                <div class="bloque1">
                    <h3>Utencilios</h3>
                    <img src="https://estaticos.miarevista.es/media/cache/760x570_thumb/uploads/images/gallery/59c384135bafe8d9a50055f0/utensilioscocina.jpg">
                    <p>La mejor selecion solo para ti</p>
                    <button class="btn btn-primary btn-lg">catalogo</button>
                </div>
                <div class="bloque1">
                    <h3>Electrodomesticos</h3>
                    <img src="https://image.freepik.com/vector-gratis/conjunto-electrodomesticos-cocina-realista_1284-26013.jpg">
                    <p>La mejor selecion solo para ti</p>
                    <button class="btn btn-primary btn-lg">catalogo</button>
                </div>
             </div>   
            </div>
            </div>

            <div class="quienSomos">
            <h2> ¿ Quien somos ?</h2>
            <p>
                JSM nace de la necesidad de satisfacer los requerimientos de la industria gastronómica, más específicamente
                la dotación de restaurantes a nivel de implementos e insumos para la cocina. Las siglas que conforman su nombre
                se atribuyen a las iniciales de sus fundadores: Jhon Fredy Medina, Sandra Mallerly García y Marco Antonio Calle, 
                (emprendedores y estudiantes de desarrollo de software). 
            </p>

            <p>
                Somos una empresa dedicada a brindar soluciones de abastecimiento a cadenas de restaurantes, contamos con un portafolio
                basado en alimentos, implementos de cocina y electrodomésticos; Nos enfocamos en las necesidades exclusivas de nuestros
                clientes, ofreciendo una amplia gama de productos, economía y excelente servicio.
            </p>
            <p>
                Como herramienta principal, implementamos una APP WEB propia, la cual consiste en un carrito de compras, donde podrá
                interactuar con nuestro catálogo de productos de la forma más versátil, y así mismo, acceder a ellos por medio
                de cómodos precios y medios de pago; todo esto mientras disfruta de una experiencia ágil, amigable y dinámica 
                que nuestra interfaz de usuario le ofrece, sin necesidad de desplazarse de su hogar o negocio.    
            </p>
            <p>
            Garantizamos productos de categoría, impecable presentación y puntualidad en las entregas con ayuda de nuestros
            aliados, brindando total transparencia, efectividad y confianza.
            </p>
            
            </div>

            <div class="contactanos">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="well well-sm">
                                <form class="form-horizontal text-center" method="post">
                                    <fieldset>
                                        <legend class="formulario">Contactenos</legend>
                
                                        <div class="form-group ">
                                            <span class="col-md-1 col-md-offset-2 text-center"><span class="btn-lg glyphicon glyphicon-user"></span></span>
                                            <div class="col-md-8">
                                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><span class="btn-lg glyphicon glyphicon-user"></span></span>
                                            <div class="col-md-8">
                                                <input id="lname" name="name" type="text" placeholder="Apellido" class="form-control"/>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><span class="btn-lg glyphicon glyphicon-envelope"></span> </span>
                                            <div class="col-md-8">
                                                <input id="email" name="email" type="text" placeholder="Correo Electronico" class="form-control">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><span class="glyphicon glyphicon-earphone"></span></span>
                                            <div class="col-md-8">
                                                <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-2 text-center"><span class="glyphicon glyphicon-pencil"></span></span>
                                            <div class="col-md-8">
                                                <textarea class="form-control" id="message" name="message" placeholder="Ingrese su mensaje para nosotros aquí. Nos comunicaremos con usted dentro de 5 días hábiles.." rows="7"></textarea>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" id="boton" class="btn btn-primary btn-lg">Submit</button>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div>
                    <p>Siguenos en nuestras redes sociales</p>
                </div>
                <div>
                    <img src="img/logo_redes.jpg">
                </div>
            </div>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

            <P><a class='btn btn-danger' href='cerrarSesion.php' role='button'>Cerrar Sesión</a></P> 
</div>


<?PHP
}

// Intento de entrada fallido
   else if (isset ($correo))
   {
      print ("<BR><BR>\n");
      print ("<P ALIGN='CENTER'> Acceso no autorizado intentalo nuevamente  loco </P>\n");
      
      print ("<P ALIGN='CENTER'><a class='btn btn-primary' href='index.php' role='button'>Conectar</a></P>\n");

   }

   else

   {

      print("<div class='contenedor'>\n");

         print("<h1 CLASS='text-center' > LOGIN </h1>\n");
         print("<P CLASS='text-center'> Debes estar registrado para ingresar </P>\n");
         
         print("<FORM NAME='login' ACTION='index.php' METHOD='POST'>\n");
            print("<div class=''>\n");

            print("<div class='form-group'>\n");
               print("<P><LABEL>Email</LABEL>\n");
               print("<input type='TEXT' NAME='email' SIZE='15' class='form-control' required></P>\n");
            print("</div>\n"); 
            
            print("<div class='form-group'>\n");
               print("<P><LABEL >Clave:</LABEL>\n");
               print("<INPUT TYPE='PASSWORD' NAME='clave' SIZE='15' class='form-control' required></P>\n");
            print("</div>\n"); 

            print("<P><button type='submit' class='btn btn-primary btn-lg btn-block' >Entrar</button></P>\n");

            print("</div>\n");

            print("<P CLASS=''>Crear una cuenta<br>" .
                     "Registrese  " .
                     "<A HREF='formularioRegistro.php'>aquí</A></P>\n");
            
         print("</FORM>\n");

      print("</div>\n");
   }
?>
</div>
</div>
</BODY>
</HTML>