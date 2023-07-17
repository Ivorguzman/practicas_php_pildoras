<?php
$dsn = 'mysql:dbname=productos;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';
$seccion_articulo = $_GET["seccion"];
$seccion_articulo = strtoupper($seccion_articulo); // transforma en mayuscula el string
$pais = $_GET["pais_origen"];
$pais = strtoupper($pais); // transforma en mayuscula el string


//! Prepara un}a sentencia SQL con parámetros de sustitución nombrados [= : Nombre ]



/* Este bloque de código establece una conexión a una base de datos MySQL utilizando PDO (PHP Data
Objects) y ejecuta una consulta SQL para recuperar datos de una tabla. También incluye el manejo de
errores usando bloques try-catch y un bloque finalmente para cerrar la conexión a la base de datos.
Los datos recuperados luego se imprimen en la pantalla usando varios métodos como echo, print e
printf. */
try {
    $conexion_pdo = new PDO($dsn, $usuario, $contraseña); // Almacenando creación de conexion objeto tipo conecxion
    echo ('conexion establecida' . "<br />");

    // ojo estudiar esta linea
  /* Esta línea de código establece el modo de notificación de errores para la conexión PDO en modo de
  "advertencia". Esto significa que si hay un error en la consulta SQL o en la conexión a la base de
  datos, se mostrará un mensaje de advertencia en lugar de un error fatal, lo que permitirá que el
  script continúe ejecutándose. */
    $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Le inndica a la base de datos que capture las execciones al producirce un error (La base de datos crea los obj. tipo execcion)

   /* Establecer el conjunto de caracteres de la conexión en UTF-8, lo que permite el manejo adecuado
   de caracteres y símbolos especiales en los datos que se recuperan de la base de datos. */
    $conexion_pdo->exec("SET CHARACTER SET utf8"); // Establciendo uso de caracteres especiales

    $query_sql = "SELECT CODIGOARTICULO,NOMBREARTICULO,PRECIO,PAISDEORIGEN,SECCION   
    FROM productos
    WHERE
     SECCION = :SECCION AND  PAISDEORIGEN = :PAISDEORIGEN"; //Amacenando ejecucuón de consulta metodo con el uso de [= :......]
//*  $query = "SELECT * FROM  productos where nombrearticulo like '%$laBuequeda%

    // ===COMPROBACIONES===
    print "<pre>\n";
    print_r($seccion_articulo . "<br />");
    print_r($pais . "<br /><br />");
    print_r($query_sql . "<br />");
    print_r('$conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) = '.$conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION));
    // print_r('$conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) = ' . $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING));
    echo "<br />";
    print "<pre>";
    // ===FIN COMPROBACIONES===

   /* Esta línea de código está preparando una declaración SQL con sustitución de parámetro con nombre
   (usando la sintaxis `:name`) usando el método de preparación PDO (PHP Data Objects). La
   declaración preparada se almacena en la variable ``. Esto permite la ejecución de la
   instrucción con diferentes valores de parámetros sin necesidad de volver a analizar la
   instrucción SQL cada vez. */
    $obj_pdo_stmt = $conexion_pdo->prepare($query_sql); // alamcenando el Objesto PDOStatemen devuelto (record Set)

    // Probar con expreiones regulares
 /* Este bloque de código está comprobando si las variables `` y `` son nulas o
 iguales a 0. Si alguna de estas condiciones es verdadera, saldrá del script y mostrará el mensaje
 "No se pudo realizar la opreración" ( que significa "No se pudo realizar la operación" en español). */
    if ($seccion_articulo == null || $seccion_articulo == 0 || $pais == null || $pais == 0 ) {
        exit("No se pudo realizar la opreración");
    }
    ;
 /* Esta línea de código ejecuta una instrucción preparada con sustitución de parámetro con nombre
 mediante el método `execute()` del objeto PDOStatement ``. Los valores de los
 parámetros con nombre `:SECCION` y `:PAISDEORIGEN` se pasan como una matriz asociativa donde las
 claves son los nombres de los parámetros y los valores son las variables `` y
 ``, respectivamente. Esto reemplazará los parámetros con nombre en la declaración preparada
 con los valores reales y ejecutará la consulta SQL con esos valores. El &#39;eco&#39;<br /> La
 declaración &quot;;` simplemente agrega un salto de línea para fines de formato. */
    $obj_pdo_stmt->execute(array(":SECCION" => $seccion_articulo, ":PAISDEORIGEN" => $pais)); //
    echo "<br />";




    //[fetch(PDO::FETCH_ASSOC)DEVULVE UN ARRAY CON EL RESULTADO DE LA COSULTA SQL($query_sql)]";
    echo "<br /><br />";
    // while ($registro = $obj_pdo_stmt->fetch(PDO::FETCH_ASSOC)) {
