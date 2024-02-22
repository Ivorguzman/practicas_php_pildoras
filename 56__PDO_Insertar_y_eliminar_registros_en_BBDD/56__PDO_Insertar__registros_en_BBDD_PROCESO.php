<?php
$dsn = 'mysql:dbname=productos;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

$seccion_articulo = $_GET["seccion"];
$seccion_articulo = strtoupper($seccion_articulo); // transforma en mayuscula el string

$pais = $_GET["pais_origen"];
$pais = strtoupper($pais); // transforma en mayuscula el string

$codigo_articulo = $_GET['buscar']; // informacion del cuadrode texto  [name=buscar] del formulario 
$codigo_articulo = strtoupper($codigo_articulo); // transforma en mayuscula el string

$nombre_articulo = $_GET['nombre_articulo'];
$nombre_articulo = strtoupper($nombre_articulo); // transforma en mayuscula el string

$precio_articulo = $_GET['precio'];
$precio_articulo = strtoupper($precio_articulo); // transforma en mayuscula el string

$fecha_articulo = $_GET['fecha'];
$fecha_articulo = strtoupper($fecha_articulo); // transforma en mayuscula el string

$importado_articulo = $_GET['importado'];
$importado_articulo = strtoupper($importado_articulo); // transforma en mayuscula el string







try {
    $conexion_pdo = new PDO($dsn, $usuario, $contraseña); // Almacenando creación de conexion objeto tipo conecxion
    echo ('conexion establecida' . "<br />");

    // ojo estudiar esta linea
    $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Le inndica a la base de datos que capture las execciones al producirce un error (La base de datos crea los obj. tipo execcion)

    $conexion_pdo->exec("SET CHARACTER SET utf8"); // Establciendo uso de caracteres especiales


    //! Prepara una sentencia SQL con parámetros de sustitución nombrados [= : Nombre ]
    /* Creación de una consulta SQL para insertar datos en una tabla llamada "productos" con columnas  denominadas "CODIGOARTICULO", "SECCION", "NOMBREARTICULO", "PRECIO", "FECHA", "IMPORTADO" y
   "PAISDEORIGEN". Los valores que se insertarán se especifican utilizando marcadores de posición con nombre (por ejemplo, ":CODIGOARTICULO") que se reemplazarán con valores reales cuando se
   ejecute la consulta. */
    $query_sql = "INSERT INTO productos (CODIGOARTICULO,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN) VALUES (:CODIGOARTICULO,:SECCION,:NOMBREARTICULO,:PRECIO,:FECHA,:IMPORTADO,:PAISDEORIGEN)";

    //*  $query = "SELECT * FROM  productos where nombrearticulo like '%$laBuequeda%

    $obj_pdo_stmt = $conexion_pdo->prepare($query_sql); // alamcenando el Objesto PDOStatemen devuelto (record Set)

    //? Probar con expreiones regulare
    /* Este código comprueba si alguna de las variables ``, ``, ``,
``, ``, `` o `` son nulas o iguales a 0 .Si alguno de ellos es nulo o igual a 0, saldrá del programa y mostrará el mensaje "POR FAVOR NGRESE VALOR EN EL CAMPO" (que significa "POR FAVOR INGRESE UN VALOR EN EL CAMPO" en español). */
    if (
        $codigo_articulo == null || $codigo_articulo == 0 || $seccion_articulo == null || $seccion_articulo == 0 ||
        $nombre_articulo == null || $nombre_articulo == 0 || $precio_articulo == null || $precio_articulo == 0 ||
        $fecha_articulo == null || $fecha_articulo == 0 || $importado_articulo == null || $importado_articulo == 0 ||
        $pais == null || $pais == 0
    ) {
        exit("POR FAVOR INTRODUSCA VALOR EN EL CAMPO");
    };

    /* Este código está ejecutando una instrucción SQL preparada con marcadores de posición de parámetros
con nombre. Se llama al método `execute()` en el objeto PDOStatement `` y se le pasa
una matriz de valores para sustituir los parámetros nombrados en la consulta SQL. Los parámetros con
nombre en la consulta SQL tienen el prefijo de dos puntos (`:`) y corresponden a las claves en la
matriz asociativa pasada a `execute()`. Esta llamada de método está insertando una nueva fila en la
tabla "productos" con los valores proporcionados en la matriz. */
    $obj_pdo_stmt->execute(
        array(
            ":CODIGOARTICULO" => $codigo_articulo,
            ":SECCION" => $seccion_articulo,
            ":NOMBREARTICULO" => $nombre_articulo,
            ":PRECIO" => $precio_articulo,
            ":FECHA" => $fecha_articulo,
            ":IMPORTADO" => $importado_articulo,
            ":PAISDEORIGEN" => $pais
        )
    );
    // ===COMPROBACIONES===
    print "<pre>\n";
    print_r($query_sql . "<br />");
    echo "<br />";
    print "<pre>";
    // ===FIN COMPROBACIONES===
    echo "<br />";

    echo "Registros insertados sactifasctoriamente";
} catch (Exception $e) {

    echo " ALEX, ERROR: el codigo de execpción es: " . $e->getMessage() . "<br />";
    echo "EL archivo es: " . $e->getFile() . "<br />";
    echo "EL codigo del ERROR es: " . $e->getCode() . "<br />";
    exit("En la linea: " . $e->getLine()) . "<br />";
} finally {
    /**
     * La función se desconecta de una conexión de base de datos PDO y cierra cualquier instrucción
     * abierta.
     */
    function disconnect()
    {
        global $conexion_pdo, $obj_pdo_stmt;
        /* `->closeCursor();` es un método que cierra el cursor asociado con el objeto   PDOStatement. Este método se utiliza para liberar la conexión a la base de datos para que  pueda utilizarse para otros fines. Es una buena práctica cerrar el cursor cuando haya
       terminado con una consulta para evitar posibles pérdidas de memoria y liberar recursos. */
        $obj_pdo_stmt->closeCursor();
        $obj_pdo_stmt = null;
        $conexion_pdo = null;
        echo "<br />";
        echo " Consultas y conexciones cerradas";
    }

    disconnect();
};
