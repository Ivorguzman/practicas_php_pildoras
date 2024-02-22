<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>title</title>
    <style>
        body {
            background-color: #ffc;
        }

        h1 {
            text-align: center;
            color: #00f;
            border-bottom: dotted #0000ff;
            width: 50%;
            margin: auto;



        }

        table {
            background-color: orange;
            border: 1px solid #f00;
            color: blue;
            padding: 8px;

        }

    </style>
</head>

<body>
    <?php

    $codigo_articulo = $_GET['codigo_articulo'];
    $seccion = $_GET['seccion'];
    $nombre_articulo = $_GET['nombre_articulo'];
    $precio = $_GET['precio'];
    $fecha = $_GET['fecha'];
    $importado = $_GET['importado'];
    $pais_origen = $_GET['pais_origen'];



    require("00_conexion_a_base_de_datos.php"); // requiriendo datos de archivo de Conección
    
    $conexion = mysqli_connect($db_host, $db_usuario, $db_clave); // almacemando la Conección
    
    mysqli_select_db($conexion, $db_nombre) or dir("ERROR: no se encuentra la base de datos");

    echo "Conección éxitosa: MySQL " . PHP_EOL . "<br />"; // mensaje de estado de la Conección
    
    echo "Información del host: " . mysqli_get_host_info($conexion) . " PHP_EOL" . "<br />"; // mysqli_get_host_info()==> Devuelve una cadena que representa el tipo de conexión usada. Devuelve una cadena que describiendo la conexión representada por el parámetro link (incluyendo el nombre del servidor anfitrión).
    
    mysqli_set_charset($conexion, "utf8"); // Habiliatar  caracteres expeciales (Caracteres latino)
    //set

    $query = "UPDATE productos SET CODIGOARTICULO='$codigo_articulo', SECCION='$seccion ',NOMBREARTICULO='$nombre_articulo', PRECIO='$precio', FECHA='$fecha', IMPORTADO='$importado', PAISDEORIGEN='$pais_origen' WHERE CODIGOARTICULO='$codigo_articulo' ";

    $resultado = mysqli_query($conexion, $query);
    if ($resultado) {
        echo "<h1>Registro actualizado</h1> <br /><br />";
        echo "<table align='center'><tr><td>$codigo_articulo</td></tr>";
        echo "<tr><td>$seccion</td></tr>";
        echo "<tr><td>$nombre_articulo</td></tr>";
        echo "<tr><td>$precio</td></tr>";
        echo "<tr><td>$fecha</td></tr>";
        echo "<tr><td>$importado</td></tr>";
        echo "<tr><td>$pais_origen</td></tr></table>";
    } else {
        echo 'Error al actualizar registro';
    }

    ?>
</body>

</html>
