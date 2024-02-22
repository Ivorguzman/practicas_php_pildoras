<?php

/* Estas líneas de código configuran las credenciales para una conexión PDO (objeto de datos PHP) a una base de datos MySQL. `$dsn` especifica el nombre de la base de datos y el host, mientras que `$usuario, ` y ` $password ` especifican el nombre de usuario y la contraseña para la conexión a la base de datos. */
$dsn = 'mysql:dbname=productos;host=127.0.0.1';
$usuario = 'root';
$password = '';

try {

    /* Estas líneas de código están desinfectando y escapando de la entrada del usuario de un formularioenviado a través del método GET. La función `htmlentities()` convierte cualquier carácter especial en sus correspondientes entidades HTML, evitando posibles ataques XSS. La función `addslashes()` agrega una barra invertida antes de cualquier carácter especial, evitando posibles ataques de inyección SQL. Los valores saneados y escapados se almacenan en las variables ` $f_usuario ` y  `$f_clave`. */
    $f_usuario = htmlentities(addslashes($_GET['usuario']));
    $f_clave = htmlentities(addslashes($_GET['clave']));

    /* Imprimiendo los valores de las variables `$f_usuario` y ` $f_clave)` de forma formateada usando la función `print_r()`. el `<pre> Las etiquetas ` se usan para mostrar la salida en una forma  preformateada. */
    print "<pre>";
    print_r("_16__ usuario ==> " . $f_usuario);
    echo "<br>";
    print_r("_18__ password ==> " . $f_clave);
    print "</pre>";
    echo "<br>";


    /* `  password_hash(, PASSWORD_DEFAULT, array("cost" => 12));` está encriptando la contraseña ingresada por el usuario (`$f_clave`) usando la función `password_hash()`en PHP. La contraseña encriptada luego se almacena en la variable `$f_clave_ecriptada`. La constante`PASSWORD_DEFAULT` se usa para especificar el algoritmo de encriptación redeterminado, y el parámetro `array("cost" => 12)` se usa para especificar el factor de costo para la encriptación, quedetermina el esfuerzo computacional requerido para generar el hash. Un factor de costo más alto da como resultado un hash más seguro, pero también requiere más tiempo de procesamiento. */
    $f_clave_ecriptada = password_hash($f_clave, PASSWORD_DEFAULT, array("cost" => 12));


    print "<pre>";
    print_r("_28__ f_usuario ==> " . $f_usuario);
    echo "<br>";
    print_r("_30__ f_clave_encriptada ==> " . $f_clave_ecriptada);
    print "</pre>";
    echo "<br>";


    /* Crea un nuevo objeto PDO y establece una conexión a una base de datos MySQL utilizando el nombre de origen de datos (DSN), el nombre de usuario '$usuario' y la contraseña '$password' especificados en estas variables. */
    $conexion_pdo = new PDO($dsn, $usuario, $password);



    // Le inndica a la base de datos que capture las execciones al producirce un error (La base de datos crea los obj. tipo execcion)
    $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    /* Establecer el conjunto de caracteres de la conexión de la base de datos en UTF-8, que es una codificación de caracteres que admite una amplia gama de caracteres de diferentes idiomas y escrituras. Esto es importante para manejar datos de texto que pueden contener caracteres no ASCII,como letras acentuadas o caracteres de alfabetos no latinos. */
    $conexion_pdo->exec("SET CHARACTER SET utf8");


    //! Prepara una sentencia SQL con parámetros de sustitución nombrados [= : Nombre ]

    /* ` $query ` es una variable de cadena que contiene una instrucción SQL para insertar datos en la
   tabla `usuarios_pass`. La instrucción utiliza marcadores de posición con nombre `:usu` y
   `:contra` para representar los valores que se insertarán en las columnas `usuarios` y `clave`,
   respectivamente. Esto permite que los valores se vinculen a la declaración más adelante usando el
   método `execute()` del objeto `PDOStatement`. */
    $query = "INSERT INTO usuarios_pass (usuarios,clave) VALUES (:usu,:contra) ";



    /* ` = ->prepare();` está preparando una declaración SQL con marcadores de posición de parámetros con nombre (usando `:usu` y `:contra`) para ejecutarse más tarde. La declaración preparada se almacena en la variable ` $obj_pdo_stmt `, que es una instancia de la clase `PDOStatement`. Esto permite la separación de la instrucción SQL y los valores que se insertarán, lo que puede mejorar la seguridad y el rendimiento. */
    $obj_pdo_stmt = $conexion_pdo->prepare($query); // =>  alamcenando el Objesto PDOStatemen devuelto (record Set)


    print "<pre>";
    echo ('_64_ $query ==> ' . $query);
    echo "<br>";
    echo "<br>";
    echo ('_67_ print_r($obj_pdo_stmt = $conexion_pdo->prepare($query) ==> ');
    print_r($conexion_pdo->prepare($query));
    echo "<br>";
    echo ('_70_ print_r($obj_pdo_stmt) ==> ');
    print_r($obj_pdo_stmt);
    print "</pre>";
    echo "<br>";

 
   /* `->execute(array(":usu" => , ":contra" => ));` está    ejecutando una instrucción SQL preparada con marcadores de posición de parámetros con nombre    `:usu` y `:contra`. Los valores para estos marcadores de posición se proporcionan en una matriz    asociativa donde las claves corresponden a los nombres de los parámetros y los valores son los  valores reales que se insertarán en la base de datos. Esta sentencia está insertando un nuevo
   registro en la tabla `usuarios_pass` con los valores de `$f_usuario,` y `$f_clave_ecriptada` para
   las columnas `usuarios` y `clave`, respectivamente. */
    $obj_pdo_stmt->execute(array(":usu" => $f_usuario, ":contra" => $f_clave_ecriptada));



    /* `echo "Registro Insertado"` muestra la cadena "Registro Insertado" en la pantalla, lo que indica que se ha insertado correctamente un nuevo registro en la tabla "USUARIOS_PASS". */
    echo "Registro Insertado";
} catch (Exception $e) {

    echo "_87_ ALEX, ERROR: el codigo de execpción es: " . $e->getMessage() . "<br />";
    echo "_88_ EL archivo es: " . $e->getFile() . "<br />";
    echo "_89_ EL codigo del ERROR es: " . $e->getCode() . "<br />";
    exit('_90_ ERROR: ==> $conexion_pdo = new PDO($dsn, $usuario, $password), en la linea : ' . $e->getLine()) . "<br />";
} finally {
    /**
     * La función se desconecta de una base de datos cerrando consultas y conexiones.
     */
    function disconnect()
    {

        /* `global , ;` declara que las variables `$conexion_pdo` y
        `$obj_pdo_stmt ` son variables globales, lo que significa que se puede acceder a ellas desde  cualquier parte del código, incluidas las funciones internas. Esto es necesario en la   función `disconnect()`, que necesita acceder y cerrar la declaración PDO y los objetos de  conexión. Sin la declaración `global`, la función no podría acceder a estas variables. */
        global  $conexion_pdo,  $obj_pdo_stmt;



        /* `->closeCursor();` cierra el cursor asociado con el objeto `PDOStatement`. Esto   libera cualquier recurso asociado con el cursor y permite que la declaración se ejecute  nuevamente si es necesario. Es una buena práctica cerrar los cursores cuando ya no se  necesitan para conservar recursos y evitar posibles fugas de memoria. */
        $obj_pdo_stmt->closeCursor();

        /* La línea ` -= null;` intenta establecer el valor de `$obj_pdo_stmt ` en `null`. Sin embargo, esta no es la sintaxis correcta para establecer una variable en `null`. */
        $obj_pdo_stmt = null;


        /* ` = null;` establece el valor de la variable `` en `null`. Esto se hace para liberar cualquier recurso asociado con el objeto PDO y liberar memoria. Es una  buena práctica cerrar las conexiones de la base de datos cuando ya no se necesitan para evitar posibles fugas de memoria y conservar recursos. */
        $conexion_pdo = null;
        echo "<br />";
        echo " Consultas y conexciones cerradas";
    };
    /* `disconnect();` es una función definida por el usuario que se llama en el bloque `finally` del   código. Se desconecta de la base de datos cerrando consultas y conexiones. Cierra el cursor asociado con el objeto `PDOStatement` y establece las variables `$resultado` y ` $conexion_pdo` en  `null` para liberar cualquier recurso asociado con ellas y liberar memoria. Es una buena  práctica cerrar las conexiones de la base de datos cuando ya no se necesitan para evitar  posibles fugas de memoria y conservar recursos. */
    disconnect();
}
