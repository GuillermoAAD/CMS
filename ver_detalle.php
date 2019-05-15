<link rel="stylesheet" href="estiloDetalle.css" />
<link rel="stylesheet" href="estiloBotones.css" />

<?php
   require "conecta.php";
   include "menu.php";

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

   echo "<table class='detalle'>
           <tr>
              <td class='col1'>ID:</td>
              <td>$id</td>
           </tr>
           
           <tr>
              <td class='col1'>Nombre(s):</td>
              <td>$nombre</td>
           </tr>
           
           <tr>
              <td class='col1'>Apellido(s):</td>
              <td>$apellidos</td>
           </tr>
           
           <tr>
              <td class='col1'>Correo:</td>
              <td>$correo</td>
           </tr>
           
           <tr>
              <td class='col1'>Pass:</td>
              <td>$pass</td>
           </tr>
           
           <tr>
              <td class='col1'>Imagen:</td>
              <td>$imagen</td>
           </tr>
           
           <tr>
              <td colspan='2'>
                 <a href='formulario_modifica.php?id=$id'>
                    <input class='modifica' type='button' value='Modificar' >
                 </a>
              </td>
           <tr>
           
         </table>";
         
   //echo "ID: $id <br>";
   //echo "Nombre: $nombre <br>";
   //echo "Apellido: $apellidos <br>";
   //echo "Correo: $correo <br>";
   //echo "Pass: $pass <br>";
   //echo "Imagen: $imagen <br>";
   //echo "Activo: $activo <br>";
   //echo "Eliminado: $eliminado <br>";

?>
