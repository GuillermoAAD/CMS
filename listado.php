<html>
   <head>
      <title>Listado Administradores</title>

      <link rel="stylesheet" href="miEstilo.css" />
      <link rel="stylesheet" href="estiloBotones.css" />

   </head>

   <body>

      <?php

         include "menu.php";
         require "conecta.php";

         $id;

         $sql = "SELECT *
                 FROM administradores
                 WHERE activo = 1 AND eliminado = 0";

         $res = consulta($sql);

         $num = numRegistros($res);


         echo "<table id='tabla1' class='tabla1'>
                  <tr>
                  <td colspan='4' >
                        <h1 class='numAdmins'>Administradores: $num </h1> <hr>
                     </td>
                  </tr>

                  <tr>
                     <td>
                        <a href='formulario_insertar.php'> 
                        <input class='btnListado inserta' type='button' value='Agregar un nuevo administrador' > 
                        </a>
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


               echo "<td>";

                  $id        = mysql_result($res, $i, "id");
                  $nombre    = mysql_result($res, $i, "nombre");
                  $apellidos = mysql_result($res, $i, "apellidos");
               
                  echo "<span class='nombreUsuario'> $nombre $apellidos</span><br>

                     </td>

                     <td>
                        <a href='ver_detalle.php?id=$id'> 
                        <input class='btnListado ver' type='button' value='Detalles'>
                        </a>
                     </td>

                     <td>
                        <a href='formulario_modifica.php?id=$id'> 
                        <input class='btnListado modifica' type='button' value='Modificar' >
                        </a>
                     </td>

                     <td>
                        <a href='elimina.php?id=$id'> 
                           <input class='btnListado elimina' type='button' value='Eliminar'> 
                        </a>
                     </td>

                  </tr>";
         }
         echo "</table>";

      ?>

   </body>
</html>