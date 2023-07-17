<?php

include("70__conexionCRUD.php");

$id = $_GET["id"];


try {
   $conexion_pdo->query(("DELETE FROM datos_usuarios WHERE id=$id"));
   header("Location:70__index.php");
} catch (\Throwable $e) {
   echo "______ ERROR________" . "<br />";
   echo "El codigo de execpción es: " . $e->getMessage() . "<br />";
   echo "EL archivo es: " . $e->getFile() . "<br />";
   echo "EL codigo del ERROR es: " . $e->getCode() . "<br />";
   echo 'LINEA DEL ERROR: ==> : ' . $e->getLine() . "<br />";
} finally {
}
