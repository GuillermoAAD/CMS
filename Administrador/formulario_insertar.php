<html>
   <head>
      <title>Insertar</title>

      <link rel="stylesheet" href="../CSS/estiloDetalle.css" />
      <link rel="stylesheet" href="../CSS/estiloBotones.css" />

      <!--<script src="varios.js"> </script>-->

      <script>
         function validacion(){

            var nombre = document.forma01.nombre.value;
            var apellidos = document.forma01.apellidos.value;
            var correo = document.forma01.correo.value;
            var pass = document.forma01.pass.value;

         	if (nombre == "") {
               alert("Ingrese el nombre.");
            }
         	else if (apellidos == "") {
               alert("Ingrese los apellidos.");
            }
         	else if (correo == "") {
               alert("Ingrese el correo.");
            }
         	else if (pass == "") {
               alert("Ingrese un password.");
            } else {
               alert("Se ha agregado a " + nombre + " a la base de datos.");
               document.forma01.submit();
            }
         }         
      </script>
   
   </head>

   <body>

      <?php

      //require "../sesion.php";
      //if ( sesionActiva() ) {

      session_start();

      if (isset($_SESSION["SesionUsuario"])) {
      
         include "../Menu/menu.php";

         echo "<form name='forma01' method='post' action='inserta.php'>
   
                  <table class='detalle'>
                     <tr>
                        <td class='col1'>
                           Nombre(s):
                        </td>

                        <td>
                           <input class='dato' type='text' name='nombre' id='nombre' 
                           placeholder='Escribe tu nombre(s)' value='' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Apellido(s):
                        </td>

                        <td>
                           <input class='dato' type='text' name='apellidos' id='apellidos' 
                           placeholder='Escribe tu(s) apellidos(s)' value='' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Correo:
                        </td>

                        <td>
                           <input class='dato' type='text' name='correo' id='correo' 
                           placeholder='Escribe tu correo' value='' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Pass:
                        </td>

                        <td>
                           <input class='dato' type='text' name='pass' id='pass' 
                           placeholder='Escribe tu password' value='' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Imagen:
                        </td>
                        
                        <td>
                           
                        </td>
                     </tr>
                     
                     <tr>
                        <td colspan='2'>
                           <input type='hidden' name='id' id='id' value='' />
                           <input class='btnListado inserta' type='submit' value='Agregar' 
                           name='boton1' id='boton1' onclick='validacion(); return false;' /> <br>
                        </td>
                     <tr>
                     
                  </table>
                </form>";

      } else {
         echo "<script>
                  location.href = '../login.php';
               </script>";
      }
      ?>

   </body>
</html>