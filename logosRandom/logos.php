<link rel="stylesheet" href="../CSS/estiloLogin.css" />

<?php

   $numero = rand(1,10);

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
      case 6: echo "<img src='https://vignette.wikia.nocookie.net/hitman/images/a/a9/Hitman_insignia_V.png/revision/latest?cb=20160409030538' >";
      break;
      case 7: echo "<img src='https://i.pinimg.com/originals/4d/87/c3/4d87c3ae77ce4fea831fb41e9838754e.png' >";
      break;
      case 8: echo "<img src='https://www.logolynx.com/images/logolynx/49/4922635d1fd841b5340cf0a428a6ae8c.jpeg' >";
      break;
      case 9: echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxs7VCgZaNAaHXg79FxQkyQINbZ9olQhHssVCJMvnmtoWKge5H' >";
      break;
      case 10: echo "<img src='https://www.adhesivosnatos.com/wp-content/uploads/2016/11/pegatina-spitfire-wheels-vinilo.png' >";
      break;
      case 0: echo "";
      break;
   }

?>