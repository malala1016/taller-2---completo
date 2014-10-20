<?php
 
//Inicializar una sesion de PHP
session_start();
 
//Validar que el usuario este logueado y exista un UID
if ( ! ($_SESSION['autenticado'] == 'SI' && isset($_SESSION['user_id'])) )
{
    //En caso de que el usuario no este autenticado, crear un formulario y redireccionar a la 
    //pantalla de login, enviando un codigo de error
?>

<!--DESDE AQUI esto es para mostrar el cuadro que aparece cuando el usuario intenta intregar al main sin 
         tener un registro ni usuario-->
        <!-- <form name="formulario" method="post" action="index.php">
            <input type="hidden" name="msg_error" value="2">
        </form>
        <script type="text/javascript"> 
            document.formulario.submit();
        </script> -->
        <?php 
        echo "La seccion a la que intentaste entrar esta restringida.\n Solo permitida para usuarios registrados."; 
        ?>
        <!--HASTA AQUI-->
<?php
}
 
    //Conectar BD
    include("../includes/database.php");  
    conectarse();
 
    //Sacar datos del usuario que ha iniciado sesion
    $query = "SELECT id,usuario
            FROM usuarios
            WHERE id = '".$_SESSION['user_id']."'";         
    $result = mysql_query($query); 
 
    $username = "";
 
    //Formar el nombre completo del usuario
    if( $fila = mysql_fetch_array($result) ) //aqui creo la variable fila y se almacena el true de la variable result (es como si fuera un boolean)
       $username = $fila['usuario']; //
     
//Cerrrar conexion a la BD
mysql_close($link);
//como ya esta abierta la conexion con la variable $link, 
//por eso no se coloca como parametro en la variable de arriba de result, 
//y por eso se pone mysql_close($link);



?>






<!---->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <title>Styleu clothings - Siempre al último estilo</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



           <div class="container-fluid fondo">


           <div class="row"><!--abre la clase row-->

               <div class="col-md-12 col-lg-12 color2"> <!--abre la clase de la barra de arriba FRANJA NEGRA-->
                   
                  <header>
                      <div class="container"><!--abre el contenedor-->
                          <div class="row">

                            <!--para el logo-->
                              <div class="col-lg-3 logo">
                                  <a href="#"><img src="img/marcaBlanca.png" alt=""></a>
                              </div> 
                              
                              <!--para la barra de navegación-->
                              <div class="col-lg-5">
                                  <nav>                                  
                                    <div class="collapse navbar-collapse navbar-exl-collapse">
                                        <ul class="nav navbar-nav etiquetas">          
                                            <li><a class="a" href="../img/proyecto_seccionOcasion/index.html">catalogo</a></li>
                                            <li><a class="a" href="../img/proyecto_seccionCompras/index.html">Mas Vistos</a></li>
                                        </ul>
                                    </div>
                                  </nav>
                                </div> 


                                <div class="nombreUsuario"><p class="nom">Bienvenido,<?php echo $username; ?></p></div>

                            <!-- BARRA DE BUSQUEDA--><!--
                              <form class="navbar-form navbar-left buscador">
                                  <div class="form-group">
                                    <input type="text" class="form-control"></div>
                                  <button type="submit" class="btn btn-default">Buscar</button>
                              </form>-->
                            <!---->

                              
                             <!--para las redes sociales-->
                              <div class="col-lg-3 centrar iconosRedes">
                                <a href="../logout.php" class="boton" id="boton-logs">Cerrar sesion</a>                             
                                </div>
                          </div>
                      </div><!--cierra el contenedor-->
                  </header>
                   
               </div><!--cierra la clase de la barra de arriba (logo, etiquetas y redes sociales)-->

           </div><!--cierra la clase row-->

         
               
            <!-- ABRE imagen de la seccion OCASION-->
        <section>
          <div class="container">

            <div class="row">
                <div class="col-lg-10 colorContenedorImagen">
                    <a href="#"><img src="img/atuendos.png" alt=""></a>
                </div>
            </div>

            </div>

        </section> 
        <!--CIERRA imagen de la seccion OCASION-->



       <!--ABRE CONTENIDO-->

        <div class="container arriba"><!--contenedor para el contenido de imagenes-->

        <!--seccion para el contenido-->
        <section>
 
           
            <div class="row"><!--ABRE row mayor-->   

                <!--ABRE cuadro blanco de etiquetas-->
                <div class="col-lg-2 colorC">                    
                <div class="collapse navbar-collapse navbar-exl-collapse">
                  <ul class="nav navbar nav">
                    <li><a>ROPA</a><!--ROPA-->
                      <li><a>Por Categoria</a>
                         <li>Vestidos</a></li>
                         <li>Faldas</a></li>
                         <li>Blusas</a></li>
                         <li>Tops</a></li>
                         <li>Pantalones</a></li>
                         <li>Jeans</a></li>
                         <li>Shorts</a></li>
                         <li>Busos</a></li>
                         <li>Chaquetas</a></li>
                      </li>
                    </li><!--cierra el li de ROPA--> 
                    <li><a>COMPRA POR</a></li>
                    <li><a href="#">Catalogo</a></li>
                    <li><a href="#">Mas Vistos</a></li>
                  </ul>
                </div>
                </div><!--CIERRAcuadro blanco de etiquetas-->



          <!--ABRE franja de slider de muchas imagenes OO.OO-->
            <div class="row">
              <div class="col-lg-12 colorFranja arriba">

                <section id="miSlide" class="carousel slide">
                  <ol class="carousel-indicators">
                    <li data-target="#miSlide" data-slide-to="0" class="active"></li>
                    <li data-target="#miSlide" data-slide-to="1"></li>
                    <li data-target="#miSlide" data-slide-to="2"></li>
                    <li data-target="#miSlide" data-slide-to="3"></li>
                    <li data-target="#miSlide" data-slide-to="4"></li>
                    <li data-target="#miSlide" data-slide-to="5"></li>
                  </ol>

