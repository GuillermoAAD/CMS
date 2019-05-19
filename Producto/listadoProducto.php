<html>
   <head>
      <title>Listado Productos</title>

      <link rel="stylesheet" href="../CSS/miEstilo.css" />
      <link rel="stylesheet" href="../CSS/estiloBotones.css" />

   </head>

   <body>

      <?php

      //require "../sesion.php";
      //if ( sesionActiva() ) {

      session_start();

      if (isset($_SESSION["SesionUsuario"])) {

         include "../Menu/menu.php";
         require "../conecta.php";

         $id;

         $sql = "SELECT *
                 FROM productos
                 WHERE activo = 1 AND eliminado = 0";

         $res = consulta($sql);

         $num = numRegistros($res);


         echo "<table id='tabla1' class='tabla1'>
                  <tr>
                     <td colspan='6' >
                        <h1 class='numAdmins'>Productos: $num </h1> <hr>
                     </td>
                  </tr>

                  <tr>
                     <!--<td></td>-->
                     <td colspan='6'>
                        <a href='formulario_insertarProducto.php'> 
                        <input class='btnListado inserta' type='button' value='Agregar un nuevo Producto' > 
                        </a>
                     </td>
                  </tr>


                  <tr>
                     <td>
                        Nombre
                     </td>
                     <td>
                        Costo
                     </td>
                     <td>
                        Stock
                     </td>
                  </tr>";
            

            for ($i = 0; $i < $num; $i++)
            {
            // echo "<tr id='Fila".$i."' >";

               if ( $i % 2 != 0) {
                  echo "<tr id='Fila".$i."' class='blanco' >";
               } else {
                  echo "<tr id='Fila".$i."' class='gris' >";
               }
         /*
               if ( $i % 2 != 0) {
                  echo "<td class='blanco' >";
               } else {
                  echo "<td class='gris' >";
               }*/

               $id        = mysql_result($res, $i, "id");
               $nombre    = mysql_result($res, $i, "nombre");
               $costo = mysql_result($res, $i, "costo");
               $stock = mysql_result($res, $i, "stock");

               echo "<td>
                        <span class='nombreUsuario'>$nombre</span><br>
                     </td>";

               echo "<td>
                        <span class='nombreUsuario'>$costo</span><br>
                     </td>";

               echo "<td>
                        <span class='nombreUsuario'>$stock</span><br>
                     </td>";

               echo "<td>
                        <a href='ver_detalleProducto.php?id=$id'> 
                        <input class='btnListado ver' type='button' value='Detalles'>
                        </a>
                     </td>

                     <td>
                        <a href='formulario_modificaProducto.php?id=$id'> 
                        <input class='btnListado modifica' type='button' value='Modificar' >
                        </a>
                     </td>

                     <td>
                        <a href='eliminaProducto.php?id=$id'> 
                           <input class='btnListado elimina' type='button' value='Eliminar'> 
                        </a>
                     </td>

                  </tr>";
         }
         echo "</table>";

      } else {
         echo "<script>
                  location.href = '../login.php';
               </script>";
      }

      ?>

   </body>
</html>