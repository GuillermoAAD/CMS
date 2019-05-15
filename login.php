<html>
   <head>
      <title>Login</title>
      <link rel='stylesheet' href='CSS/estiloLogin.css' />
      <script>
         function validacion(){
            var correo = document.forma01.correo.value;
            var pass = document.forma01.pass.value;
         
         	if (correo == '') {
               alert('Ingrese el correo.');
            }
         	else if (pass == '') {
               alert('Ingrese el password.');
            }else {
               document.forma01.submit();
            }
         }

      </script>
   </head>

   <body>

      <?php

         echo "<form name='forma01' method='post' action='loginValidador.php'>
            <table class='login'>

               <tr><td></td></tr>

               <tr>
                  <td>";
                     include 'logosRandom/logos.php';
         echo "   
                  </td>
               </tr>

               <tr><td></td></tr>

               <tr>
                  <td>
                     Correo:
                  </td>
               </tr>

               <tr>
                  <td>
                     <input type='text' name='correo' id='correo' placeholder='Escribe tu correo' />
                  </td>
               </tr>

               <tr>
                  <td>
                     Contraseña:
                  </td>
               </tr>

               <tr>
                  <td>
                     <input type='text' name='pass' id='pass' placeholder='Escribe tu password' />
                  </td>
               </tr>

               <tr>
                  <td>
                     <input type='submit' value='Entrar' name='boton1' id='boton1' onclick='validacion(); return false; ' />
                  </td>
               </tr>
               
            </table>
         
         </form>
         ";
      ?>
   </body>
</html>