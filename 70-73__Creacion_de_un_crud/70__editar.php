<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Documento sin título</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">



</head>

<body>


  <h1>ACTUALIZAR</h1>
  <?php


  try {
   
    /* El código está comprobando si el formulario ha sido enviado o no. Si el formulario no ha sido
  enviado, recupera los valores de los parámetros de la URL () y los asigna a las variables
  (id,nombre,apellido ,direccion ). Si el formulario ha sido enviado, recupera los valores de los
  campos del formulario () y los asigna a las variables (id,nombre,apellido ,direccion ) */
    include("70__conexionCRUD.php");

    if (!isset($_POST["bot_actualizar"])) {
      echo " ¿ Por que estoy aqui ?";
      $id = $_GET["id"];
      $nombre = $_GET["nombre"];
      $apellido = $_GET["apellido"];
      $direccion = $_GET["direccion"];
    } else {
      /* El bloque de código dentro de la instrucción `else` se ejecuta cuando se envía el formulario.
    Recupera los valores de los campos del formulario con los nombres "id", "Nombre", "Apellido" y
    "Dirección" usando el arreglo superglobal `$_POST["..."]` y los asigna a las variables
    correspondientes (id,nombre,apellido ,direccion ). Estos valores se utilizarán para
    actualizar el registro de la base de datos. */
      $id = $_POST["id"];
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $direccion = $_POST["direccion"];

      //$registro = $conexion_pdo->query(("UPDATE datos_usuarios SET Nombre=:miNombre,Apellido=:miApellido,Direccion=:miDireccion WHERE id=:miId"));
      // $resultado = $conexion_pdo->prepare($registro);
      $sql = "UPDATE datos_usuarios SET Nombre=:miNombre,Apellido=:miApellido,Direccion=:miDireccion WHERE id=:miId";
      $resultado = $conexion_pdo->prepare($sql);
      $resultado->execute(array(":miId=$id", ":miNombre=$nombre", ":miApellido=$apellido", ":miDireccion=$direccion"));
      // $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //$conexion_pdo->exec("SET CHARACTER SET utf8");
    }
  } catch (Throwable $e) {
    /* El bloque `catch (Throwable )` se usa para capturar cualquier excepción o error que pueda
  ocurrir durante la ejecución del código dentro del bloque `try`. */
    echo "______ ERROR________" . "<br />";
    echo "El codigo de execpción es: " . $e->getMessage() . "<br />";
    echo "EL archivo es: " . $e->getFile() . "<br />";
    echo "EL codigo del ERROR es: " . $e->getCode() . "<br />";
    echo 'LINEA DEL ERROR: ==> : ' . $e->getLine() . "<br />";
  }
  ?>


  <form name="form1" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <table width="25%" border="1" align="center">
      <tr>
        <td></td>
        <td><label for="id"></label>
          <input type="hidden" name="id" id="id">
        </td>
      </tr>
      <tr>
        <td>Nombre</td>
        <td><label for="nom"></label>
          <input type="text" name="nombre" id="nombre" value="<?php echo  $nombre ?>">
        </td>
      </tr>
      <tr>
        <td>Apellido</td>
        <td><label for="ape"></label>
          <input type="text" name="apellido" id="apellido" value="<?php echo $apellido ?>">
        </td>
      </tr>
      <tr>
        <td>Dirección</td>
        <td><label for="dir"></label>
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
