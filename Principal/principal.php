<html>
	<head>
   	<title>
   		Bienvenido!
      </title>

      <link rel="stylesheet" href="../CSS/estiloPrincipal.css" />
	</head>
   <body>
      <?php
         //require "../sesion.php";
          //if ( sesionActiva() ) {

         session_start();

         if (isset($_SESSION["SesionUsuario"])) {
            include "../menu/menu.php";
            
            echo "<span class='Bienvenida'><h1>Bienvenido al CMS!!!</h1></span>";
         } else {
            echo "<script>
                     location.href = '../login.php';
                  </script>";
         }

      ?>
            
   </body>
</html>