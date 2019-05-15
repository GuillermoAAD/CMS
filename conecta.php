<?php
define("HOST",'localhost');
define("BD",'catalogo');
define("USER_BD",'root');
define("PASS_BD",'');
//define("PASS_BD",'root');

/**/
function conecta () {
   if (!($con = mysql_connect(HOST,USER_BD,PASS_BD))) {
      echo "Error conectando al Servidor de BD";
      exit();
   }
   if (!mysql_select_db(BD,$con)) {
      echo "Error seleccionando BD";
      exit();
   }
   return $con;
}

function consulta($sql){

   $con = conecta();

   $res = mysql_query($sql, $con);
   
   return $res;
}

function desconecta() {

}

?>