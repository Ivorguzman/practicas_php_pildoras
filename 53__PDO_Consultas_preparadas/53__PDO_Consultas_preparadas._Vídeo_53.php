<?php
/* `dsn` es una variable que almacena el nombre de la fuente de datos (DSN) para conectarse a una base
de datos MySQL. En este caso, el DSN especifica el nombre de la base de datos (`dbname`) como
"productos" y el host (`host`) como "127.0.0.1" (que es la dirección IP de la máquina local). El DSN
también especifica que el controlador de la base de datos que se utilizará es "mysql". */
$dsn = 'mysql:dbname=productos;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';
$busqueda = $_GET["buscar"];


//! Crear una instancia de PDO usando un alias 1*/

// try {
//     $base = new PDO('mysql:host=localhost; dbname=productos', 'root', '');
//     echo ('conexion establecida');
// }catch(Exception $e){
//     echo "ERROR: el codigo de execpción es: " . $e->getMessage() . "<br />";
//     echo "EL archivo es: " . $e ->getFile(). "<br />";
//     echo "En la linea: " . $e->getLine(). "<br />";
// }finally{
//     $base = null;
// }






//! Crear una instancia de PDO usando un alias 2 */

// $dsn = 'mysql:host=localhost; dbname=productos';
// $usuario = 'root';
// $contraseña = '';
// 
// try {
//     $base = new PDO($dsn, $usuario, $contraseña);
//       echo ('conexion establecida');
// } catch (Exception $e) {
//    echo "ERROR: el codigo de execpción es: " . $e->getMessage() . "<br />";
//    echo "EL archivo es: " . $e ->getFile(). "<br />";
//    echo "En la linea: " .  $e->getLine(). "<br />";
// }finally{
//     $base=null;
// }







//! Amacenando  ejecucuón de consulta metodo con el uso de [= ?]


/* Este código está estableciendo una conexión a una base de datos MySQL usando PDO en PHP y
ejecutando una consulta para recuperar datos de una tabla llamada "productos". La consulta
utiliza una declaración parametrizada con un marcador de posición "?" para prevenir ataques de
inyección SQL. El valor del parámetro se obtiene de la cadena de consulta de la URL utilizando
el superglobal . Los datos recuperados se muestran en una tabla HTML. El código también
incluye el manejo de errores y una función para cerrar la conexión y la declaración de la base
de datos. */
try {
    $conexion_pdo = new PDO($dsn, $usuario, $contraseña); // Almacenando creación de  conexion objeto tipo conecxion
    echo ('conexion establecida' . "<br />");
    // ojo estudiar esta linea

    /* `->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);` está configurando el
   atributo de modo de error del objeto PDO en `PDO::ERRMODE_EXCEPTION`. Esto significa que PDO
   lanzará excepciones cuando ocurran errores, en lugar de simplemente devolver falso o una
   advertencia. Esto permite un manejo de errores más eficaz en el código. */
    $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion_pdo->exec("SET CHARACTER SET utf8"); // Establciendo uso de caracteres especiales
    $query_sql = "SELECT CODIGOARTICULO,NOMBREARTICULO,PRECIO,PAISDEORIGEN FROM productos WHERE CODIGOARTICULO = ?"; //Amacenando  ejecucuón de consulta metodo con el uso de [= ?]
    $obj_pdo_stmt = $conexion_pdo->prepare($query_sql); // alamcenando el Objesto PDOStatemen devuelto (record Set)
    $obj_pdo_stmt->execute(array($busqueda)); // 
    echo "<br />";
    // Probar con expreiones regulares
    if ($busqueda == null || $busqueda == 0) {
        exit("producto inexistente");
    }
    // ===COMPROBACIONES===
    print "<pre>\n";
    print_r($conexion_pdo);
    print_r($obj_pdo_stmt);
    // print_r($registro = $obj_pdo_stmt->fetch(PDO::FETCH_BOTH) . " linea 74 <br />");
    // print_r( "$registro[2] ". " linea 75 <br />");
    // print_r( "$registro[2] ". " linea 75 <br />");
    echo "<br />";
    print "<pre>";
    // ===FIN COMPROBACIONES===

 
    /* `fetch(PDO::FETCH_ASSOC)` es un método utilizado para
    recuperar una sola fila del conjunto de resultados devuelto
    por la consulta. En este caso, se busca una fila como una
    matriz asociativa, donde los nombres de las columnas se
    utilizan como claves. Esto le permite acceder a los valores de
    cada columna utilizando el nombre de la columna como clave. */
    echo "======= Consulta Exitosa =======";
    while ($registro = $obj_pdo_stmt->fetch(PDO::FETCH_ASSOC)
    ) {
        // while ($registro = $obj_pdo_stmt->fetch(PDO::FETCH_BOTH)) {
        // Recorriendo fila a fila el Record Set con [fetch(PDO::FETCH_ASSOC)]
        echo "<table width='70%' align='center' border='1'>";
        echo "<td  align='center' >$registro[CODIGOARTICULO]</td> ";
        echo "<td  align='center' >$registro[NOMBREARTICULO]</td> ";
        echo "<td  align='center' >$registro[PRECIO]</td> ";
        echo "<td  align='center'>$registro[PAISDEORIGEN]  </td></tr></table>";
    };
    // $obj_pdo_stmt->closeCursor();
} catch (Exception $e) {
    echo "ERROR: el codigo de execpción es: " . $e->getMessage() . "<br />";
    echo "EL archivo es: " . $e->getFile() . "<br />";
    exit("En la linea: " . $e->getLine()) . "<br />";
} finally {
    /**
     * La función se desconecta de una conexión de base de datos PDO y cierra cualquier instrucción
     * abierta.
     */
    function disconnect()
    {
        global $conexion_pdo, $obj_pdo_stmt;
        $obj_pdo_stmt->closeCursor();
        $obj_pdo_stmt = null;
        $conexion_pdo = null;
        echo "<br />";
        echo " Consultas y conexciones cerradas";
    }
    disconnect();
};
