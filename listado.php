<link rel="stylesheet" href="miEstilo.css" />
<link rel="stylesheet" href="estiloBotones.css" />

<?php
require "conecta.php";
include "menu.php";

$id;

$sql = "SELECT *
        FROM administradores
        WHERE activo = 1 AND eliminado = 0";

$res = consulta($sql);

$num = mysql_num_rows($res);


echo "<table id='tabla1' >";
   echo "<tr>";
      echo "<td colspan='4' >";
         echo "<h1>Administradores: $num </h1> <hr>";
      echo "</td>";
   echo "</tr>";

   echo "<tr>";
      echo "<td>";
         echo "<a href='formulario_insertar.php'> 
               <input class='inserta' type='button' value='Agregar un nuevo administrador' > 
               </a>";
      echo "</td>";
   echo "</tr>";
   

   for ($i = 0; $i < $num; $i++)
   {
   //echo "<tr id='Fila".$i."' >";

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
        
         echo "<span class='nombreUsuario'> $nombre $apellidos</span><br>";

      echo "</td>";

      echo "<td>";
         echo "<a href='ver_detalle.php?id=$id'> 
               <input class='ver' type='button' value='ver Detalles'>
               </a>";
      echo "</td>";

      echo "<td>";
         echo "<a href='formulario_modifica.php?id=$id'> 
               <input class='modifica' type='button' value='Modificar' >
               </a>";
      echo "</td>";

      echo "<td>";
         echo "<a href='elimina.php?id=$id'> 
                  <input class='elimina' type='button' value='Eliminar'> 
               </a>";
      echo "</td>";

   echo "</tr>";
}
echo "</table>";

?>
