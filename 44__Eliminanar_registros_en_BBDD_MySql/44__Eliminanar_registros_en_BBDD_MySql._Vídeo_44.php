<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <style>
        body {
            background-color: #ffc;
        }

        h2 {
            text-align: center;
            color: #f00;
            border-bottom: dotted #f00;
            width: 50%;
            margin: auto;



        }

        table {
            padding: 13px;
            border: 1px solid #00F;
        }

    </style>

</head>

<body>

    <?php

    require("00_conexion_a_base_de_datos.php");

    $codigo_articulo = $_GET['codigo_articulo'];

    $conexion = mysqli_connect($db_host, $db_usuario, $db_clave);

    mysqli_select_db($conexion, $db_nombre) or die("Error: No se pudo conectar a  la Base de datos ");
    echo "Conección éxitosa: MySQL ==>" . PHP_EOL;
    echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
    echo "<br /><br /><br />";

    mysqli_set_charset($conexion, "utf8");

    $query = "DELETE FROM productos WHERE CODIGOARTICULO = '$codigo_articulo'";

    $resultado = mysqli_query($conexion, $query);

    $registro_afectado = mysqli_affected_rows($conexion);
    // ==================COMPROBACIONES====================================
    
    print_r($resultado . "<br />");
    print_r($codigo_articulo . "<br />");
    print_r($registro_afectado);


    echo "<br />";
    // ================== FIN COMPROBACIONES====================================
    if ($registro_afectado > 0) {
        echo "Registro Eliminado exitosamente  ==> " . $registro_afectado;

    } else {
        echo "No existe registro que eliminar,  Registros eliminados  ==> " . $registro_afectado;
    }
    ;

    ?>
</body>

</html>
