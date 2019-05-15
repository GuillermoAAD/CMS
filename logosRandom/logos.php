<link rel="stylesheet" href="../CSS/estiloLogin.css" />

<?php

   $numero = rand(1,5);

   switch($numero) {
      case 1: echo "<img src='https://upload.wikimedia.org/wikipedia/commons/8/84/Assassins_creed_logo.png' >";
      break;
      case 2: echo "<img src='https://img.icons8.com/metro/420/punisher.png' >";
      break;
      case 3: echo "<img src='http://pluspng.com/img-png/avengers-logo-png-avengers-logo-png-1376.png' >";
      break;
      case 4: echo "<img src='http://static.tumblr.com/74b7ee0996aab60233416d115ee61313/t5xotjg/kIZmwjaq8/tumblr_static_d201-drwhotardis.jpg' >";
      break;
      case 5: echo "<img src='https://upload.wikimedia.org/wikipedia/commons/0/06/Rammstein_logo.png' >";
      break;
      case 0: echo "";
      break;
   }


?>