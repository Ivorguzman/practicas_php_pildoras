<?php

// time()+20 ==> establece la duracion de la cookie ( 20 segundos) desde el momento que carga la pagina
setcookie("idiomaSeleccionado", $_GET["idioma"], time()+20);
header("Location:verCookie.php");
?>
