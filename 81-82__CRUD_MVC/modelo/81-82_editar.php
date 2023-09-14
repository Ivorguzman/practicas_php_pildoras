<!doctype html>
<html>

<head>
   <meta charset="utf-8">
   <title>Documento sin título</title>
   <link rel="stylesheet" type="text/css" href="hoja.css">>

</head>

<body>

   <h1>ACTUALIZAR</h1>

   <?php
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


   /* La línea `if (!isset(["bot_actualizar"]))` comprueba si el formulario se ha enviado o no.
 Comprueba si el campo "bot_actualizar" en la matriz  está configurado o no. Si no está
 configurado, significa que el formulario no se ha enviado y se ejecutará el código dentro del
 bloque if. Si está configurado, significa que el formulario se ha enviado y se ejecutará el código
 dentro del bloque else. */
   if (!isset($_POST["bot_actualizar"])) {
      echo "18_ DENTRO DEL IF CON GET ";
      /* El bloque de código dentro de la instrucción `else` se ejecuta cuando se envía el formulario.
    Recupera los valores de los campos del formulario con los nombres "id", "Nombre", "Apellido" y
    "Dirección" usando el arreglo superglobal `$_POST["..."]` y los asigna a las variables
    correspondientes (id,nombre,apellido ,direccion ). Estos valores se utilizarán para
    actualizar el registro de la base de datos. */
      $id = $_GET["id"];
      $nombre = $_GET["nombre"];
      $apellido = $_GET["apellido"];
      $direccion = $_GET["direccion"];
   } else {

      try {
         $id = $_POST["id"];
         $nombre = $_POST["nombre"];
         $apellido = $_POST["apellido"];
         $direccion = $_POST["direccion"];

         /* El código está comprobando si el formulario ha sido enviado o no. Si el formulario no ha sido
  enviado, recupera los valores de los parámetros de la URL () y los asigna a las variables
  (id,nombre,apellido ,direccion ). Si el formulario ha sido enviado, recupera los valores de los
  campos del formulario () y los asigna a las variables (id,nombre,apellido ,direccion ) */




         /* El código está realizando una operación de actualización sobre una tabla de la base de datos  llamada "datos_usuarios". 
      Está actualizando los valores de las columnas "Nombre", "Apellido"  y "Dirección" en función del valor "id" proporcionado. */
         $sql = "UPDATE datos_usuarios SET Nombre = :miNombre, Apellido = :miApellido, Direccion = :miDireccion WHERE id = :miId";

         /* ` = ->prepare($sql)` está preparando una sentencia SQL para su
      ejecución. Está creando un objeto de declaración preparada `` a partir del objeto de
      conexión PDO `` y la consulta SQL ``. Esta declaración preparada se puede
      ejecutar con el método `execute()`, pasando los parámetros necesarios. */
         $resultado = $conexion_pdo->prepare($sql);

         /* La línea `->execute(array(":myId=", ":myName=", ":myLastName=",
      ":myAddress="));` está ejecutando un declaración con los parámetros proporcionados. */
         $resultado->execute(array(":miId" => $id, ":miNombre" => $nombre,   ":miApellido" => $apellido, ":miDireccion" => $direccion));
         header("Location:../81_82_index.php");
      } catch (Throwable $e) {
         /* El bloque `catch (Throwable )` se usa para capturar cualquier excepción o error que pueda
  ocurrir'durante la ejecución del código dentro del bloque `try`. */
         echo '_______________ ERROR: catch  (Throwable $e) _______________' . "<br />";
         echo "El codigo de execpción es: " . $e->getMessage() . "<br />";
         echo "El codigo de execpción es: " . $e->getMessage() . "<br />";
         echo "EL archivo es: " . $e->getFile() . "<br />";
         echo "EL codigo del ERROR es: " . $e->getCode() . "<br />";
         echo 'LINEA DEL ERROR: ==> : ' . $e->getLine() . "<br />";
         echo '______________________________________________________________' . "<br />";
      }
   }


   ?>

   <form name="form1" method="post" border="0" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <table width="25%" border="0" align="center">
         <tr>
            <td></td>
            <td><label for="id"></label>
               <!-- <input type="hidden" name="id" id="id"> -->
               <input type="hidden" name="id" id="id" value="<?php echo  $id ?>">
            </td>
         </tr>
         <tr>
            <td>Nombre</td>
            <td><label for="nombre"></label>
               <input type="text" name="nombre" id="nombre" value="<?php echo  $nombre ?>">
            </td>
         </tr>
         <tr>
            <td>Apellido</td>
            <td><label for="apellido"></label>
               <input type="text" name="apellido" id="apellido" value="<?php echo $apellido ?>">
            </td>
         </tr>
         <tr>
            <td>Dirección</td>
            <td><label for="direccion"></label>
               <input type="text" name="direccion" id="direccion" value="<?php echo $direccion ?>">
            </td>
         </tr>
         <tr>
            <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
         </tr>
      </table>
   </form>
   <p>&nbsp;</p>

</body>

</html>
