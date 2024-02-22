<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Selecione su opcion</title>
    <link rel="stylesheet" href="linkToCSS" />
</head>

<body>
    <?php
    require("00_conexion_a_base_de_datos.php");
    $conexion = mysqli_connect($db_host, $db_usuario, $db_clave);

    $usuario = $_GET["campo_usuario"];

    $clave = $_GET['campo_clave'];




    //     $usuario = mysqli_real_escape_string($conexion, $_GET["campo_usuario"]); // evitando inyecion sql, escapando los caracteres especiales [ mysqli_real_escape_string()]
    


    //     $clave = mysqli_real_escape_string($conexion,  $_GET['campo_clave']); // evitando inyecion sql, escapando los caracteres especiales [ mysqli_real_escape_string()];
    
    /* `mysqli_select_db(, )` es una función que selecciona una base de datos para
    ser utilizada para la conexión representada por la variable `conexion`. `$db_nombre` es una
    variable que contiene el nombre de la base de datos a seleccionar. */
    mysqli_select_db($conexion, $db_nombre) or die("Error: No se pudo conectar a  la Base de datos ");
    echo "Conección éxitosa a Base de datos ==>" . PHP_EOL;

     /* `mysqli_get_host_info()` es una función que devuelve
    una cadena que contiene información sobre el servidor MySQL que
    la conexión representada por la variable `` está usando
    actualmente. Esta información incluye el nombre de host, la
    versión del servidor y la versión del protocolo. */
    echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
    echo "<br /><br /><br />";

    mysqli_set_charset($conexion, "utf8");


    $query = "SELECT * FROM usuarios_pass";

    $resultado = mysqli_query($conexion, $query);

    $fila = mysqli_fetch_row($resultado);


    // ! el if solo funciona solo con la primer fila del resultse de la tabla productos
    
   /* Este bloque de código está comprobando si los valores de `` y `` coinciden con los
   valores de la segunda y tercera columna (respectivamente) de la primera fila de la tabla
   `usuarios_pass` en la base de datos. Si coinciden, muestra un formulario con dos botones de
   envío, uno para consultar un registro y otro para eliminar un artículo. Si no coinciden, muestra
   el mensaje "Usuario no registrado" (usuario no registrado). */
    if ($usuario == $fila[1] && $clave == $fila[2]) {
        echo "<form method='metodo' action='#' align=\"center\">";
        echo " <fieldset>";
        echo "<legend>Selecione su opcion</legend>";
        echo " <br />";
        echo " <div align=\"center\">";
        echo " <input align=\"center\" id=\"consulta\" type=\"submit\" name=\"consulta\" value=\"Consultar registro\"formaction=\"/49__Consultas_preparadas_form_consultar.php\">";
        echo "<input align=\"center\" type=\"submit\" name=\"eliminar \" value=\"Borrar articulo\"formaction=\"/49__Consultas_preparadas__form_eliminar.php\">";
        echo "</div>";
        echo "</fieldset>";
        echo " </form>";
    } else {
        echo "Usuario no registrado";
    }

    ?>

</body>

</html>
