<?php

//require "../sesion.php";
//if ( sesionActiva() ) {

session_start();

if (isset($_SESSION["SesionUsuario"])) {

require "../conecta.php";

$nombre    = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$correo    = $_REQUEST['correo'];
$pass      = $_REQUEST['pass'];
$passMD5   = md5($pass);
//$imagen    = $_REQUEST['imagen'];
$imagenNombre    = $_FILES['imagen']['name'];
$imagenArchivo    = $_FILES['imagen']['tmp_name'];
$activo    = 1;
$eliminado = 0;


$imagenRuta = "imgAdmin/$imagenNombre";



move_uploaded_file($imagenArchivo, $imagenRuta);


   
$sql = "INSERT INTO administradores 
        (id, nombre, apellidos, correo, pass, imagen, activo, eliminado) 
        VALUES (NULL, '$nombre', '$apellidos', '$correo', '$passMD5', '$imagenArchivo', $activo, $eliminado)";

$res = consulta($sql);
   
header("Location: listadoAdmin.php");

} else {
   echo "<script>
            location.href = '../login.php';
         </script>";
}

?>