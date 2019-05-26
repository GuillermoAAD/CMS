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
   //$imagenNombre  = $_FILES['imagen']['name'];
   //$imagenArchivo = $_FILES['imagen']['tmp_name'];
   $stock         = $_REQUEST['stock'];

   $activo        = 1;
   $eliminado     = 0;


   $file_name = $_FILES['imagen']['name'];	//Nombre real del archivo
   $file_tmp  = $_FILES['imagen']['tmp_name'];//Nombre temporal del archivo
   $cadena    = explode(".", $file_name);		//Separa el nombre para obtener la extension
   $ext       = $cadena[1];					//Extension
   $dir       = "imgProducto/";					//carpeta donde se guardan los archivos
   $file_enc  = md5_file($file_tmp);

   $img;//Nombre de la ruta

   if ($file_name != '') {
      $fileName1  = "$file_enc.$ext";	
      $img = "$fileName1";
      @copy($file_tmp, $dir.$fileName1);	
   }


   $sql = "INSERT INTO productos(id, nombre, codigo, descripcion, costo, imagen, stock, activo, eliminado) 
           VALUES (NULL, '$nombre', '$codigo', '$descripcion', '$costo', '$img', $stock, $activo, $eliminado)";

   $res = consulta($sql);

  // echo "SQL<br> $sql";

   echo "<script>
           location.href = 'listadoProducto.php';
         </script>";

   } else {
      echo "<script>
               location.href = '../login.php';
            </script>";
   }

?>