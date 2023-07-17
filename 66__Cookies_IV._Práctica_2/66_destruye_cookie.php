<?php

/* Este código está comprobando si existe una cookie llamada "nombre_usuario". Si lo hace, se destruye
estableciendo su tiempo de caducidad en un momento del pasado. Luego, el código imprime un mensaje
que indica que la cookie ha sido destruida. Si la cookie no existe, el código imprime un mensaje que
indica que no hay cookies para destruir. */
if (isset($_COOKIE["nombre_usuario"])) {
   setcookie("nombre_usuario","Ivor",time()-1);
   print_r('Valor de la cookie destruidad : ' . $_COOKIE["nombre_usuario"]);
} else {
   print_r('No hay cokies que destruir');
}


?>
