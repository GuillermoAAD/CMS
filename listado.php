
<link rel="stylesheet" href="miEstilo.css" />

<?php
require "conecta.php";
//require "elimina.php";

$id;

//$con = conecta();
$sql = "SELECT *
        FROM administradores
        WHERE activo = 1 AND eliminado = 0";

//$res = mysql_query($sql, $con);
$res = consulta($sql);

$num = mysql_num_rows($res);


echo "<table id=\"tabla1\" >";
   echo "<tr>";
      echo "<td colspan=\"4\" >";
         echo "<h1>Administradores: $num </h1>";
      echo "</td>";
   echo "</tr>";

   for ($i = 0; $i < $num; $i++)
   {
  // echo "<tr id=\"Fila".$i."\" >";

   if ( $i / 2 == 0) {
      echo "<tr id=\"Fila".$i."\" class=\"blanco\" >";
   } else {
      echo "<tr id=\"Fila".$i."\" class=\"gris\" >";
   }


      echo "<td>";

         $id        = mysql_result($res, $i, "id");
         $nombre    = mysql_result($res, $i, "nombre");
         $apellidos = mysql_result($res, $i, "apellidos");
        
         echo "$nombre $apellidos<br>";

      echo "</td>";

      echo "<td>";
         echo "<a href='ver_detalle.php?id=$id'> 
               <input type=\"button\" value=\"ver Detalles\">
               </a>";
      echo "</td>";

      echo "<td>";
         echo "<a href='formulario_modifica.php?id=$id'> 
               <input type=\"button\" value=\"Modificar\" >
               </a>";
      echo "</td>";

      echo "<td>";
         echo "<a href='elimina.php?id=$id'> 
                  <input type=\"button\" value=\"Eliminar\"> 
               </a>";
         //echo "<input type=\"button\" value=\"Eliminar\" onclick=\"eliminar(this); \"> ";
      echo "</td>";

   echo "</tr>";
}

   echo "<tr>";
      echo "<td>";
         echo "<a href='formulario_insertar.html'> 
               <input type=\"button\" value=\"Agregar un nuevo administrador\" > 
               </a>";
      echo "</td>";
   echo "</tr>";

echo "</table>";



?>

<script type="text/javascript">
   function eliminar(r) {
      var opcion = confirm("¿Esta seguro de eliminar al usuario?");
      if (opcion == true) {
         var i = r.parentNode.parentNode.rowIndex;
         document.getElementById("tabla1").deleteRow(i);



         //alert("Se ha eliminado la fila con el id " + r.parentNode.parentNode.id);
         //aqui cambiar el estado en la bse de datos

         alert("El usuario a sido eliminado");         
      }
   }
</script>
