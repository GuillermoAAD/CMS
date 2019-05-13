<?php
   require "conecta.php";
   
   $id        = $_REQUEST['id'];
   $nombre    = $_REQUEST['nombre'];
   $apellidos = $_REQUEST['apellidos'];
   $correo    = $_REQUEST['correo'];
   $pass      = $_REQUEST['pass'];
   $passMD5   = md5($pass);
   // $imagen    = $_REQUEST['imagen'];

   
   //$con = conecta();
   
   $sql = "UPDATE administradores 
           SET nombre='$nombre',
               apellidos='$apellidos',
               correo='$correo', 
               pass='$passMD5'
           WHERE id='$id' ";

   //$res = mysql_query($sql, $con);
   $res = consulta($sql);

/*   if( !$res ){
      echo "No se ha podido insertar el usuario a la base de datos";
   } else {
      echo "El usuario ha sido insertado a la base de datos.";
   }

   echo "<br><br><a href='listado.php' > 
            <input type=\"button\" value=\"Regresar al listado\" >
         </a> ";*/

   header("Location: listado.php");



?>