<div class="carousel-inner">
                  <div class="item active"><img src="img/cosaUno.png" class="adaptar"></div>
                  <div class="item"><img src="img/cosaDos.png" class="adaptar"></div>
                  <div class="item"><img src="img/cosaTres.png" class="adaptar"></div>
                  <div class="item"><img src="img/cosaCuatro.png" class="adaptar"></div>
                  <div class="item"><img src="img/cosaCinco.png" class="adaptar"></div>
                  <div class="item"><img src="img/cosaSeis.png" class="adaptar"></div>
</div>
<a href="#miSlide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>

<a href="#miSlide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

                </section>

                <!-- <div class="col-lg-2 imaCoso">
                     <a><img src="img/cosaUno.png" alt=""></a>
                   </div>
                <div class="col-lg-2 imaCosoDos">
                     <a><img src="img/cosaDos.png" alt=""></a>
                   </div> 
                <div class="col-lg-2 imaCosoTres">
                     <a><img src="img/cosaTres.png" alt=""></a>
                   </div> 
                <div class="col-lg-2 imaCosoCuatro">
                     <a><img src="img/cosaCuatro.png" alt=""></a>
                   </div>
                <div class="col-lg-2 imaCosoCinco">
                     <a><img src="img/cosaCinco.png" alt=""></a>
                   </div> 
                <div class="col-lg-2 imaCosoSeis">
                     <a><img src="img/cosaSeis.png" alt=""></a>
                   </div> -->
               
                               


              </div> 
            </div>
          <!--CIERRA franja de slider de muchas imagenes OO.OO-->



          <!--ABRE franja de compra atuendo -_-  -->
            <div class="row">
              <div class="col-lg-12 colorFranjaDos arriba"> 

                <div class="collapse navbar-collapse navbar-exl-collapse">
                  <ul class="nav navbar nav">                    
                     <li><a class="mgh" href="#">Compra este atuendo</a>
                  </ul>
              </div>

              <!--abre contenedores de textos de prendas con precio-->

               <div class="col-lg-12 atuendo">
               <a><img src="img/look-1.png" alt=""></a>
             </div>
             <div class="row">
            <div class="col-lg-12 colorCososDos">
            <p class="pppp">Add to:</p>              
                  <a class="tt" href="#"><img src="img/corazon.png" alt=""></a>
                  <a class="yy" href="#"><img src="img/carrito.png" alt=""></a>
             </div>
             </div>
             <div class="row">
            <div class="col-lg-12 colorCososTres">
            <p class="pppp3">Styleu</p>              
            <p class="pppp4">Sombrero Negro</p>
               <ul class="jj">$21.0</a></ul>     
             </div>
             </div> 
             <div class="row">
            <div class="col-lg-12 colorCososCuatro">
            <p class="pppp5">Styleu</p>              
            <p class="pppp6">Leggins Negros Cuero</p>
               <ul class="jj">$21.0</a></ul>      
             </div>
             </div> 
             <div class="row">
            <div class="col-lg-12 colorCososCinco">
            <p class="pppp7">Styleu</p>              
            <p class="pppp8">Blusa s-trans beige</p>
               <ul class="jj">$21.0</a></ul>     
             </div>
             </div> 

              <!--cierra contenedores de textos de prendas con precio-->  


              </div> 
            </div>
          <!--CIERRA franja de compra atuendo -_-  -->



          <!--CIERRA contenido de imagenes-->

         </div><!--CIERRA row mayor-->




            <div class="row">
              <div class="col-lg-12 colorFranjaTres arriba">

              <div class="collapse navbar-collapse navbar-exl-collapse">
                  <ul class="nav navbar nav">                    
                     <li><a class="mg" href="#">Mas Vistos</a>
                  </ul>
              </div> 

              <div class="col-lg-4 acomodarImagenMasCompradoDos">
                     <a><img src="img/cafe.png" alt=""></a>
                   </div>

              <div class="col-lg-4 acomodarImagenMasCompradoTres">
                     <a><img src="img/azul.png" alt=""></a>
                   </div>

              <div class="col-lg-4 acomodarImagenMasCompradoCuatro">
                     <a><img src="img/bah.png" alt=""></a>
                   </div>          

              </div> 
            </div>

        </section>

        </div><!--cierra el contenedor de imagenes-->


        <!--CIERRA CONTENIDO-->





        <!--ABRE FOOTER-->

        <!--seccion para el footer-->
        <footer>

             <section class="colorA">
                         <div class="container-fluid"><!--abre el contenedor del footer-->

                             <div class="row"><!--abre el row del footer-->

                                 <div class="col-lg-3">
                                     <h3>
                                        <a href="#"><img src="img/marcaBlancaDos.png" alt=""></a>
                                     </h3>                                 
                                 </div>                         
                             
                                 <div class="col-lg-2">
                                     <h3 class="colorBB">Styleu</h3>
                                     <a class="a" href="#">Acerca de Nosotros</a><br>
                                     <a class="a" href="#">Contacto</a><br>
                                     <a class="a" href="#">Pedido</a><br>                
                                 </div>

                                 <div class="col-lg-2">
                                     <h3 class="colorBB">Ropa</h3>     
                                     <a class="a" href="#">Vestidos</a><br>
                                     <a class="a" href="#">Enterizos</a><br>
                                     <a class="a" href="#">Blusas</a><br>
                                     <a class="a" href="#">Chaquetas</a><br>
                                     <a class="a" href="#">Pantalones</a><br>
                                     <a class="a" href="#">Shorts</a><br>
                                     <a class="a" href="#">Faldas</a><br>
                                 </div>

                                 <div class="col-lg-2">
                                     <h3 class="colorBB">Tendencias</h3>
                                     <a class="a" href="#">Primavera</a><br>
                                     <a class="a" href="#">Verano</a><br>
                                     <a class="a" href="#">Otoño</a><br>
                                     <a class="a" href="#">Invierno</a><br>
                                 </div>

                                <div class="col-lg-2">
                                     <h3 class="colorBB">Encuentranos en</h3>
                                     <a class="a"href="#">Facebook</a><br>
                                     <a class="a"href="#">Twitter</a><br>
                                     <a class="a"href="#">Instagram</a><br>
                                     <a class="a"href="#">Google</a><br>
                                 </div>

                             </div><!--cierra el row del footer-->                         

                             
                         </div><br><!--cierra el contenedor del footer-->
                     </section>

        </footer>

        <!--CIERRA FOOTER-->

       

           </div><!--cierra el fondo de toda la pagina-->
 
        
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.js"></script>

        <script src="js/main.js"></script>

        
    </body>
</html>
