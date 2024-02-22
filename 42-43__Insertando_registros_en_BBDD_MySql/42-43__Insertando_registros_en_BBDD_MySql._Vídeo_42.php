<?php
 
require("00_conexion_a_base_de_datos.php");

$codigo_articulo = $_GET['codigo_articulo'];
$seccion = $_GET['seccion'];
$nombre_articulo = $_GET['nombre_articulo'];
$precio = $_GET['precio'];
$fecha = $_GET['fecha'];
$importado = $_GET['importado'];
$pais_origen = $_GET['pais_origen'];

$conexion = mysqli_connect($db_host, $db_usuario, $db_clave); // ALMACENA identificador de enlace 

mysqli_select_db($conexion, $db_nombre) or die("Error: No se pudo conectar a  la Base de datos ");

echo "Conección éxitosa: MySql ==>" . PHP_EOL;
echo "Información del host:" . mysqli_get_host_info($conexion);
echo "<br /><br /><br />";

mysqli_set_charset($conexion, "utf8");

$query = "INSERT INTO productos (codigoarticulo,seccion,nombrearticulo,precio,fecha,importado,paisdeorigen) VALUES ('$codigo_articulo','$seccion','$nombre_articulo','$precio','$fecha','$importado','$pais_origen') ";


$resultado = mysqli_query($conexion, $query);


if($resultado && $codigo_articulo!=null){
    echo "Registros insertados satifactoriamente   : ";
    echo "$codigo_articulo"." ==> ";
    echo "$nombre_articulo"."<br />";
    
}else{
    echo "Problema en la ejecución de la inserción";
}


?>
