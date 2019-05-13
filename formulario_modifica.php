<?php
   require "conecta.php";
   require "varios.php";

   $id = $_GET['id'];

   //$con = conecta();
   $sql = "SELECT *
           FROM administradores
           WHERE id = $id";
   
   //$res = mysql_query($sql, $con);
   $res = consulta($sql);

   $nombre    = mysql_result($res, 0, "nombre");
   $apellidos = mysql_result($res, 0, "apellidos");
   $correo    = mysql_result($res, 0, "correo");
   $pass      = mysql_result($res, 0, "pass");
   $imagen    = mysql_result($res, 0, "imagen");
   $activo    = mysql_result($res, 0, "activo");
   $eliminado = mysql_result($res, 0, "eliminado");

   echo "ID: $id <br>";

   echo "
   <form name='forma01' method='post' action='modifica.php'>

         Nombre: 
   	   <input type='text' name='nombre' id='nombre' placeholder='Escribe tu usuario' value='$nombre' /> <br>
         Apellido(s): 
         <input type='text' name='apellidos' id='apellidos' placeholder='Escribe tus apellidos' value='$apellidos' /> <br>
         Correo: 
         <input type='text' name='correo' id='correo' placeholder='Escribe tu correo' value='$correo' /> <br>
         Password: 
         <input type='text' name='pass' id='pass' placeholder='Escribe tu password' value='$pass' /> <br>

         <!--Estos datos siguiente no se puden modificar-->
         Imagen: $imagen ¿Modificar?<br>
         <!--Activo: $activo <br>
         Eliminado: $eliminado <br>-->


         <input type='hidden' name='id' id='id' value='$id' /> <br>


         <input type='submit' value='Guardar cambios' name='boton1' id='boton1' onclick='validacion(); return false;' /> <br>
		 
      </form> ";


   echo "<br><br><a href='listado.php' > 
            <input type=\"button\" value=\"Regresar al listado\" >
         </a> ";
?>


<html>
   <head>
      <script>
         function validacion(){
            var nombre = document.forma01.nombre.value;
            var apellidos = document.forma01.apellidos.value;
            var correo = document.forma01.correo.value;
            var pass = document.forma01.pass.value;
            

         	if (nombre == "") {
               alert("Ingrese el nombre.");
            }
         	else if (apellidos == "") {
               alert("Ingrese los apellidos.");
            }
         	else if (correo == "") {
               alert("Ingrese el correo.");
            }
         	else if (pass == "") {
               alert("Ingrese el password.");
            } else {
               alert("El administrador " + nombre + " ha sido modificado.");
               document.forma01.submit();
            }
         }         
      </script>

