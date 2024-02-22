<?php
try {
   /* El código almacena los detalles de conexión para una base de datos MySQL. */
   $dns = 'mysql:dbname=productos;host=127.0.0.1';
   $usuario = 'root';
   $password = '';

   /* La línea ` = new PDO(, , );` está creando un nuevo objeto
      PDO y estableciendo una conexión con la base de datos. La variable ` $conexion_pdo ` contiene el DNS o
      DSN (Nombre de la fuente de datos) de la base de datos, que especifica el controlador de la
      base de datos, el host y el nombre de la base de datos. Las variables ` $usuario` y ` $password`
      contienen el nombre de usuario y la contraseña para la conexión a la base de datos. La función
      `nuevo PDO()` crea una nueva instancia de la clase PDO, que es una extensión de PHP para
      interactuar con bases de datos. El objeto  resultante se puede usar para ejecutar
       consultas SQL y realizar otras operaciones de base de datos. */
   $conexion_pdo = new PDO($dns, $usuario, $password);
   echo " Conexion establecida con BASE DE DATOS " . "<br>";

   /* La línea `->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);` establece el
        modo de error para la conexión PDO. */
   $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   /* La línea `->exec("SET CHARACTER SET utf8");` está configurando el conjunto de   caracteres de la conexión de la base de datos a UTF-8. Esto asegura que la conexión pueda manejar   y almacenar caracteres de diferentes idiomas y conjuntos de caracteres correctamente. UTF-8 es   una codificación de caracteres ampliamente utilizada que admite una amplia gama de caracteres de   varios idiomas. */
   $conexion_pdo->exec("SET CHARACTER SET utf8");
} catch (\Throwable $e) {
   echo " ALEX, ERROR: el codigo de execpción es: " . $e->getMessage() . "<br />";
   echo " EL archivo es: " . $e->getFile() . "<br />";
   echo " EL codigo del ERROR es: " . $e->getCode() . "<br />";
   echo ' ERROR: ==>  en la linea : ' . $e->getLine() . "<br />";
}
