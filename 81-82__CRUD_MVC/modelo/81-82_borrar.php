<?php

/* La línea `require_once("81-82_Conectar_modelo.php");` incluye el archivo
   "81-82_Conectar_modelo.php" en el script PHP actual. Es probable que este archivo contenga el
   código para establecer una conexión de base de datos utilizando PDO (objetos de datos PHP). Al
   incluir este archivo, el script puede acceder al método `Conectar::conexion()`, que establece la
   conexión a la base de datos. */
require_once("81-82_Conectar_modelo.php");


/* La línea ` = Conectar::conexion();` está llamando al método `conexion()` de la clase
   `Conectar`. Este método se encarga de establecer una conexión a la base de datos mediante PDO
   (PHP Data Objects). El valor devuelto luego se asigna a la variable ` $conexion_pdo`, que puede
   usarse para ejecutar consultas a la base de datos. */
$conexion_pdo = Conectar::conexion();


$id = $_GET["id"];


try {
   $conexion_pdo->query(("DELETE FROM datos_usuarios WHERE id=$id"));
   header("Location:../81_82_index.php");
} catch (\Throwable $e) {
   echo "______ ERROR________" . "<br />";
   echo "El codigo de execpción es: " . $e->getMessage() . "<br />";
   echo "EL archivo es: " . $e->getFile() . "<br />";
   echo "EL codigo del ERROR es: " . $e->getCode() . "<br />";
   echo 'LINEA DEL ERROR: ==> : ' . $e->getLine() . "<br />";
} finally {
}
