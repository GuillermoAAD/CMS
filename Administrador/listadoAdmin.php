<html>
   <head>
      <title>Listado Administradores</title>

      <link rel="stylesheet" href="../CSS/miEstilo.css" />
      <link rel="stylesheet" href="../CSS/estiloBotones.css" />

      <!--Lo siguiente es para borrar con jquery-->
      <script type="text/javascript" src="../JS/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="../JS/eliminar.js"></script>

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
                 FROM administradores
                 WHERE activo = 1 AND eliminado = 0";

         $res = consulta($sql);

         $num = numRegistros($res);


         echo "<table id='tabla1' class='tabla1'>
                  <tr>
                     <td colspan='5' >
                        <h1 class='numAdmins'>Administradores: $num </h1> <hr>
                     </td>
                  </tr>

                  <tr>
                     <!--<td></td>-->
                     <td colspan='5'>
                        <a href='formulario_insertar.php'> 
                        <input class='btnListado inserta' type='button' value='Agregar un nuevo administrador' > 
                        </a>
                     </td>
                  </tr>
                  
                  <tr>
                     <td>
                        Nombre Completo
                     </td>
                     <td>
                        Correo
                     </td>
                  </tr>";
            

            for ($i = 0; $i < $num; $i++)
            {
            // echo "<tr id='Fila".$i."' >";

               if ( $i % 2 != 0) {
                  echo "<tr id='fila".$i."' class='blanco' >";
               } else {
                  echo "<tr id='fila".$i."' class='gris' >";
               }
         /*
               if ( $i % 2 != 0) {
                  echo "<td class='blanco' >";
               } else {
                  echo "<td class='gris' >";
               }*/


                  $id        = mysql_result($res, $i, "id");
                  $nombre    = mysql_result($res, $i, "nombre");
                  $apellidos = mysql_result($res, $i, "apellidos");
                  $correo = mysql_result($res, $i, "correo");

                  echo "<td>
                        <span class='nombreUsuario'>$nombre $apellidos</span><br>
                     </td>";

                  echo "<td>
                        <span class='nombreUsuario'>$correo</span><br>
                     </td>";
               
                  echo "
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

                     <!--
                     <td>
                        <a href='elimina.php?id=$id'> 
                           <input class='btnListado elimina' type='button' value='Eliminar'> 
                        </a>
                     </td>
                     -->

                     <td>
                        <a href='javascript:void(0);'> 
                           <input class='btnListado elimina' type='button' value='Eliminar' onClick='eliminarAdministrador($i,$id,\"$nombre\")' > 
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