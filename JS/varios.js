/*
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
   }
   else {
      alert("Se ha agregado a " + nombre + " a la base de datos.");
      document.forma01.submit();
   }
}
*/

function errorLogin() {
   alert("El correo o la contraseña son incorrectos.");
}