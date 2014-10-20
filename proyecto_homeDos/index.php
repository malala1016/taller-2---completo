<?php
 
//Inicializar una sesion de PHP
session_start();
 
//Validar que el usuario este logueado y exista un UID
if ( ! (isset($_SESSION['user_id'])) )
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

        <link rel="stylesheet" href="css/bootstrap2.css">
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
                                                     
                                            <li><a href="../proyecto_seccionVestidos/index.php">catalogo</a></li>
                                            <li><a href="../proyecto_seccionAtuendos/index.php">Mas Vistos</a></li>
                                        </ul>
                                    </div>
                                  </nav>
                                </div> 


                                <div class="nombreUsuario"><p>Bienvenido,<?php echo $username; ?></p></div>

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

   
        
        <!--abre seccion SLIDER--> 
        
            <!--seccion para el slider de imagenes GRANDEEEEE-->
        <section class="cr-container">

<input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked/
<label for="select-img-1" class="cr-label-img-1">1</label>

<input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
    <label for="select-img-2" class="cr-label-img-2">2</label>
 
    <input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
    <label for="select-img-3" class="cr-label-img-3">3</label>
 
    <input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
    <label for="select-img-4" class="cr-label-img-4">4</label>

    <input id="select-img-5" name="radio-set-1" type="radio" class="cr-selector-img-5" />
    <label for="select-img-5" class="cr-label-img-5">5</label>


            <!-- <div class="row">
                <div class="col-lg-10 colorContenedorImagen">
                    <a href="#"><img src="img/inicio_i.png" alt=""></a>
                </div>
            </div> -->

              <!-- panels -->
    <div class="cr-bgimg">
        <div>
            <span>Slice 1 - Image 1</span>
            <span>Slice 1 - Image 2</span>
            <span>Slice 1 - Image 3</span>
            <span>Slice 1 - Image 4</span>
            <span>Slice 1 - Image 5</span>
        </div>
        <div>
            <span>Slice 2 - Image 1</span>
            <span>Slice 2 - Image 2</span>
            <span>Slice 2 - Image 3</span>
            <span>Slice 2 - Image 4</span>
            <span>Slice 2 - Image 5</span>
        </div>
        <div>
            <span>Slice 3 - Image 1</span>
            <span>Slice 3 - Image 2</span>
            <span>Slice 3 - Image 3</span>
            <span>Slice 3 - Image 4</span>
            <span>Slice 3 - Image 5</span>
        </div>
        <div>
            <span>Slice 4 - Image 1</span>
            <span>Slice 4 - Image 2</span>
            <span>Slice 4 - Image 3</span>
            <span>Slice 4 - Image 4</span>
            <span>Slice 4 - Image 5</span>
        </div>
        <div>
            <span>Slice 5 - Image 1</span>
            <span>Slice 5 - Image 2</span>
            <span>Slice 5 - Image 3</span>
            <span>Slice 5 - Image 4</span>
            <span>Slice 5 - Image 5</span>
        </div>
    </div>


    <!-- titles -->
    <div class="cr-titles">
        <h3>
            <span></span>
            <span>Es tu estílo</span>
        </h3>
        <h3>
            <span>Sensualidad</span>
            <span>Sin dejar a un lado la comodidad</span>
        </h3>
        <h3>
            <span>Tendencias</span>
            <span>Siempre teniendote en cuenta</span>
        </h3>
        <h3>
            <span>Ocasion</span>
            <span>Verano, Invierno, Otoño y Primavera</span>
        </h3>
         <h3>
            <span>Compras</span>
            <span>Solo unos cuantos clicks y tendrás tu Styleu</span>
        </h3>
    </div>

        </section> 

        <!--cierra seccion SLIDER-->


        
       <!--ABRE CONTENIDO-->

        <div class="container"><!--contenedor para el contenido de imagenes-->

        <!--seccion para el contenido-->
        <section>

          <div class="coso">
            
            <!--primer bloque de imagenes (OCASION - CATALOGO)-->
            <div class="row">
                <!--compra por ocasión-->
                <div class="col-lg-6 colorOcasion ocasion">
                    <a href="../proyecto_seccionVestidos/index.php"><img src="img/ocasion.png" alt=""></a>
                </div>
                <!--compra por catálogo-->
                <div class="col-lg-6 colorCatalogo catalogo">
                    <a href="../proyecto_seccionAtuendos/index.php"><img src="img/catalogo.png" alt=""></a>
                </div>
            </div>
            
            <!--segundo bloque de imagenes (LAS QUE TIENEN LA IMAGEN DE LA MARCA)-->
            <div class="row">
                <!--compra por ocasión-->
                <div class="col-lg-6 colorI una">
                    <a href="#"><img src="img/una.png" alt=""></a>
                </div>
                <!--compra por catálogo-->
                <div class="col-lg-6 colorD dos">
                    <a href="#"><img src="img/dos.png" alt=""></a>
                </div>
            </div>

          </div>

        </section>

        </div><!--cierra el contenedor de imagenes-->

        <!--CIERRA CONTENIDO SECCIONES DE IMAGENES-->




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
