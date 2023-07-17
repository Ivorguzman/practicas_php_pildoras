<?php

// $busqueda = "martillo"; // informacion del cuadrode texto  [name=buscar] del formulario 
// $busqueda = mysqli_real_escape_string($conexion, $_GET["buscar"]); // evitando inyecion sql, escapando los caracteres especiales [ mysqli_real_escape_string()]
// $busqueda = ["buscar"];

$busqueda = $_GET['buscar']; // informacion del cuadrode texto  [name=buscar] del formulario 
require("00_conexion_a_base_de_datos.php");

$conexion = mysqli_connect($db_host, $db_usuario, $db_clave);

mysqli_select_db($conexion, $db_nombre) or die("Error: No se pudo conectar a  la Base de datos ");
echo "Conección éxitosa a Base de datos ==>" . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
echo "<br /><br /><br />";

mysqli_set_charset($conexion, "utf8");



$query = "SELECT CODIGOARTICULO , NOMBREARTICULO ,SECCION,PRECIO, PAISDEORIGEN FROM  productos WHERE CODIGOARTICULO = ? "; //uso delsigno de interrogacion para la consulta preparada (? marcador de parametro)


$resultado_obj_stmt = mysqli_prepare($conexion, $query); // preparacion de la consulta, retorna objeto tipo  mysqli_stmt.

mysqli_stmt_bind_param($resultado_obj_stmt, "s", $busqueda); // Unir parametros a la sentencia SQL,  si tiene exito retorna true, en caso contrario false

mysqli_stmt_execute($resultado_obj_stmt); // ejecutar la consulta, si tiene exito retorna truee, en caso contrario false



// ==================COMPROBACIONES====================================
print "<pre>\n";
print_r($resultado_obj_stmt);
"</pre>";
echo "<br />";
// ================== FIN COMPROBACIONES====================================


/* Este bloque de código verifica si la ejecución de la declaración preparada fue exitosa o no. Si no
tuvo éxito, mostrará un mensaje de error. Si tuvo éxito, vinculará las variables de resultado al
objeto de declaración y luego recorrerá los resultados usando `mysqli_stmt_fetch()` para mostrar los
datos recuperados en una tabla HTML. */
if (mysqli_stmt_execute($resultado_obj_stmt) == false) {
    echo "Error en la consulta";
} else {
   /* `mysqli_stmt_bind_result()` vincula las variables ``, ``,
   ``, `` y `` al conjunto de resultados devuelto
   por la declaración preparada ``. Esto significa que cuando se llama a
   `mysqli_stmt_fetch()` en el bucle `while`, los valores del conjunto de resultados se almacenarán
   en estas variables. */
    mysqli_stmt_bind_result($resultado_obj_stmt, $codigo_articulo, $nombre_articulo, $seccion_articulo, $precio_articulo, $origen_articulo);
    echo "Articulos : <br /><br />";

  /* Este bloque de código obtiene los resultados de la declaración preparada usando
  `mysqli_stmt_fetch()` y los muestra en una tabla HTML. También imprime los resultados obtenidos
  usando `print_r()` para fines de depuración. El ciclo `while` continúa buscando y mostrando
  resultados hasta que no hay más filas para buscar. */
    while (mysqli_stmt_fetch($resultado_obj_stmt)) {
        echo "======= Consulta Exitosa =======";
        echo "<table width='70%' align='center' border='1'>";
        echo "<td  align='center' >$codigo_articulo</td> ";
        echo "<td  align='center' >$nombre_articulo</td>";
        echo "<td  align='center'>$seccion_articulo</td>";
        echo "<td  align='center'>$precio_articulo</td>";
        echo "<td  align='center'>$origen_articulo</td></tr></table>";

        print "<pre>\n";
        print_r(mysqli_stmt_bind_result($resultado_obj_stmt, $codigo_articulo, $nombre_articulo, $seccion_articulo, $precio_articulo, $origen_articulo));
        "</pre>";
        echo "<br />";


    }

}
// mysqli_free_result($resultado_obj_stmt);
mysqli_stmt_close($resultado_obj_stmt);


?>
