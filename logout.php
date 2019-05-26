
<?php

//session_start();

//$_SESSION = [];

//session_destroy();

/*echo "<script>
         location.href = 'login.php';
      </script>";
*/
session_start();
unset($_SESSION["SesionUsuario"]); 
//$_SESSION = array();//para muchas variables de sesion, no se usara

/*if (ini_get("session.use_cookies")) 
{
  $params = session_get_cookie_params();
  setcookie(session_name(), '', time() - 42000,
      $params["path"], $params["domain"],
      $params["secure"], $params["httponly"]);
}*/


session_destroy();

echo "<script>
           location.href = 'index.php';
        </script>";
//header("Location: index.php");
exit;

?>