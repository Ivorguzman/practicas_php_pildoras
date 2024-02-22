<?php

require("00_conexion_a_base_de_datos.php"); // requiriendo datos de archivo de Conección

$conexion = mysqli_connect($db_host, $db_usuario, $db_clave); // almacemando la Conección

mysqli_select_db($conexion, $db_nombre) or dir("ERROR: no se encuentra la base de datos"); // SELECCION DE BASE DE DATOS Y EXECCION  POR FALLO DE CONEXION

echo "Conección éxitosa: MySQL " . PHP_EOL . "<br />"; // mensaje de estado de la Conección

echo "Información del host: " . mysqli_get_host_info($conexion) . " PHP_EOL" . "<br />"; // mysqli_get_host_info()==> Devuelve una cadena que representa el tipo de conexión usada. Devuelve una cadena que describiendo la conexión representada por el parámetro link (incluyendo el nombre del servidor anfitrión).

mysqli_set_charset($conexion, "utf8"); // Habiliatar  caracteres expeciales (Caracteres latino)

?>