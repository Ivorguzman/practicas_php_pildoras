<?php

/* Estas líneas de código configuran las credenciales para una conexión PDO (objeto de datos PHP) a una base de datos MySQL. `$dsn` especifica el nombre de la base de datos y el host, mientras que `$usuario, ` y ` $password ` especifican el nombre de usuario y la contraseña para la conexión a la base de datos. */
$dsn = 'mysql:dbname=productos;host=127.0.0.1';
$usuario = 'root';
$password = '';



/* ` $_GET['usuario']` está asignando el valor del parámetro 'usuario' pasado a través de la URL usando el método GET a la variable `$f_usuario`. De manera similar, `$_GET['clave']` asigna el valor del parámetro 'clave' pasado a través de la URL usando el método GET a la variable `$f_clave `. */
$f_usuario = $_GET['usuario'];
$f_clave = $_GET['clave'];

/* Imprimiendo los valores de las variables `$f_usuario` y ` $f_clave)` de forma formateada usando la función `print_r()`. el `<pre> Las etiquetas ` se usan para mostrar la salida en una forma  preformateada. */
print "<pre>";
print_r("13__ usuario ==> " . $f_usuario);
echo "<br>";
print_r("15__ password ==> " . $f_clave);
print "</pre>";
echo "<br>";

/* ` = password_hash(,PASSWORD_DEFAULT);` está encriptando la contraseña
`$f_clave` utilizando la función `password_hash()` con el algoritmo predeterminado especificado por
`PASSWORD_DEFAULT`. La contraseña cifrada resultante se almacena en la variable
`$f_clave_ecriptada `. Esto se hace por razones de seguridad para evitar que la contraseña se
almacene como texto sin formato en la base de datos. */
$f_clave_ecriptada = password_hash($f_clave,PASSWORD_DEFAULT );


print "<pre>";
print_r("31__ f_usuario ==> " . $f_usuario);
echo "<br>";
print_r("33__ f_clave_encriptada ==> " . $f_clave_ecriptada);
print "</pre>";
echo "<br>";


/* Crea un nuevo objeto PDO y establece una conexión a una base de datos MySQL utilizando el nombre de origen de datos (DSN), el nombre de usuario '$usuario' y la contraseña '$password' especificados en estas variables. */
$conexion = new PDO($dsn, $usuario, $password);


/* Este bloque de código comprueba si la variable `$conexion` está configurada o no. Si está configurado, imprime un mensaje que indica que se ha establecido la conexión. Si no está configurado, establece el atributo de modo de error del objeto PDO en `ERRMODE_EXCEPTION`. Esto se hace para manejar cualquier excepción que pueda ocurrir durante la ejecución del script. */
if (isset($conexion)) {
    print_r('44__ isset($conexion) ==>  ' . isset($conexion));
    echo "<br>";
    echo ("46__*****Conexcion establecida*****" . "<br /><br />");
} else {
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}


/* Establecer el conjunto de caracteres de la conexión de la base de datos en UTF-8, que es una codificación de caracteres que admite una amplia gama de caracteres de diferentes idiomas y escrituras. Esto es importante para manejar datos de texto que pueden contener caracteres no ASCII,como letras acentuadas o caracteres de alfabetos no latinos. */
$conexion->exec("SET CHARACTER SET utf8");

/* La variable `$query  está almacenando una consulta SQL que inserta un nuevo registro en la tabla "USUARIOS_PASS" con dos columnas: "USUARIOS" y "CLAVE". Los valores para estas columnas se especifican usando marcadores de posición `:usu` y `:contra`, respectivamente. Estos marcadores de posición se reemplazarán con valores reales PASADOS POR EL FORMULARIO EN LOS CAMPOS 'usuarios'  Y 'clave'cuando se ejecute la consulta. */
$query = "INSERT INTO usuarios_pass (usuarios,clave) VALUES (:usu,:contra) ";

/* `=->prepare();` está preparando una declaración SQL para su ejecución. Crea
un objeto de declaración preparado `$resultado` basado en la consulta SQL `$query` y lo devuelve. La declaración preparada se puede ejecutar con valores de parámetros específicos usando el método `execute()`. Este enfoque puede mejorar el rendimiento y la seguridad al permitir que la base de datos optimice el plan de ejecución y evite los ataques de inyección SQL.

Return PDOStatement ó FALSE .Si el servidor de la base de datos prepara correctamente la declaración, PDO::prepare devuelve un objeto PDOStatement. Si el servidor de la base de datos no puede preparar correctamente la declaración,PDO::prepare returns FALSE o emite PDOException(dependiendo del manejo de errores).
*/
$resultado = $conexion->prepare($query);// =>  PDOStatement Object


print "<pre>";
echo('67_ $query ==> '. $query);
echo "<br>";
echo "<br>";
echo('71_ print_r($conexion->prepare($query) ==> ');
print_r($conexion->prepare($query));
echo "<br>";
echo ('74_ print_r($conexion) ==> ');
print_r($conexion);
print "</pre>";
echo "<br>";

/* `->execute(array(":usu"=>,":contra"=>));` está ejecutando una sentencia preparada con los valores de `$usuario` y `$password` pasados como parámetros. El `array(":usu"=>,":contra"=>)` vincula los valores a los marcadores de posición `:usu` y `:contra` en la consulta SQL. Este enfoque puede mejorar el rendimiento y la seguridad al permitir que la base de datos optimice el plan de ejecución y evite los ataques de inyección SQL. */
$resultado->execute(array(":usu" => $f_usuario, ":contra" => $f_clave_ecriptada));

/* `echo "Registro Insertado"` muestra la cadena "Registro Insertado" en la pantalla, lo que indica que se ha insertado correctamente un nuevo registro en la tabla "USUARIOS_PASS". */
echo "Registro Insertado";







