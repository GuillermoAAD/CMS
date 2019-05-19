<html>
   <head>
      <title>Modificar</title>

      <link rel="stylesheet" href="../CSS/estiloDetalle.css" />
      <link rel="stylesheet" href="../CSS/estiloBotones.css" />

      <!-- <script src="JSA7.js"> </script> -->

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
               alert("Ingrese el password.");
            } else {
               alert("El administrador " + nombre + " ha sido modificado.");
               document.forma01.submit();
            }
         }         
      </script>

   <head>

   <body>

      <?php

      //require "../sesion.php";
      //if ( sesionActiva() ) {

      session_start();

      if (isset($_SESSION["SesionUsuario"])) {

         include "../Menu/menu.php";
         require "../conecta.php";

         $id = $_GET['id'];

         $sql = "SELECT *
               FROM administradores
               WHERE id = $id";
            
         $res = consulta($sql);

         $nombre    = mysql_result($res, 0, "nombre");
         $apellidos = mysql_result($res, 0, "apellidos");
         $correo    = mysql_result($res, 0, "correo");
         $pass      = mysql_result($res, 0, "pass");
         $imagen    = mysql_result($res, 0, "imagen");
         $activo    = mysql_result($res, 0, "activo");
         $eliminado = mysql_result($res, 0, "eliminado");


         echo "<form name='forma01' method='post' action='modifica.php'>

                  <table class='detalle'>
                     <tr>
                        <td class='col1'>
                           ID:
                        </td>

                        <td>
                           $id
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Nombre(s):
                        </td>

                        <td>
                           <input class='dato' type='text' name='nombre' id='nombre' 
                           placeholder='Escribe tu nombre(s)' value='$nombre' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Apellido(s):
                        </td>

                        <td>
                           <input class='dato' type='text' name='apellidos' id='apellidos' 
                           placeholder='Escribe tu(s) apellido(s)' value='$apellidos' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Correo:
                        </td>

                        <td>
                           <input class='dato' type='text' name='correo' id='correo' 
                           placeholder='Escribe tu correo' value='$correo' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Pass:
                        </td>

                        <td>
                           <input class='dato' type='text' name='pass' id='pass' 
                           placeholder='Escribe tu password' value='$pass' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Imagen:
                        </td>

                        <td>
                           $imagen ¿Modificar?<br>
                        </td>
                     </tr>
                     
                     <tr>
                        <td colspan='2'>
                           <input type='hidden' name='id' id='id' value='$id' />
                           <input class='btnListado modifica' type='submit' value='Guardar cambios' 
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