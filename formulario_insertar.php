<html>
   <head>
      <title>Formulario</title>
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
               alert("Ingrese un password.");
            } else {
               alert("Se ha agregado a " + nombre + " a la base de datos.");
               document.forma01.submit();
            }
         }         
      </script>
   </head>

   <body>

      <?php
         include "menu.php";
      ?>

      <form name="forma01" method="post" action="inserta.php">

   	   <input type="text" name="nombre" id="nombre" placeholder="Escribe tu(s)  nombre(s)" /> <br>
		   <input type="text" name="apellidos" id="apellidos" placeholder="Escribe tu(s) apellido(s)" /> <br>
         <input type="text" name="correo" id="correo" placeholder="Escribe tu correo" /> <br>
         <input type="text" name="pass" id="pass" placeholder="Escribe tu password" /> <br>

		   <input type="submit" value="Entrar" name="boton1" id="boton1" onclick="validacion(); return false;" /> <br>
		 
      </form>


      <br><br>
      <a href='listado.php' > 
         <input type="button" value="Regresar al listado" >
      </a>
      
   </body>
</html>