<?php

//require "../sesion.php";
//if ( sesionActiva() ) {

session_start();

if (isset($_SESSION["SesionUsuario"])) {


   require "../conecta.php";
   
   $id = $_REQUEST['id'];

   /*$sql = "DELETE FROM administradores 
             WHERE id='$id' ";*/

   $sql = "UPDATE administradores 
           SET activo=0, eliminado=1 
           WHERE id='$id' ";

   $res = consulta($sql);
   
   header("Location:listadoAdmin.php");

} else {
   echo "<script>
            location.href = '../login.php';
         </script>";
}

?>
