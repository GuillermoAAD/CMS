<?php
   require "conecta.php";
   require "varios.php";

   $id = $_GET['id'];

   //$con = conecta();
   $sql = "SELECT *
           FROM administradores
           WHERE id = $id";
   
   //$res = mysql_query($sql, $con);
   $res = consulta($sql);
   
   $num = mysql_num_rows($res);

   $nombre    = mysql_result($res, 0, "nombre");
   $apellidos = mysql_result($res, 0, "apellidos");
   $correo    = mysql_result($res, 0, "correo");
   $pass      = mysql_result($res, 0, "pass");
   $imagen    = mysql_result($res, 0, "imagen");
   $activo    = mysql_result($res, 0, "activo");
   $eliminado = mysql_result($res, 0, "eliminado");

   echo "ID: $id <br>";
   echo "Nombre: $nombre <br>";
   echo "Apellido: $apellidos <br>";
   echo "Correo: $correo <br>";
   echo "Pass: $pass <br>";
   echo "Imagen: $imagen <br>";
   //echo "Activo: $activo <br>";
   //echo "Eliminado: $eliminado <br>";


   echo "<a href='formulario_modifica.php?id=$id'>
           <input type=\"button\" value=\"Modificar\" >
        </a>";
   echo "<br><br><a href='listado.php'>
           <input type=\"button\" value=\"Regresar al listado\" >
         </a> ";
?>
