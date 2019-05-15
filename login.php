<html>
   <head>
      <title>Login</title>
      <link rel="stylesheet" href="CSS/estiloLogin.css" />
      <script>
         function validacion(){
            var user = document.forma01.user.value;
            var pass = document.forma01.pass.value;
//            var correo = document.forma01.correo.value;
//            var rol = document.forma01.rol.value;
         
         	if (user == "") {
               alert("Ingrese el correo.");
            }
         	else if (pass == "") {
               alert("Ingrese el password.");
            }else {
               //verificacion(user, pass);
               alert("Bienvenido " + user);
               document.forma01.submit();
            }
         }
         
         //usuario y contraseñas
         /*function verificacion(user, pass){
            var usuarios = Array("user1","user2","user3","user4","user5");
            var passwords = Array('pass1','pass2','pass3','pass4','pass5');
            var bandera = false;
            
            for (var i = 0; i < 5; i++) {
               if ( user == usuarios[i] && pass == passwords[i]){
                  bandera = true;
                  break;
               }
            }
            
            if ( !bandera ){
               alert("El usuario o la contraseña no son validos");
            } else {
               alert("Bienvenido " + user);
               document.forma01.submit();
            }
         }*/
      </script>
   </head>

   <body>
      

      <?php
      //
         
      /*
         require "conecta.php";

         $con = conecta();
         $sql = "SELECT correo, pass
                 FROM administradores
                 WHERE activo = 1 AND eliminado = 0";

         $res = mysql_query($sql, $con);
         $num = mysql_num_rows($res);

         function verificacion(){
            //$usuario = ;
            //$passw;

         
         for ($i = 0; $i < $num; $i++)
         {
         echo "<tr id=\"Fila".$i."\" >";
            echo "<td>";
      
               $id        = mysql_result($res, $i, "id");
               $nombre    = mysql_result($res, $i, "nombre");
               $apellidos = mysql_result($res, $i, "apellidos");
              
               echo "$nombre $apellidos<br>";
         }
      }*/
      ?>

      <form name="forma01" method="post" action="principal.html">
         <table class="login">
            <tr>
               <td>
               <?php
                  include "logosRandom/logos.php";
               ?>
               </td>
            </tr>

            <tr>
               <td>
                  <input type="text" name="user" id="user" placeholder="Escribe tu correo" />
               </td>
            </tr>
            
            <tr>
               <td>
                  Password:
               </td>
            </tr>
            
            <tr>
               <td>
                  <input type="text" name="pass" id="pass" placeholder="Escribe tu password" />
               </td>
            </tr>

            <tr>
               <td>
               <input type="submit" value="Entrar" name="boton1" id="boton1" onclick="validacion(); return false; " />
               </td>
            </tr>

   <!--
            <input type="text" name="correo" id="correo" placeholder="Escribe tu correo" value="@" /> <br>
      
            <select name="rol" id="rol">
               <option value="0">Selecciona</option>
               <option value="1">Usuario</option>
               <option value="2">Administrador</option>
            </select> <br>
         
            <input type="hidden" value="123" /> <br>
   -->
            
         </table>
		 
   	</form>
   </body>
</html>