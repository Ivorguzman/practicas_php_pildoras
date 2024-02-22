<?php

/* Estas líneas de código configuran las credenciales para una conexión PDO (objeto de datos PHP) a una base de datos MySQL. `$dsn` especifica el nombre de la base de datos y el host, mientras que `$usuario, ` y ` $password ` especifican el nombre de usuario y la contraseña para la conexión a la base de datos. */
$dsn = 'mysql:dbname=productos;host=127.0.0.1';
$usuario = 'roots';
$password = '';



try {


    /* Estas líneas de código están desinfectando y escapando de la entrada del usuario de un formularioenviado a través del método POST. La función `htmlentities()` convierte cualquier carácter especial en sus correspondientes entidades HTML, evitando posibles ataques XSS. La función `addslashes()` agrega una barra invertida antes de cualquier carácter especial, evitando posibles ataques de inyección SQL. Los valores saneados y escapados se almacenan en las variables ` $f_usuario ` y  `$f_clave`. */
    $f_usuario = htmlentities(addslashes($_POST['usuario']));
    $f_clave = htmlentities(addslashes($_POST['clave']));
    

    /* Imprimiendo los valores de las variables `$f_usuario` y ` $f_clave)` de forma formateada usando la función `print_r()`. el `<pre> Las etiquetas ` se usan para mostrar la salida en una forma  preformateada. */
    print "<pre>";
    print_r("20__ usuario ==> " . $f_usuario);
    echo "<br>";
    print_r("22__ password ==> " . $f_clave);
    print "</pre>";



    $conexion_pdo = new PDO($dsn, $usuario, $password);
    echo "_Conexion establecida con BASE DE DATOS ";



    /* `->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);` está configurando el  atributo de modo de error del objeto PDO en `PDO::ERRMODE_EXCEPTION`. Esto significa que si se  produce un error durante una operación de la base de datos, se generará una excepción PDO, lo que permitirá una gestión y depuración de errores más detallada. */
    $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );



    /* Establecer el conjunto de caracteres de la conexión de la base de datos en UTF-8, que es una codificación de caracteres que admite una amplia gama de caracteres de diferentes idiomas y escrituras. Esto es importante para manejar datos de texto que pueden contener caracteres no ASCII,como letras acentuadas o caracteres de alfabetos no latinos. */
    $conexion_pdo->exec("SET CHARACTER SET utf8");





    /* La variable ` $query` está almacenando una consulta SQL que selecciona todas las columnas (`*`)
    de la tabla `usuarios_pass` donde la columna `usuarios` es igual al valor del parámetro `:usu` y
    la columna `clave` es igual al valor del parámetro `:contra`. Los parámetros `:usu` y `:contra`
    son marcadores de posición que se reemplazarán con valores reales cuando se ejecute la consulta.
    Esta consulta se utilice para autenticar a un usuario en función de su nombre de
    usuario y contraseña. */
    //! $query = "SELECT * FROM  usuarios_pass WHERE (usuarios = :usu ,clave =:contra) no funciona ¿por que?  ";
    $query = "SELECT * FROM  usuarios_pass WHERE (usuarios =:usu)  ";


    /* ` = ->prepare();` está preparando una declaración PDO para que la   ejecute la base de datos. Toma la consulta SQL almacenada en la variable `` y la prepara  para que la ejecute el motor de la base de datos. El objeto de declaración PDO resultante se almacena en la variable `$obj_pdo_stmt `, que luego se puede ejecutar con parámetros vinculados a   ella. Esta es una forma común de ejecutar consultas SQL en PHP usando PDO, ya que permite consultas parametrizadas que son más seguras y menos propensas a ataques de inyección SQL. */
    $obj_pdo_stmt = $conexion_pdo->prepare($query);

    print "<pre>";
    echo ('_ $query ==> ' . $query);
    echo "<br>";
    echo "<br>";
    echo ('_ print_r($obj_pdo_stmt = $conexion_pdo->prepare($query) ==> ');
    print_r($conexion_pdo->prepare($query));
    echo "<br>";
    echo ('_ print_r($obj_pdo_stmt) ==> ');
    print_r($obj_pdo_stmt);
    print "</pre>";
    echo "<br>";


    /* `->execute(array(":usu" => , ":contra" => ))` estáejecutando una declaración preparada con los valores de ` $f_usuario` y ` $f_clave` vinculados a la marcadores de posición `:usu` y `:contra` respectivamente. Esta declaración se utiliza para autenticar a un usuario en función de su nombre de usuario y contraseña. El método `execute()` toma una matriz de valores de parámetros como su argumento, con cada valor de parámetro asociado con su marcador de posición correspondiente en la declaración preparada. */
    $obj_pdo_stmt->execute(array(":usu" => $f_usuario));


   /* La línea ` = 0;` inicializa una variable llamada `` y establece su valor inicial en 0. Esta variable se utiliza para ealizar un seguimiento del número de intentos de autenticación exitosos. Se incrementa en 1 cada vez que la contraseña de un usuario coincide con
   la contraseña cifrada almacenada en la base de datos. */
    $contador = 0;

    /* El bucle `while` obtiene cada fila del conjunto de resultados devuelto por la declaración preparada ` $obj_pdo_stmt` mediante el método `fetch()` con el estilo de obtención `PDO::FETCH_ASSOC`, que devuelve una matriz asociativa que contiene nombres de columna y valores y la almacena en la variable ($registro ) . El ciclo luego imprime los valores de las columnas `usuarios` y `clave` para cada fila alamcenada en la variable ($registro ). Este código se utiliza para autenticar a un usuario en función de su nombre de usuario y contraseña almacenados en una base de datos MySQL. */
    while ($registro = $obj_pdo_stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Usuario : " . $registro['usuarios'] . "<br>";
        echo 'Contraseña : ' . $f_clave . "<br>";
        echo "Contraseña ecriptada  : " . $registro['clave'];

        if (password_verify($f_clave, $registro['clave'])) {
            $contador++;
        }
    }

    if ($contador > 0) {
        header("Location:spain.php");
    }else{
        header("Location:69-E-__Login_con_hash_usuario_no_registrado.php");

    }

} catch (Exception $e) {
  

    echo "_ ALEX, ERROR: el codigo de execpción es: " . $e->getMessage() . "<br />";
    echo "_ EL archivo es: " . $e->getFile() . "<br />";
    echo "_ EL codigo del ERROR es: " . $e->getCode() . "<br />";
    exit('_ERROR: ==>  en la linea : ' . $e->getLine()) . "<br />";
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
    /* `disconnect();` es una función definida por el usuario que se llama en el bloque `finally` del   código. Se desconecta de la base de datos cerrando consultas y conexiones. Cierra el cursor
    asociado con el objeto `PDOStatement` y establece las variables `$resultado` y ` $conexion_pdo` en  `null` para liberar cualquier recurso asociado con ellas y liberar memoria. Es una buena  práctica cerrar las conexiones de la base de datos cuando ya no se necesitan para evitar  posibles fugas de memoria y conservar recursos. El signo de exclamación (`!`) se usa para negar el valor de retorno de la función. En este caso, no es necesario ya que la función no devuelve ningún valor */
    !disconnect();
}