/* Este bloque de código itera a través del conjunto de resultados devuelto por la consulta SQL
ejecutada usando un bucle while y el método `fetch()` del objeto PDOStatement. Obtiene cada fila del
conjunto de resultados como una matriz asociativa y la asigna a la variable ``. Luego,
imprime los valores de las columnas de la fila actual usando diferentes métodos como `echo`, `print`
y `printf`. El resultado tiene el formato de una tabla con columnas para el código, el nombre, el
precio y el país de origen de cada producto. */
    while ($registro = $obj_pdo_stmt->fetch(PDO::FETCH_BOTH)) {
        // Recorriendo fila a fila el Record Set con [fetch(PDO::FETCH_ASSOC)]

        //********** Impresion con echo
//         echo "<table width='70%' align='center' border='1'>";
//         echo "<td  align='center' >$registro[CODIGOARTICULO]</td> ";
//         echo "<td  align='center' >$registro[NOMBREARTICULO]</td> ";
//         echo "<td  align='center' >$registro[PRECIO]</td> ";
//         echo "<td  align='center'>$registro[PAISDEORIGEN]  </td></tr></table>";


        //******* Inpresion con print
        // print "\n";
        // print "<table  width='90%' align='center' border=1>";
        // print "<tr>";
        // print "<td align='center'> $registro[CODIGOARTICULO] </td>"; // ojo NO SE NECECITO LA COMILLA EN EL VALOR DEL ARRAY
        // print "<td align='center'> $registro[CODIGOARTICULO] </td>";
        // print "<td align='center'> $registro[NOMBREARTICULO] </td>";
        // print "<td align='center'> $registro[PRECIO] </td>";
        // print "<td align='center'> $registro[PAISDEORIGEN] </td>";
        // print "</tr>";
        // print "</table>";


        // ****** IMPRESION DE LOS RESULTADOA LA FUNCION PRINTF (PRINT CON FORMATO)
        printf(
            "|%s | %s | %s | %s|\n" . "<br />",
            "Codigo del articulo : " . $registro[0], //! fetch(PDO::FETCH_BOTH)
            "Nombre del articulo : " . $registro["NOMBREARTICULO"],
            "Prescio del articulo : " . $registro["PRECIO"] . "$",
            "Pais del articulo : " . $registro["PAISDEORIGEN"],
        );
    }
    ;

    // $obj_pdo_stmt->closeCursor();
    // capture la execcion (Exception) que jenero la base de datos y la trnsfiere a la varible ($e)
} catch (Exception $e) {


    // ===COMPROBACIONES===
    print "<pre>\n";
    // print_r( catch (Exception,$e). "<br />");
    print_r('Alex: valor de la variable $e : '.$e . "<br /><br />");
    echo "<br />";
    print "<pre>";
    // ===FIN COMPROBACIONES===


    echo " ALEX, ERROR: el codigo de execpción es: " . $e->getMessage() . "<br />";
    echo "EL archivo es: " . $e->getFile() . "<br />";
    echo "EL codigo del ERROR es: " . $e->getCode() . "<br />";
    exit("En la linea: " . $e->getLine()) . "<br />";
} finally {
/**
 * La función se desconecta de una conexión de base de datos PDO y cierra cualquier declaración
 * abierta.
 */
   function disconnect()
    {
        global $conexion_pdo, $obj_pdo_stmt;
        /* `->closeCursor();` es una llamada de método en el objeto PDOStatement que
        cierra el cursor asociado con la declaración. Esto libera los recursos que estaba utilizando
        la declaración y permite que la declaración se ejecute nuevamente si es necesario. Es una
        buena práctica cerrar el cursor cuando haya terminado con una declaración para evitar
        posibles pérdidas de memoria y otros problemas. */
        $obj_pdo_stmt->closeCursor();
        $obj_pdo_stmt = null;
        $conexion_pdo = null;
        echo "<br />";
        echo " Consultas y conexciones cerradas";
    }

    disconnect();
}
;
?>
