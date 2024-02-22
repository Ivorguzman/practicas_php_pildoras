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



    // almacemando campos del formulario pasado por Url (get)
    $busqueda = $_GET['buscar'];
    // $busqueda ="ART40";
    
    require("00_conexion_a_base_de_datos.php"); // requiriendo datos de archivo de Conección
    
    $conexion = mysqli_connect($db_host, $db_usuario, $db_clave); // almacemando la Conección
    
    mysqli_select_db($conexion, $db_nombre) or dir("ERROR: no se encuentra la base de datos");// SELECCION DE BASE DE DATOS Y EXECCION  POR FALLO DE CONEXION

    echo "Conección éxitosa: MySQL " . PHP_EOL . "<br />"; // mensaje de estado de la Conección
    
    echo "Información del host: " . mysqli_get_host_info($conexion) . " PHP_EOL" . "<br />"; // mysqli_get_host_info()==> Devuelve una cadena que representa el tipo de conexión usada. Devuelve una cadena que describiendo la conexión representada por el parámetro link (incluyendo el nombre del servidor anfitrión).
    
    mysqli_set_charset($conexion, "utf8"); // Habiliatar  caracteres expeciales (Caracteres latino)
    
    $query = "SELECT * FROM productos WHERE NOMBREARTICULO like '%$busqueda%'"; //  alamacena consulta php
    
    $resultado_query = mysqli_query($conexion, $query); // almacenando el ResulSet
    
    while ($fila = mysqli_fetch_array($resultado_query, MYSQLI_BOTH)) {

        echo ' <table align="center"> <form action="46-3_actualizar.php" method="get"  align="center" >  ';

        echo '<tr> <td><label for="codigo">Código del articulo : <label/></td>';
        echo '<td><input type= "text"  name="codigo_articulo"  id="codigo"  readonly         value = "' . $fila["CODIGOARTICULO"] . '"  ></td></tr> <br />';
        // echo '<td><input type= "text"  name="codigo_articulo"  id="codigo"  disabled  value = "' . $fila["CODIGOARTICULO"] . '"  ></td></tr> <br />';
    
        echo '<tr> <td><label for="nombre_articulo">Articulo : <label/></td>';
        echo '<td><input type= "text"  name="nombre_articulo"  id="nombre_articulo"          value = "' . $fila["NOMBREARTICULO"] . '"  ></td></tr>  <br />';

        echo '<tr> <td><label for="seccion_articulo">Seccion : <label/></td>';
        echo '<td><input type= "text"  name="seccion"  id="seccion_articulo"                value = "' . $fila["SECCION"] . '"  ></td></tr>  <br />';
 
        echo '<tr> <td><label for="precio_articulo">Precio del articulo : <label/></td>';
        echo '<td><input type= "text"  name="precio"  id="precio_articulo"                  value = "' . $fila["PRECIO"] . '"  ></td></tr>  <br />';

        echo '<tr> <td><label for="fecha">fecha : <label/></td>';
        echo '<td><input type= "text"  name="fecha"  id="fecha"                             value = "' . $fila["FECHA"] . '"  ></td></tr>  <br />';

        echo '<tr> <td><label for="articulo_importado">Importado : <label/></td>';
        echo '<td><input type= "text"  name="importado"  id="articulo_importado"           value = "' . $fila["IMPORTADO"] . '"  ></td></tr>  <br />';

        echo '<tr> <td><label for="pais">Pais de origen : <label/></td>';
        echo '<td><input type= "text"  name="pais_origen"  id="pais"                       value = "' . $fila["PAISDEORIGEN"] . '"  ></td></tr>  <br />';

        echo '<td><input type= "submit"   value = "Actualizar"  ></td></tr>  <br /></form> </table>';




    }
    ?>
</body>

</html>
