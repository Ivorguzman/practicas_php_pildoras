<?php

require_once("81-82_Conectar_modelo.php");

$id = $_GET["id"];


try {
   $conexion_pdo->query(("DELETE FROM datos_usuarios WHERE id=$id"));
   header("Location:70_73_index.php");
} catch (\Throwable $e) {
   echo "______ ERROR________" . "<br />";
   echo "El codigo de execpción es: " . $e->getMessage() . "<br />";
   echo "EL archivo es: " . $e->getFile() . "<br />";
   echo "EL codigo del ERROR es: " . $e->getCode() . "<br />";
   echo 'LINEA DEL ERROR: ==> : ' . $e->getLine() . "<br />";
} finally {
}
