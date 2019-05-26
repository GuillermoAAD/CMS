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



   $activo    = 1;
   $eliminado = 0;


   $file_name = $_FILES['imagen']['name'];	//Nombre real del archivo
   $file_tmp  = $_FILES['imagen']['tmp_name'];//Nombre temporal del archivo
   $cadena    = explode(".", $file_name);		//Separa el nombre para obtener la extension
   $ext       = $cadena[1];					//Extension
   $dir       = "imgAdmin/";					//carpeta donde se guardan los archivos
   $file_enc  = md5_file($file_tmp);	

   $img;//Nombre de la ruta

   if ($file_name != '') {
      $fileName1  = "$file_enc.$ext";	
      $img = "$fileName1";
      @copy($file_tmp, $dir.$fileName1);	
   }

        
   $sql = "INSERT INTO administradores(id, nombre, apellidos, correo, pass, imagen, activo, eliminado) 
           VALUES (NULL, '$nombre', '$apellidos', '$correo', '$passMD5', '$img', $activo, $eliminado)";

   $res = consulta($sql);
   //echo "consulta $sql<br>";
   //echo "RES $RES<br>";
        
   echo "<script>
            location.href = 'listadoAdmin.php';
         </script>";

   } else {
      echo "<script>
               location.href = '../login.php';
            </script>";
   }

?>