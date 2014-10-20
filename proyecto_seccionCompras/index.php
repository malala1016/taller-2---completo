<?php

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
                                            <li><a class="a" href="../img/proyecto_seccionOcasion/index.php">catalogo</a></li>
                                            <li><a class="a" href="../img/proyecto_seccionCompras/index.php">Mas Vistos</a></li>  
                                        </ul>
                                    </div>
                                  </nav>
                                </div> 


                                <div class="nombreUsuario"><p class="nom">Bienvenido,<?php echo $username; ?></p></div>

                            <!--
                              <form class="navbar-form navbar-left buscador">
                                  <div class="form-group">
                                    <input type="text" class="form-control"></div>
                                  <button type="submit" class="btn btn-default">Buscar</button>
                              </form>
                            -->
                              
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
                    <a href="#"><img src="img/compras.png" alt=""></a>
                </div>
            </div>

            </div>

        </section> 
        <!--CIERRA imagen de la seccion OCASION-->



        <div class="container">


       <!--ABRE CONTENIDO-->

        <div class="container arriba"><!--contenedor para el formulario de compras-->

        <!--seccion para el contenido-->
        <section>
 
           
            <div class="row"><!--ABRE row mayor-->   

                <!--ABRE cuadro blanco de etiquetas-->
                <div class="col-lg-2 colorC">
                    
                <div class="collapse navbar-collapse navbar-exl-collapse">
                  <ul class="nav navbar nav">

                    <li><a>ROPA</a><!--ROPA-->
                      <li><a>Por Categoria</a>
                         <li><a>Vestidos</a>
                            <ul>Dia</a></ul>
                            <ul>Noche</a></ul>
                            <ul>Fit</a></ul>
                            <ul>Largos</a></ul>
                         </li>
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
                    </li><!--cierra el li de COMPRA POR-->
                  </ul>
                </div>
                </div><!--CIERRAcuadro blanco de etiquetas-->


              

          <!--ABRE franja de etiquetas de navegacion-->
            <div class="row">
              <div class="col-lg-8 colorFranja arribaDos">

               <!--ABRE la barra de navegación de COMPRAS-->
                  <div class="row">
                              <div class="col-lg-12">
                                  <nav>                                  
                                    <div class="collapse navbar-collapse navbar-exl-collapse">
                                        <ul class="nav navbar-nav etiquetasDos">
                                          <div class="col-lg-4">
                                            <li><a class="a" href="#">Vista General</a></li>
                                            </div>
                                            <div class="col-lg-2">
                                            <li><a class="a" href="#">Cuenta</a></li>
                                            </div>
                                            <div class="col-lg-2">
                                            <li><a class="a" href="#">Credito</a></li>
                                            </div>
                                            <div class="col-lg-2">
                                            <li><a class="a" href="#">Deseos</a></li>
                                            </div>
                                            <div class="col-lg-2">
                                            <li><a class="a" href="#">Ordenes</a></li>
                                            </div>                                                   
                                        </ul>
                                    </div>
                                  </nav>
                                </div>
                   </div>
               <!--CIERAA la barra de navegación de COMPRAS-->

              </div> 
            </div>
          <!--CIERRA franja de etiquetas de navegacion-->

          <!--ABRE contenedor formulario UNO-->
            <div class="row">
              <div class="col-lg-12 colorContenedorFormulario arribaTres">

                <h6><ul class="ordenU">Informacion Personal</ul></h6>
                <h6><ul class="ordenD">Mi Lista de Deseos</ul></h6>
                <h6><ul class="ordenA">Ver</ul></h6>
                <h6><ul class="ordenAA">Editar</ul></h6>
                <h6><ul class="ordenAAA">Eliminar</ul></h6>



                <div class="col-lg-6 bo">
                 <form action="demo_form.asp">
                   <h6 class="boo">Nombre:<input type="text" name="FirstName" value="Nombre"><br></h6>
                   <h6 class="boo">Email:<input type="text" name="LastName" value="Email"><br></h6>
                   <h6 class="boo">Direccion:<input type="text" name="Address" value="Direccion"><br></h6>  </form>

                </div>

                <hr>
              
               <div class="col-lg-12">
                <h6><ul class="orden">Orden pasada</ul></h6>
 
               </div>
          <!--CIERRA contenedor formulario UNO-->


          <!--CIERRA contenido de imagenes-->


            </div><!--CIERRA row mayor-->

                <div class="productosComprados">
                 
                <?php
                  if($carro){ 
             
                  $contador=0;

                  $suma=0;

                  $c = 0;
                  foreach( $carro as $k => $v ):

                  $subto=$v['cantidad']*$v['precio']; 
                  $suma=$suma+$subto; 
                  $contador++; 

                          //Needs Break Boolean, true if counter at second column
                          $b = (( ++$c % 4 == 0 ) ? true : false );

                          if ( $b ) 
                              echo '<div class="row">';
                            
                              ?>

                             <div class="col-md-2">
                              <form name="a<?php echo $v['identificador'] ?>" method="post" action="../agregarCarrito.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>"> 
                        <figure>
                            <img class='imagen-articulo' src="../proyecto_seccionVestidos/<?php echo $v['url'] ?>" alt="Productos">
                          </figure>
                          <br />
                 
                          <input name="id" type="hidden" id="id" value="<?php echo $v['id'] ?>"> </td> 
                        <a href="../borrarCarrito.php?<?php echo SID ?>&id=<?php echo $v['id'] ?>">
                          <img class="agregarCarrito" src="img/borrarProducto.png" border="0">
                        </a>
                        
                        <br />
                          <h5 class="precio">$<?php echo $v['precio'] ?></h5>
                          <br />
                          <a href="#"><?php echo $v['producto'] ?></a>
                          <br />

                          </form> 
                             </div>

                         <?php

                          if ( $b ) 
                              echo '</div>';
                        endforeach;

                      ?>

                      <div id="row">
                    <div class="col-md-12">
                    <br />
                    <br />
                      <h5 class="prod">Total: $<?php echo number_format($suma,2); 
                    ?></h5>
                    <br />
                    <br />
                      </div>
                    </div>

                  <?php }
                  else{ 
                  ?> 
                    <p align="center"> <span class="prod">No hay productos seleccionados</span> 
                    <a href="../proyecto_seccionVestidos/index.php?<?php echo SID;?>"> 
                    Continuar comprando</a>  
                    <?php 
                  }
                  ?> 
                  </p> 
               </div>
               </div>


        </section>

        </div><!--cierra el contenedor de formularios de compras-->



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
