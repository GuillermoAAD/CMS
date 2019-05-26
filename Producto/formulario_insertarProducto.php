<html>
   <head>
      <title>Insertar</title>

      <link rel="stylesheet" href="../CSS/estiloDetalle.css" />
      <link rel="stylesheet" href="../CSS/estiloBotones.css" />

      <!--<script src="varios.js"> </script>-->

      <script>
         function validacion(){
            var nombre = document.forma01.nombre.value;
            var codigo = document.forma01.codigo.value;
            var descripcion = document.forma01.descripcion.value;
            var costo = document.forma01.costo.value;
            var imagen = document.forma01.imagen.value;
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
            else if (imagen == "") {
               alert("Seleccione una imagen.");
            }
            else if (stock == "") {
               alert("Ingrese el stock.");
            } else {
               //alert("El Producto " + nombre + " ha sido agregado.");
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

         echo "<form name='forma01' method='post' action='insertaProducto.php' enctype='multipart/form-data'>
   
                  <table class='detalle'>
                     <tr>
                        <td class='col1'>
                           Nombre:
                        </td>

                        <td>
                           <input class='dato' type='text' name='nombre' id='nombre' 
                           placeholder='Escribe el nombre' value='' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Codigo:
                        </td>

                        <td>
                           <input class='dato' type='text' name='codigo' id='codigo' 
                           placeholder='Escribe el codigo' value='' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Descripcion:
                        </td>

                        <td>
                           <input class='dato' type='text' name='descripcion' id='descripcion' 
                           placeholder='Escribe unas descripcion' value='' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Costo:
                        </td>

                        <td>
                           <input class='dato' type='text' name='costo' id='costo' 
                           placeholder='Escribe el costo' value='' />
                        </td>
                     </tr>
                     
                     <tr>
                        <td class='col1'>
                           Imagen:
                        </td>
                        
                        <td>
                           <input type='file' class='' id='imagen' name='imagen'>
                        </td>
                     </tr>

                     <tr>
                        <td class='col1'>
                           Stock:
                        </td>

                        <td>
                           <input class='dato' type='number' name='stock' id='stock' 
                           placeholder='Escribe el stock' value='' />
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