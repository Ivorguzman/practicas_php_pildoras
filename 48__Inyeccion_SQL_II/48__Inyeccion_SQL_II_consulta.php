<?php

require("00_conexion_a_base_de_datos.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_clave);

// $busqueda = $_GET['buscar']; // informacion del cuadrode texto  [name=buscar] del formulario 
// $busqueda = "martillo"; // informacion del cuadrode texto  [name=buscar] del formulario 

/* ` = mysqli_real_escape_string(, ["buscar"])` está escapando caracteres
especiales en la variable `["buscar"]` para evitar ataques de inyección SQL. Toma el objeto de
conexión `` y el valor de la variable `["buscar"]` como argumentos y devuelve una
cadena con todos los caracteres especiales escapados. Esto asegura que el valor de `` se
pueda usar de manera segura en una consulta SQL sin el riesgo de que se inyecte código SQL
malicioso. */
$busqueda = mysqli_real_escape_string($conexion, $_GET["buscar"]); // evitando inyecion sql, escapando los caracteres especiales [ mysqli_real_escape_string()]



mysqli_select_db($conexion, $db_nombre) or die("Error: No se pudo conectar a  la Base de datos ");
echo "Conección éxitosa a Base de datos ==>" . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
echo "<br /><br /><br />";

mysqli_set_charset($conexion, "utf8");

$query = "SELECT * FROM  productos where CODIGOARTICULO = '$busqueda' "; // comodin( % )con la palabra MYSQL like
// $query = "SELECT * FROM  productos where nombrearticulo like '%$busqueda%' "; // comodin( % )con la palabra MYSQL like

$resultado_query = mysqli_query($conexion, $query);



/* Este bloque de código verifica si la consulta se ejecutó correctamente y devolvió filas. Si el
número de filas afectadas es 0, significa que no hay registros coincidentes en la base de datos, por
lo que imprime un mensaje de error y sale del script. De lo contrario, procede a iterar sobre el
conjunto de resultados y mostrar los datos en una tabla. */
if (mysqli_affected_rows($conexion) == 0) { //verificacion si existe registro en ase de datos
    echo "No existe ese codigo de articulo : ";
    exit("======= Consulta fallida =======");
} else {

/* Este bloque de código itera sobre el conjunto de resultados de una consulta de la base de datos
utilizando un bucle while y la función `mysqli_fetch_row()`. Para cada fila del conjunto de
resultados, está imprimiendo una tabla con los valores de las columnas de esa fila. Luego se llama a
la función `mysqli_free_result()` para liberar la memoria utilizada por el conjunto de resultados. */

    /* `while ( = mysqli_fetch_row())` está iterando sobre el conjunto de
    resultados de una consulta de base de datos usando un bucle while y la función
    `mysqli_fetch_row()`. Para cada fila del conjunto de resultados, está imprimiendo una tabla con
    los valores de las columnas de esa fila. La función `mysqli_fetch_row()` devuelve una matriz de
    valores que corresponden a las columnas en la fila actual del conjunto de resultados. El ciclo
    while continúa hasta que no hay más filas en el conjunto de resultados. */
    while ($fila = mysqli_fetch_row($resultado_query)) { // recorres el resulset  de l resultado de la cunsulta
        echo "======= Consulta Exitosa =======";
        echo "<table width='70%' align='center' border='1'>";
        echo "<tr><td  align='center'>$fila[0]</td>";
        echo "<td  align='center' >$fila[1]</td>";
        echo "<td  align='center'>$fila[2]</td>";
        echo "<td  align='center'>$fila[3]</td>";
        echo "<td  align='center'>$fila[4]</td>";
        echo "<td  align='center'>$fila[5]</td>";
        echo "<td  align='center'>$fila[6]</td></tr></table>";
    }
    mysqli_free_result($resultado_query); // liberar memoria del resultado de la busqueda
    ;
}
;








?>
