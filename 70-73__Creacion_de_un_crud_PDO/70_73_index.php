<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>




  <?php
  include_once("70__conexionCRUD.php");
  /*
   La línea de código ` = ->query("SELECT * FROM
datos_usuarios")->fetchAll(PDO::FETCH_OBJ);` está ejecutando una consulta SQL para seleccionar todos
los registros de la tabla "datos_usuarios" en el base de datos. El método `query()` se usa para
ejecutar la consulta SQL, y el método `fetchAll()` se usa para obtener todas las filas devueltas por
la consulta como objetos. El parámetro ` PDO::FETCH_OBJ ( int )` devuelve una matriz que contiene
todas las filas restantes en el conjunto de resultados. La matriz representa cada fila como una matriz
de valores de columna o un objeto con propiedades correspondiente a cada nombre de columna.
Se devuelve una matriz vacía si no hay resultados para recuperar o falso en caso de falla.a..
El resultado de la consulta se almacena en la variable ``. */

$registro = $conexion_pdo->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);

  // ===COMPROBACIONES===
  print "<pre>\n";
  echo "<br />";
  echo "<br />";
  echo '34__ $registro == ';
  print_r($registro);
  print "<pre>";
  // ===FIN COMPROBACIONES


  if (isset($_POST["insertar"])) {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];

    try {


      /* El código está comprobando si el formulario ha sido enviado o no. Si el formulario no ha sido
  enviado, recupera los valores de los parámetros de la URL () y los asigna a las variables
  (id,nombre,apellido ,direccion ). Si el formulario ha sido enviado, recupera los valores de los
  campos del formulario () y los asigna a las variables (id,nombre,apellido ,direccion ) */
      include("70__conexionCRUD.php");


      /* La línea ` = "INSERT INTO user_data (Name, LastName,Address) VALUES (Name = :myName,
      LastName = :myLastName, Address = :myAddress)"` está creando una consulta SQL para insertar
      datos en la tabla "user_data". Especifica las columnas (Nombre, Apellido, Dirección) y los
      valores correspondientes (:miNombre, :miApellido, :miDirección) a insertar. Los valores son
      marcadores de posición que se reemplazarán con valores reales cuando se ejecute la consulta. */
      $sql = "INSERT INTO  datos_usuarios (Nombre, Apellido ,Direccion) VALUES (:miNombre, :miApellido,:miDireccion)";

      /* ` = ->prepare()` está preparando una sentencia SQL para su
      ejecución. Está creando un objeto de declaración preparada `` a partir del objeto de
      conexión PDO `` y la consulta SQL ``. Esta declaración preparada se puede
      ejecutar con el método `execute()`, pasando los parámetros necesarios. */
      $resultado = $conexion_pdo->prepare($sql);

      /* La línea `->execute(array(":myId=", ":myName=", ":myLastName=",
      ":myAddress="));` está ejecutando un declaración con los parámetros proporcionados. */
      $resultado->execute(array(":miNombre" => $nombre,   ":miApellido" => $apellido, ":miDireccion" => $direccion));
      header("Location:70_73_index.php");
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
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table width="50%" border="2" align="center">
      <tr>
        <div>
          <h1 class="titulo">CRUD<span class="subtitulo"> Create | Read | Update | Delete</span></h1>
        </div>
      </tr>
      <tr>
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellido</td>
        <td class="primera_fila">Dirección</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>

      <!-- 
      El "< ? php foreach ( as )" es un bucle de PHP que itera sobre cada elemento en la
     matriz `registro`. Asigna cada elemento a la variable `item` y ejecuta el código dentro del
     bucle para cada elemento. En este caso, se utiliza para mostrar los datos de la matriz
     `registro` en las filas de la tabla del código HTML.
     Una sintaxis alternativa para algunas de sus estructuras de control, a saber: if, while, for, foreach, y switch. En cada caso, la forma básica de la sintaxis alternativa es cambiar la llave de apertura por dos puntos (:) y la llave de cierre por endif;, endwhile;, endfor;, endforeach;, o endswitch;, respectivamente.
  
     //!https://www.php.net/manual/es/control-structures.alternative-syntax.php
     
   -->
      <?php foreach ($registro as $item) : ?>
        <tr>
          <td><?php echo $item->id ?></td> <!--id -->
          <td><?php echo $item->Nombre ?></td> <!--Nombre -->
          <td><?php echo $item->Apellido ?></td> <!--Apellido -->
          <td><?php echo $item->Direccion ?></td> <!--Direccion-->

          <td class='bot'><a href="70__borrar.php?id=<?php echo $item->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>


          <td class='bot'><a href="70_editar.php?id=<?php echo $item->id ?>&nombre=<?php echo $item->Nombre ?>&apellido=<?php echo $item->Apellido ?>&direccion=<?php echo $item->Direccion ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>

        </tr>
      <?php endforeach ?>

      <tr>
        <td></td>
        <td><input type='text' name='nombre' size='10' class='centrado'></td>
        <td><input type='text' name='apellido' size='10' class='centrado'></td>
        <td><input type='text' name=' direccion' size='10' class='centrado'></td>
        <td><input type='submit' name='insertar' id='insertar' value='Insertar Datos'></td>
      </tr>
    </table>
  </form>
  <br>
  <p>&nbsp;</p>
</body>

</html>
