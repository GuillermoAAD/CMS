<?php

require "conecta.php";

$correo    = $_REQUEST['correo'];
$pass      = $_REQUEST['pass'];
$passMD5   = md5($pass);

$sql = "SELECT *
        FROM administradores
        WHERE correo='$correo' AND pass='$passMD5' AND activo=1 AND eliminado=0 ";

$res = consulta($sql);

$num = numRegistros($res);

if ($num == 0) {
   header("Location: login.php");
} else {
   header("Location: principal.php");
}
      
?>
