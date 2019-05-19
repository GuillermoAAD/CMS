<html>
   <head>
      <title>menu</title>

      <link rel="stylesheet" href="CSS/estiloMenu.css" /> 
      <link rel="stylesheet" href="../CSS/estiloMenu.css" /> 

   </head>

   <body>

   <?php
      //session_start();

      //require "../sesion.php";

      if (isset($_SESSION["SesionUsuario"])) {

      //if ( sesionActiva() ) {

         $archivo_actual = basename($_SERVER['PHP_SELF']); //Regresa el nombre del archivo actual
         
         echo "
         <nav class='contenedorMenu'>
            <div class='mensaje'>
               <div class='izquierda'>
                  Hola 
                  $_SESSION[SesionUsuario]
                  
               </div>

               <div class='derecha'>
               <a href='../logout.php'>Salir</a>
               </div>
            </div>
            
            <br> <br>

            <table class=''>
               <tr class=''>
                  <td class=''>";
                  if ($archivo_actual != "principal.php"){

                     echo "<a href='../Principal/principal.php'>
                              <input class='btnMenu' type='button' value='Inicio'>
                           </a>";
                  } else {
                     echo "<input class='actual' type='button' value='Inicio'>";
                  }

                  echo "
                  </td>
                  
                  <td class=''>
                  ";
                     
                     if ($archivo_actual != "listadoAdmin.php"){

                        echo "<a href='../Administrador/listadoAdmin.php'>
                                 <input class='btnMenu' type='button' value='Administradores'>
                              </a>";
                     } else {
                        echo "<input class='actual' type='button' value='Administradores'>";
                     }

                     echo "
                  </td>
                  
                  <td class=''>";
                     
                     if ($archivo_actual != "listadoProducto.php"){

                        echo "<a href='../Producto/'>
                                 <input class='btnMenu' type='button' value='Productos'>
                              </a>";
                     } else {
                        echo "<input class='actual' type='button' value='Productos'>";
                     }

                     echo "
                  </td>
                  <!--<td class='link'><a href=''></a></td>-->
               </tr>
            </table>

            <hr>

         </nav>";
      } else {
         echo "<script>
                  location.href = '../login.php';
               </script>";
      }

   ?>

   </body>
</html>