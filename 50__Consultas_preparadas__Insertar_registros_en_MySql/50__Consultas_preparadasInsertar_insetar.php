<?php

// $busqueda = "martillo"; // informacion del cuadrode texto  [name=buscar] del formulario 
// $busqueda = mysqli_real_escape_string($conexion, $_GET["buscar"]); // evitando inyecion sql, escapando los caracteres especiales [ mysqli_real_escape_string()]
// $busqueda = ["buscar"];

$codigo_articulo = $_GET['buscar']; // informacion del cuadrode texto  [name=buscar] del formulario 
$seccion_articulo = $_GET['seccion'];
$nombre_articulo = $_GET['nombre_articulo'];
$precio_articulo = $_GET['precio'];
$fecha_articulo = $_GET['fecha'];
$importado_articulo = $_GET['importado'];
$articulo_origen = $_GET['pais_origen'];


require("00_conexion_a_base_de_datos.php");
$conexion = mysqli_connect($db_host, $db_usuario, $db_clave);

mysqli_select_db($conexion, $db_nombre) or die("Error: No se pudo conectar a  la Base de datos ");
echo "Conección éxitosa a Base de datos ==>" . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
echo "<br /><br /><br />";

mysqli_set_charset($conexion, "utf8");



$query = "INSERT INTO  productos ( CODIGOARTICULO ,SECCION,  NOMBREARTICULO , PRECIO, FECHA ,IMPORTADO, PAISDEORIGEN) VALUES  ( ?,?,?,?,?,?,?)"; //uso delsigno de interrogacion para la consulta preparada (? marcador de parametro)


$resultado_obj_stmt = mysqli_prepare($conexion, $query); // preparacion de la consulta, retorna objeto tipo  mysqli_stmt.

mysqli_stmt_bind_param($resultado_obj_stmt, "sssssss", $codigo_articulo, $seccion_articulo, $nombre_articulo, $precio_articulo, $fecha_articulo, $importado_articulo, $articulo_origen); // Unir parametros a la sentencia SQL,  si tiene exito retorna true, en caso contrario false

mysqli_stmt_execute($resultado_obj_stmt); // ejecutar la consulta, si tiene exito re   

$registro_afectado = mysqli_affected_rows($conexion);

// ===COMPROBACIONES===
print "<pre>\n";
print_r(mysqli_stmt_bind_param($resultado_obj_stmt, "sssssss", $codigo_articulo, $seccion_articulo, $nombre_articulo, $precio_articulo, $fecha_articulo, $importado_articulo, $articulo_origen) . "<br />");
print_r($registro_afectado);
echo "<br />";
"</pre>";
echo "<br />";
// ===FIN COMPROBACIONES===



if ($registro_afectado > 0) {
    echo "Registro Insetrado exitosamente Registros insertados   ==> " . $registro_afectado;

} else {
    echo "Registro  no Insetrado,  Registros insertados  ==> " . $registro_afectado;
}

mysqli_stmt_close($resultado_obj_stmt);


?>
