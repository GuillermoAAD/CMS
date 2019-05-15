<?php

require "conecta.php";
   
$id = $_REQUEST['id'];

/*$sql = "DELETE FROM administradores 
           WHERE id='$id' ";*/

$sql = "UPDATE administradores 
        SET activo=0, eliminado=1 
        WHERE id='$id' ";

$res = consulta($sql);
   
header("Location:listado.php");

?>
