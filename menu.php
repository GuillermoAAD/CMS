<html>
   <head>
      <title>menu</title>

      <link rel="stylesheet" href="estiloMenu.css" /> 

   </head>

   <body>
      
      <nav class="contenedorMenu">
         <div class="mensaje">
            <div class="izquierda">
               <?php
                  echo "Hola ";
               ?>
            </div>

            <div class="derecha">
            <a href="login.php">Salir</a>
            </div>
         </div>
         
         <br> <br>

         <table class="">
            <tr class="">
               <td class="">
                  <a href="principal.php">
                     <input class="btnMenu" type="button" value="Inicio">
                  </a>
               </td>
               
               <td class="">
                  <a href="listado.php">
                        <input class="btnMenu" type="button" value="Administradores">
                  </a>
               </td>
               <!--<td class="link"><a href=""></a></td>-->
            </tr>
         </table>
      

      <hr>

</nav>

   </body>
</html>