<?php

require "conecta.php";

$nombre    = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$correo    = $_REQUEST['correo'];
$pass      = $_REQUEST['pass'];
$passMD5   = md5($pass);
// $imagen    = $_REQUEST['imagen'];
$activo    = 1;
$eliminado = 0;
   
$sql = "INSERT INTO administradores 
        (id, nombre, apellidos, correo, pass, imagen, activo, eliminado) 
        VALUES (NULL, '$nombre', '$apellidos', '$correo', '$passMD5', '$imagen', $activo, $eliminado)";

$res = consulta($sql);
   
header("Location: listado.php");

?>