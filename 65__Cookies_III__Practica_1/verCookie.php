<?php
// Se verificano se a creado  la cookie de nombre [idiomaSleccionado] si se creo verifica el valor de   idiomaSeleccionado y realiza lo que indique el if
if (!$_COOKIE["idiomaSeleccionado"]) {
   header("Location:index.php");
} else if ($_COOKIE["idiomaSeleccionado"] == "es") {
   header("Location:spain.php");
} else if ($_COOKIE["idiomaSeleccionado"] == "in") {
   header("Location:ingles.php");
}



?>
