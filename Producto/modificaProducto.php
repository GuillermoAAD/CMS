<?php

   //require "../sesion.php";
   //if ( sesionActiva() ) {

   session_start();

   if (isset($_SESSION["SesionUsuario"])) {

   require "../conecta.php";

   $id          = $_REQUEST['id'];
   $nombre      = $_REQUEST['nombre'];
   $codigo      = $_REQUEST['codigo'];
   $descripcion = $_REQUEST['descripcion'];
   $costo       = $_REQUEST['costo'];
   //$imagen      = $_REQUEST['imagen'];
   $stock       = $_REQUEST['stock'];

   $sql = "UPDATE productos 
           SET nombre='$nombre',
           codigo='$codigo',
           descripcion='$descripcion', 
           costo='$costo',
           stock='$stock'
           WHERE id='$id' ";

   $res = consulta($sql);

   header("Location: listadoProducto.php");

} else {
   echo "<script>
            location.href = '../login.php';
         </script>";
}

?>