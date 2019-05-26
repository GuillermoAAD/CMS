<?php

session_start();

if (isset($_SESSION["SesionUsuario"])) {

   require "../conecta.php";
   
   $id        = $_REQUEST['id'];
   $nombre    = $_REQUEST['nombre'];
   $apellidos = $_REQUEST['apellidos'];
   $correo    = $_REQUEST['correo'];
   $pass      = $_REQUEST['pass'];
   $passMD5   = md5($pass);
   // $imagen    = $_REQUEST['imagen'];

   $sql = "UPDATE administradores 
           SET nombre='$nombre',
           apellidos='$apellidos',
           correo='$correo', 
           pass='$passMD5'
           WHERE id='$id' ";

  // echo "SQL <br> $sql";

   $res = consulta($sql);

   //echo "res <br> $res";

   echo "<script>
            location.href = 'listadoAdmin.php';
         </script>";

} else {
   echo "<script>
            location.href = '../login.php';
         </script>";
}

?>