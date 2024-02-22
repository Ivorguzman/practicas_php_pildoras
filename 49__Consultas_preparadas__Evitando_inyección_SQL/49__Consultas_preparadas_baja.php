<?php

require("00_conexion_a_base_de_datos.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_clave);

// $busqueda = $_GET['buscar']; // informacion del cuadrode texto  [name=buscar] del formulario 
// $busqueda = "AR40"; // informacion del cuadrode texto  [name=buscar] del formulario  

/* ` = mysqli_real_escape_string(, ["buscar"]);` está escapando caracteres
especiales en la variable `["buscar"]` para evitar ataques de inyección SQL. Toma el objeto de
conexión `` y el valor de la variable `["buscar"]` como argumentos y devuelve una
cadena con caracteres especiales escapados. Esta cadena luego se asigna a la variable ``. */
$busqueda = mysqli_real_escape_string($conexion, $_GET["buscar"]); // evitando inyecion sql, escapando los caracteres especiales [ mysqli_real_escape_string()]

mysqli_select_db($conexion, $db_nombre) or die("Error: No se pudo conectar a  la Base de datos ");

echo "Conección éxitosa a Base de datos ==>" . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
echo "<br /><br /><br />";

mysqli_set_charset($conexion, "utf8");

$query = "DELETE FROM productos WHERE CODIGOARTICULO = '$busqueda'";

$resultado_query = mysqli_query($conexion, $query); // consulta a la base de datos

/* `mysqli_affected_rows()` es una función que devuelve el número de filas afectadas por la
operación anterior de MySQL realizada utilizando la conexión de base de datos especificada
``. En este caso, se utiliza para determinar el número de filas afectadas por la consulta
`DELETE` ejecutada en la línea de código anterior. El resultado se almacena en la variable
`` y luego se utiliza para mostrar un mensaje que indica si se eliminó o no algún
registro. */
$registro_afectado = mysqli_affected_rows($conexion); // cantidad de registros afectados

if ($resultado_query && $busqueda != null && $registro_afectado != 0) {
    echo "Registro Eliminado exitosamente  ==> " . $registro_afectado;
} else {
    echo "No existe registro que eliminar,  Registros eliminados  ==> " . $registro_afectado;
}
;





?>
