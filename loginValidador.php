<script src="JS/varios.js"></script>

<?php

session_start();

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
   echo "<script>
           errorLogin();
           location.href = 'login.php';
        </script>";
  
        //sleep(5);

   //header("Location: login.php");
} else {
   $nombre    = mysql_result($res, 0, "nombre");

   $_SESSION["SesionUsuario"] = $nombre;
   header("Location: Principal/principal.php");
}
      
?>
