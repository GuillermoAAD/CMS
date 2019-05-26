<html>
   <head>
      <title>Detalles</title>

      <link rel="stylesheet" href="../CSS/estiloDetalle.css" />
      <link rel="stylesheet" href="../CSS/estiloBotones.css" />
      <link rel="stylesheet" href="../CSS/estiloImg.css" />

   </head>

   <body>

      <?php

      //require "../sesion.php";
      //if ( sesionActiva() ) {

         session_start();

         if (isset($_SESSION["SesionUsuario"])) {

         require "../conecta.php";
         include "../Menu/menu.php";

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

         echo "<table class='detalle'>
               <tr>
                  <td class='col1'>ID:</td>
                  <td>$id</td>
               </tr>
               
               <tr>
                  <td class='col1'>Nombre:</td>
                  <td>$nombre</td>
               </tr>
               
               <tr>
                  <td class='col1'>Codigo:</td>
                  <td>$codigo</td>
               </tr>
               
               <tr>
                  <td class='col1'>Descripcion:</td>
                  <td>$descripcion</td>
               </tr>
               
               <tr>
                  <td class='col1'>Costo:</td>
                  <td>$costo</td>
               </tr>
               
               <tr>
                  <td class='col1'>Imagen:</td>
                  <td><img class='imagen' src='imgProducto/$imagen' ></img></td>
               </tr>

               <tr>
                  <td class='col1'>Stock:</td>
                  <td>$stock</td>
               </tr>
               
               <tr>
                  <td colspan='2'>
                     <a href='formulario_modificaProducto.php?id=$id'>
                        <input class='btnListado modifica' type='button' value='Modificar' >
                     </a>
                  </td>
               <tr>
               
               </table>";

      } else {
         echo "<script>
                  location.href = '../login.php';
               </script>";
      }

      ?>

   </body>
</html>