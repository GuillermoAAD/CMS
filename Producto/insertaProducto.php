<?php

//require "../sesion.php";
//if ( sesionActiva() ) {

session_start();

if (isset($_SESSION["SesionUsuario"])) {

require "../conecta.php";



$nombre        = $_REQUEST['nombre'];
$codigo        = $_REQUEST['codigo'];
$descripcion   = $_REQUEST['descripcion'];
$costo         = $_REQUEST['costo'];
//$imagen      = $_REQUEST['imagen'];
$imagenNombre  = $_FILES['imagen']['name'];
$imagenArchivo = $_FILES['imagen']['tmp_name'];
$stock         = $_REQUEST['stock'];
$activo        = 1;
$eliminado     = 0;

$imagenRuta = "imgProducto/$imagenNombre";

move_uploaded_file($imagenArchivo, $imagenRuta);
   
$sql = "INSERT INTO productos 
        (id, nombre, codigo, descripcion, costo, imagen, stock, activo, eliminado) 
        VALUES (NULL, '$nombre', '$codigo', '$descripcion', '$costo', '$imagenArchivo', $stock, $activo, $eliminado)";

$res = consulta($sql);
   
header("Location: listadoProducto.php");

} else {
   echo "<script>
            location.href = '../login.php';
         </script>";
}

?>