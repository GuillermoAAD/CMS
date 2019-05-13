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

   //$con = conecta();
   
   $sql = "INSERT INTO administradores 
           (id, nombre, apellidos, correo, pass, imagen, activo, eliminado) 
           VALUES (NULL, '$nombre', '$apellidos', '$correo', '$passMD5', '$imagen', $activo, $eliminado)";

   //$res = mysql_query($sql, $con);
   $res = consulta($sql);
   
   /*

   if( !$res ){
      echo "No se ha podido insertar el usuario a la base de datos";
   } else {
      echo "El usuario ha sido insertado a la base de datos.";
   }

   echo "<br><br><a href='listado.php' > 
            <input type=\"button\" value=\"Regresar al listado\" >
         </a> ";
*/
   header("Location: listado.php");

       //para reiniciar el autoincrementable 
       //ALTER TABLE tu_tabla_va_aqui AUTO_INCREMENT = '$ultimo_id';

?>