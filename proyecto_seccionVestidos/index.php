<?php

ob_start("ob_gzhandler"); 
 
//Inicializar una sesion de PHP
session_start();
 
    //Conectar BD
    include("../includes/database.php");  
    conectarse();

    if ((isset($_SESSION['user_id']))) {
 
    //Sacar datos del usuario que ha iniciado sesion
    $query = "  SELECT  id,usuario
              FROM usuarios
              WHERE id = '".$_SESSION['user_id']."'";         
    $result = mysql_query($query); 
 
    $username = "";
 
    //Formar el nombre completo del usuario
    if($fila = mysql_fetch_array($result))
      $username = $fila['usuario'];
  }

  if(isset($_SESSION['carro'])) 
  $carro=$_SESSION['carro'];else $carro=false; 
  
  //Sacar datos de la tabla de los productos
  $query_productos = "SELECT *
                  FROM lista_productos
                  order by producto asc";
  $qry=mysql_query($query_productos);
 
//Cerrrar conexion a la BD
mysql_close($link);

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
                                <a href="../logout.php" class="boton" id="boton-logs">Cerrar sesión</a>                            
                              </div>

                              <div class="col-lg-3 centrar iconosRedes2">
                                <a href="../proyecto_seccionCompras/index.php" class="boton" id="boton-logs">Tienda</a>                            
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
                    <a href="#"><img src="img/buenaDos.png" alt=""></a>
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



          <!--ABRE franja de filtros-->
            <div class="row">
              <div class="col-lg-8 colorFranja arribaDos">              
              </div> 
            </div>
          <!--CIERRA franja de filtros-->

          <div class="container productos">

          <?php   
          while($row=mysql_fetch_assoc($qry))
          $rows[] = $row;

             $c = 0;
             foreach( $rows as $row ):

            $producto = stripslashes($row['producto']);
            $precio = stripcslashes($row['precio']);
            $url = stripslashes($row['url']);
            $id = $row['id'];

                //Needs Break Boolean, true if counter at second column
                $b = (( ++$c % 4 == 0 ) ? true : false );

                if ( $b ) 
                    echo '<div class="row">';
                  
                    ?>

                   <div class="col-md-2">
              <figure>
                  <img class='imagen-articulo' src="<?php echo $url ?>" alt="Productos">
                </figure>
                <br />
                <?php 

              if(!$carro || !isset($carro[md5($row['id'])]['identificador']) || $carro[md5($row['id'])]['identificador']!=md5($row['id'])){ 

              ?> 
              <a href="../agregarCarrito.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>"> 
              <img class="agregarCarrito" src="img/carrito.png" border="0" title="Agregar al Carrito"></a><?php 
              } 
              else {
                ?>

              <a href="borrarCarrito.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>"> 
              <img class="agregarCarrito" src="img/carrito2.png" border="0" title="Quitar del Carrito"></a><?php } 

              ?>
              <br />
                <h5 class="precio">$<?php echo $precio ?></h5>
                <br />
                <a href="#"><?php echo $producto ?></a>
                <br />
                   </div>

               <?php

                if ( $b ) 
                    echo '</div>';
              endforeach;

            ?>
<!--             </div>


            <div class="row">

              <div class="col-lg-3 colorIma arribaTres">
              <a><img src="img/uno.png" alt=""></a>                            
              <li><a class="v">Styleu</a></li>
              <li><a class="b">Florar rose dress</a></li>
              <p class="pp">Add to:</p>           
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>            
              </div>

              <div class="col-lg-3 colorImaD arribaTres">
              <a><img src="img/dos.png" alt=""></a>
              <li><a class="v">Styleu</a></li>
              <li><a class="b">Black dress</a></li>
              <p class="pp">Add to:</p> 
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>              
              </div>

              <div class="col-lg-3 colorImaT arribaTres">
              <a><img src="img/tres.png" alt=""></a>
              <li><a class="v">Styleu</a></li>
              <li><a class="b">Blue dress</a></li>
              <p class="pp">Add to:</p> 
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>              
              </div>

              <div class="col-lg-3 colorImaC arribaTres">
              <a><img src="img/cuatro.png" alt=""></a>
              <li><a class="v">Styleu</a></li>
              <li><a class="b">May dress</a></li>
              <p class="pp">Add to:</p> 
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>              
              </div>            

            </div>

            <div class="row">

              <div class="col-lg-3 colorImaa arribaCuatro">
              <a><img src="img/cinco.png" alt=""></a>
              <li><a class="v">Styleu</a></li>
              <li><a class="b">Silver dress</a></li>
              <p class="pp">Add to:</p> 
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>              
              </div>

              <div class="col-lg-3 colorImaDD arribaCuatro">
              <a><img src="img/seis.png" alt=""></a>
              <li><a class="v">Styleu</a></li>
              <li><a class="b">Relax dress</a></li>
              <p class="pp">Add to:</p> 
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>              
              </div>

              <div class="col-lg-3 colorImaTT arribaCuatro">
              <a><img src="img/siete.png" alt=""></a>
              <li><a class="v">Styleu</a></li>
              <li><a class="b">Florar relax dress</a></li>
              <p class="pp">Add to:</p> 
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>              
              </div>

              <div class="col-lg-3 colorImaCC arribaCuatro">
              <a><img src="img/ocho.png" alt=""></a>
              <li><a class="v">Styleu</a></li>
              <li><a class="b">Cebra dress</a></li>
              <p class="pp">Add to:</p> 
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>              
              </div>            

            </div>

            <div class="row">

              <div class="col-lg-3 colorImaaa arribaCinco">
              <a><img src="img/nueve.png" alt=""></a>
              <li><a class="v">Styleu</a></li>
              <li><a class="b">Stretch black dress</a></li>
              <p class="pp">Add to:</p> 
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>              
              </div>

              <div class="col-lg-3 colorImaDDD arribaCinco">
              <a><img src="img/diez.png" alt=""></a>
              <li><a class="v">Styleu</a></li>
              <li><a class="b">Red dress</a></li>
              <p class="pp">Add to:</p> 
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>              
              </div>

              <div class="col-lg-3 colorImaTTT arribaCinco">
              <a><img src="img/once.png" alt=""></a>
              <li><a class="v">Styleu</a></li>
              <li><a class="b">Hi dress</a></li>
              <p class="pp">Add to:</p> 
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>              
              </div> 

              <div class="col-lg-3 colorImaW arribaCinco">
              <a><img src="img/doce.png" alt=""></a>
              <li><a class="v">Styleu</a></li>
              <li><a class="b">Waiou dress</a></li>
              <p class="pp">Add to:</p> 
              <a class="c" href="#"><img src="img/corazon.png" alt=""></a>
              <a class="q" href="#"><img src="img/carrito.png" alt=""></a>              
              </div>         

            </div>
 -->

          <!--CIERRA contenido de imagenes-->

         </div><!--CIERRA row mayor-->

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
