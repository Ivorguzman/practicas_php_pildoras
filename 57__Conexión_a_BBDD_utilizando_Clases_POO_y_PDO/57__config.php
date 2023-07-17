<?php
//! DATOS DE CONFIGURACION QUE PERMITEN CONECTAR CN LA BASE DE DATOS.


///  define(.....) Define una constante con nombre en tiempo de ejecución.
/* El código define constantes para los parámetros de conexión de la base de datos, como el nombre de
host, el nombre de usuario, la contraseña, el juego de caracteres y el nombre de la base de datos.
Estas constantes se pueden usar en todo el código PHP para establecer una conexión con la base de
datos. */
define('DB_HOST', 'localhost');// Definiendo constantes de conexion nombre del servidor

define('DB_USUARIOS', 'root');// Definiendo constantes de conexion nombre del usuario

define('DB_CONTRA',''); // Definiendo constantes de conexion CONTRASEÑA

define('DB_CHARSET','utf8');// Definieno el usr de caracteres especiales utf8 (ñ....,etc.)

define('DB_NOMBRE', 'productos'); // Definiendo constantes de conexion nombre de la base de datos.

?>