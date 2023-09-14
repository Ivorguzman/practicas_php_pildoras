
<?php

//! CONECTAR CON BASE DE DATOS
class Conectar


{

   //todo  1. CREAR CONEXÍON
   public static function conexion()

   {
      try {
         /* El código almacena los detalles de conexión para una base de datos MySQL. */
         $dns = 'mysql:dbname=pruebas;host=127.0.0.1';
         $usuario = 'root';
         $password = '';
         /* La línea ` = new PDO($dns,$usuario,$password);` está creando una nueva instancia de
   la clase PDO, que se utiliza para conectarse a una base de datos MySQL. Toma tres parámetros:
   `$dns,$usuario,$password)` que especifica el nombre de la base de datos y el host, el nombre de
   usuario de la base de datos y  la contraseña de la base de datos. Esta línea
   establece una conexión a la base de datos MySQL utilizando las credenciales proporcionadas. */
         $conexion_pdo = new PDO($dns, $usuario, $password);
         //echo " Conexion establecida con BASE DE DATOS (modelo/81-82_conectar.php) " . "<br>";

         /* La línea `->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);` establece el
   modo de error para la conexión PDO. */
         $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         /* La línea `->exec("SET CHARACTER SET utf8");` está configurando el conjunto de
   caracteres de la conexión de la base de datos a UTF-8. Esto asegura que la conexión pueda manejar
   y almacenar caracteres de diferentes idiomas y conjuntos de caracteres correctamente. UTF-8 es
   una codificación de caracteres ampliamente utilizada que admite una amplia gama de caracteres de
   varios idiomas. */
         $conexion_pdo->exec("SET CHARACTER SET utf8");
         //todo INICIO ****** Objeto Stm ****************
         $conexion_pdo->prepare("SELECT * FROM datos_usuarios");
         // todo FIN ********************************************
      } catch (Throwable $e) {

         echo "_ ALEX, ERROR: el codigo de execpción es: " . $e->getMessage() . "<br />";
         echo "_ EL archivo es: " . $e->getFile() . "<br />";
         echo "_ EL codigo del ERROR es: " . $e->getCode() . "<br />";
         echo '_ERROR: ==>  en la linea : ' . $e->getLine() . "<br />";
      }

      /* La línea `return ;` devuelve el objeto PDO `` al código de llamada.
     Esto permite que el código de llamada utilice la conexión de base de datos establecida para
     ejecutar consultas e interactuar con la base de datos. */
      return $conexion_pdo;
   }
}
