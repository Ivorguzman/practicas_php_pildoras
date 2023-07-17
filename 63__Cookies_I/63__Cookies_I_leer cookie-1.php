<?php
/* Este código está comprobando si existe una cookie llamada "prueba". Si lo hace, imprimirá el valor
de la cookie con el mensaje "setcookie:" antes. Si no existe, imprimirá el mensaje "No existe esa
cookie". */
if ($_COOKIE["prueba"]){

   print_r('setcookie: ' . $_COOKIE["prueba"]);
}else{
   print_r('No existe esa cookie');
}
?>