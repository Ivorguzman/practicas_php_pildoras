'<?php
   /* La línea `require_once("81-82_Conectar_modelo.php");` incluye el archivo
   "81-82_Conectar_modelo.php" en el script PHP actual. Es probable que este archivo contenga el
   código para establecer una conexión de base de datos utilizando PDO (objetos de datos PHP). Al
   incluir este archivo, el script puede acceder al método `Conectar::conexion()`, que establece la
   conexión a la base de datos. */
   require_once("81-82_Conectar_modelo.php");


   /* La línea ` = Conectar::conexion();` está llamando al método `conexion()` de la clase
   `Conectar`. Este método se encarga de establecer una conexión a la base de datos mediante PDO
   (PHP Data Objects). El valor devuelto luego se asigna a la variable ` $conexion_pdo`, que puede
   usarse para ejecutar consultas a la base de datos. */
   $conexion_pdo = Conectar::conexion();

   // TODO INICIO Inserta los datos a base de datos al pulsar el boton type='submit' name='insertar'
   if (isset($_POST["insertar"])) {

      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $direccion = $_POST["direccion"];

      try {
         // Consulta paramatrizada
         $sql = "INSERT INTO datos_usuarios (Nombre, Apellido ,Direccion) VALUES (:miNombre, :miApellido,:miDireccion)";

         // Resulset Paramatrizado
         $registro = $conexion_pdo->prepare($sql);

         // todo 3. EJECUTAR SQL
         $registro->execute(array(":miNombre" => $nombre, ":miApellido" => $apellido, ":miDireccion" => $direccion));
       /* La línea `header("Location:../81_82_index.php");` es una función PHP que redirige al usuario a una página diferente. En este caso, redirige al usuario a la página `81_82_index.php` ubicada en el directorio principal (`../`). Por lo general, esto se usa después de realizar una operación de base de datos, como insertar datos, para redirigir al usuario a una página diferente para realizar más acciones o para mostrar un mensaje de éxito. */
       
      } catch (Throwable $e) {
         echo '_______________ ERROR: catch (Throwable $e) _______________' . "<br />";
         echo "El codigo de execpción es: " . $e->getMessage() . "<br />";
         echo "El codigo de execpción es: " . $e->getMessage() . "<br />";
         echo "EL archivo es: " . $e->getFile() . "<br />";
         echo "EL codigo del ERROR es: " . $e->getCode() . "<br />";
         echo 'LINEA DEL ERROR: ==> : ' . $e->getLine() . "<br />";
         echo '______________________________________________________________' . "<br />";
      }
   }
   // TODO FIN Inserta los datos a base de datos al pulsar el boton type='submit' name='insertar'
   ?>
