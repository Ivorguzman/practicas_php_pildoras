<?php

require("00_conexion_a_base_de_datos.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_clave);

mysqli_select_db($conexion, $db_nombre) or die("Error: No se pudo conectar a  la Base de datos ");
/* Imprimiendo el mensaje "Conección exitosasa: MySQL ==>" en la consola o salida, y luego agregando un
carácter de nueva línea (PHP_EOL) al final. */
echo "Conección éxitosa: MySQL ==>" . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
echo "<br /><br /><br />";

mysqli_set_charset($conexion, "utf8");

$query = "SELECT * FROM productos where paisdeorigen='italia' ";

$resultado = mysqli_query($conexion, $query);

// $fila = mysqli_fetch_row($resultado);

// array resultset contiene lo que produce la sentencia sql;

/* Este código obtiene filas de una tabla de base de datos MySQL llamada "productos" donde el valor de
la columna "paisdeorigen" es "italia". Las filas obtenidas se almacenan en la variable . El
bucle while se utiliza para iterar a través de cada fila del conjunto de resultados y mostrar los
datos en un formato de tabla HTML. La tabla tiene 7 columnas y los datos de cada columna se muestran
en una celda separada. El ciclo continúa hasta que todas las filas han sido recuperadas y mostradas. */
while ($fila = mysqli_fetch_row($resultado)) {
    echo "<table  width='70%' align='center' border=1> <tr><td>";
    echo $fila[0] . "</td><td>";
    echo $fila[1] . "</td><td>";
    echo $fila[2] . "</td><td>";
    echo $fila[3] . "</td><td>";
    echo $fila[4] . "</td><td>";
    echo $fila[5] . "</td><td>";
    echo $fila[6];
    echo "</tr></table>";
    echo "<br />";


}


?>