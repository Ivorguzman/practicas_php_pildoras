<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>title</title>
        <!-- <link rel="stylesheet" href="linkToCSS" /> -->
    </head>
    <body>
        <?php

        $busqueda = $_GET['buscar']; // informacion del cuadrode texto  [name=buscar] del formulario (40_Pagina_de_busqueda_II_Vídeo_40.php)
        
        require("00_conexion_a_base_de_datos.php");

        $conexion = mysqli_connect($db_host, $db_usuario, $db_clave);

        mysqli_select_db($conexion, $db_nombre) or die("Error: No se pudo conectar a  la Base de datos ");
        echo "Conexion establecida ==> " . mysqli_get_host_info($conexion);
        echo "<br /><br /><br />";

        mysqli_set_charset($conexion, "utf8");


        // $query = "SELECT * FROM  productos where nombrearticulo = '$busqueda' ";
        $query = "SELECT * FROM  productos where nombrearticulo like '%$busqueda%' "; // comodin( % )con la palabra MYSQL like
        $resultado_query = mysqli_query($conexion, $query);
/* Este código recorre los resultados de una consulta de MySQL y los imprime en un formato de tabla
HTML. */

        while ($fila = mysqli_fetch_row($resultado_query)) {
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
    </body>
</html>