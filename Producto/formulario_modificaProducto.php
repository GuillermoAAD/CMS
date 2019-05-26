<html>
   <head>
      <title>Modificar</title>

      <link rel="stylesheet" href="../CSS/estiloDetalle.css" />
      <link rel="stylesheet" href="../CSS/estiloBotones.css" />
      <link rel="stylesheet" href="../CSS/estiloImg.css" />

      <!-- <script src="JSA7.js"> </script> -->

      <script>
         function validacion(){
            var nombre = document.forma01.nombre.value;
            var codigo = document.forma01.codigo.value;
            var descripcion = document.forma01.descripcion.value;
            var costo = document.forma01.costo.value;
            var stock = document.forma01.stock.value;

         	if (nombre == "") {
               alert("Ingrese el nombre.");
            }
         	else if (codigo == "") {
               alert("Ingrese el codigo.");
            }
         	else if (descripcion == "") {
               alert("Ingrese una descripcion.");
            }
         	else if (costo == "") {
               alert("Ingrese el costo.");
            }
         	else if (stock == "") {
               alert("Ingrese el stock.");
            } else {
               alert("El Producto " + nombre + " ha sido modificado.");
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
               FROM productos
               WHERE id = $id";
            
         $res = consulta($sql);

         $nombre      = mysql_result($res, 0, "nombre");
         $codigo      = mysql_result($res, 0, "codigo");
         $descripcion = mysql_result($res, 0, "descripcion");
         $costo       = mysql_result($res, 0, "costo");
         $imagen      = mysql_result($res, 0, "imagen");
         $stock       = mysql_result($res, 0, "stock");
         $activo      = mysql_result($res, 0, "activo");
         $eliminado   = mysql_result($res, 0, "eliminado");


         echo "<form name='forma01' method='post' action='modificaProducto.php'>

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
                           Nombre:
                        </td>

                        <td>
                           <input class='dato' type='text' name='nombre' id='nombre' 
                           placeholder='Escribe el nombre' value='$nombre' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Codigo:
                        </td>

                        <td>
                           <input class='dato' type='text' name='codigo' id='codigo' 
                           placeholder='Escribe tu(s) apellido(s)' value='$codigo' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Descripcion:
                        </td>

                        <td>
                           <input class='dato' type='text' name='descripcion' id='descripcion' 
                           placeholder='Escribe una descripcion' value='$descripcion' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Costo:
                        </td>

                        <td>
                           <input class='dato' type='text' name='costo' id='costo' 
                           placeholder='Escribe tu password' value='$costo' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Imagen:
                        </td>

                        <td>
                           <img class='imagen' src='imgProducto/$imagen' ></img>
                        </td>
                     </tr>

                     <tr>
                        <td class='col1'>
                           Stock:
                        </td>

                        <td>
                           <input class='dato' type='text' name='stock' id='stock' 
                           placeholder='Escribe tu password' value='$stock' />
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