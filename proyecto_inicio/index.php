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
                              
                             
                          </div>
                      </div><!--cierra el contenedor-->
                  </header>
                   

               </div><!--cierra la clase de la barra de arriba (logo, etiquetas y redes sociales)-->

           </div><!--cierra la clase row-->

   


        
       <!--ABRE CONTENIDO-->

        <div class="container"><!--contenedor para el contenido de imagenes-->

        <!--seccion para el contenido-->
        <section>
          <div class="coso">            
            <!--primer bloque de imagenes (OCASION - CATALOGO)-->

            <form name="user_form" action="validar_usuario.php" method="POST">

            <div class="row">
                <div class="h7"><h7>Usuario</h7></div>
              <input class="campos usuario" type="text" name="usuario" id="usuario" class="required" maxlength="50">
              <div class="h8"><h7>Contraseña</h7></div>
              <input class="campos contrasena" type="password" name="password" id="password" class="required"  maxlength="50">
                <input class="boton" id="boton-logs" type="submit" name="enviar" value="Iniciar sesión" >
            </div>  

            </form>

          </div>
        </section>
        </div><!--cierra el contenedor de imagenes-->

        <p class="ask-log">¿No tienes cuenta? <a class="call-to-action" href="../proyecto_registro/index.php">Registrate</a></p>

        <!--CIERRA CONTENIDO SECCIONES DE IMAGENES-->


           </div><!--cierra el fondo de toda la pagina-->



           <?php
/*
          //Mostrar errores de validacion de usuario, en caso de que lleguen
        if( isset( $_POST['msg_error'] ) )
        {
          switch( $_POST['msg_error'] )
          {
            case 1:
              ?>
              <script type="text/javascript"> 
                alert("El usuario o password son incorrectos.");
              </script>
              <?php
            break;          
            case 2:
              ?>
              <script type="text/javascript"> 
                alert("La seccion a la que intentaste entrar esta restringida.\n Solo permitida para usuarios registrados.");
              </script>
              <?php       
            break;
                }//Fin switch
            }*/
            ?>
 
        
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.js"></script>

        <script src="js/main.js"></script>

        
    </body>
</html>
