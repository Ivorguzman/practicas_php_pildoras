<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

  <?php
  include("77__conexionCRUD.php");

  //todo **************** INICIO Paginacion ***************
  $pagina = 1; // Mostrar pagia donde estamos al cargar por primera vez la Pagia web
  $matrizPersonas = 4; //  registros  por Pagina

  if (isset($_GET["pagina"])) {

    if ($_GET['pagina'] == 1) {
      header("Location:77__index.php");
    } else {
      $pagina = $_GET["pagina"];
    }
  } else {
    $pagina = 1;
  }
  $empezarDesDe = ($pagina - 1) * $matrizPersonas;

  $sql = ("SELECT  * FROM  datos_usuarios ");

  // todo  ************  CREAR OBJETO STATEMENT (jenera el Resulset)  con consulta $sql ***************
  $registro = $conexion_pdo->prepare($sql);
  $registro->execute(array());
  $numeroFila = $registro->rowCount();

  //! ___________________________________ calculando el número total de Registros ________________________________
  $totalPaginas = ceil($numeroFila / $matrizPersonas);
  //! ___________________________________ calculando el número total de Registros ________________________________

  //todo **************** FIN Paginacion ***************

  $registro = $conexion_pdo->query("SELECT * FROM datos_usuarios LIMIT  $empezarDesDe, $matrizPersonas")->fetchAll(PDO::FETCH_OBJ);

  // TODO INICIO Inserta los datos  a base de datos al pulsar el boton  type='submit' name='insertar'
  if (isset($_POST["insertar"])) {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];

    try {
      // Consulta paramatrizada
      $sql = "INSERT INTO  datos_usuarios (Nombre, Apellido ,Direccion) VALUES (:miNombre, :miApellido,:miDireccion)";

      //  Resulset Paramatrizado
      $registro = $conexion_pdo->prepare($sql);

      //  todo  3. EJECUTAR SQL
      $registro->execute(array(":miNombre" => $nombre,   ":miApellido" => $apellido, ":miDireccion" => $direccion));
      header("Location:77__index.php");
    } catch (Throwable $e) {
      echo '_______________ ERROR: catch  (Throwable $e) _______________' . "<br />";
      echo "El codigo de execpción es: " . $e->getMessage() . "<br />";
      echo "El codigo de execpción es: " . $e->getMessage() . "<br />";
      echo "EL archivo es: " . $e->getFile() . "<br />";
      echo "EL codigo del ERROR es: " . $e->getCode() . "<br />";
      echo 'LINEA DEL ERROR: ==> : ' . $e->getLine() . "<br />";
      echo '______________________________________________________________' . "<br />";
    }
  }
  // TODO FIN  Inserta los datos  a base de datos al pulsar el boton  type='submit' name='insertar'
  ?>


  <!-- /* El `<form> `La etiqueta se utiliza para crear un formulario HTML que permite a los usuarios
  ingresar datos. En este caso, el atributo &quot;acción&quot; se establece en &quot;< ?php
  ['PHP_SELF']; ?> `, lo que significa que el formulario se enviará a la misma página en la
  que se encuentra. */ -->
  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table width="50%" border="2" align="center">
      <tr>
        <div>
          <h1 class="titulo">CRUD<span class="subtitulo"> Create | Read | Update | Delete</span></h1>
        </div>
      </tr>
      <tr>
        <!-- <td class="primera_fila">Id</td> -->
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellido</td>
        <td class="primera_fila">Dirección</td>
        <td class="primera_fila">Sleccione</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>


      <!-- // todo 4. RECORRER EL RESULSET -->
      <?php foreach ($registro as $item) : ?>
        <tr>
          <!-- <td><php echo $item->id ?></td> id -->
          <td><?php echo $item->Nombre ?></td> <!--Nombre -->
          <td><?php echo $item->Apellido ?></td> <!--Apellido -->
          <td><?php echo $item->Direccion ?></td> <!--Direccion-->

          <td class='bot'><a href="77__editar.php?id=<?php echo $item->id ?>&nombre=<?php echo $item->Nombre ?>&apellido=<?php echo $item->Apellido ?>&direccion=<?php echo $item->Direccion ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>

        </tr>
      <?php endforeach ?>
      <tr>
        <td></td>
      </tr>

      <!-- //todo **************** INICIO bloque HTML deInsertrar datos ***** -->
      <tr>
        <td><input type='text' name='nombre' size='10' class='centrado'></td>
        <td><input type='text' name='apellido' size='10' class='centrado'></td>
        <td><input type='text' name=' direccion' size='10' class='centrado'></td>

        <td><input type='submit' name='insertar' id='insertar' value='Insertar Datos'></td>
      </tr>
      <!-- //todo **************** INICIO bloque HTML deInsertrar datos ***** -->




      <!-- //todo **************** INICIO bloque de Paginación *************** -->
      <tr>
        <td colspan="3" class='paginacion'>


          <?php
          for ($i = 1; $i <= $totalPaginas; $i++) {
            echo "<a href='?pagina=" . $i . "'>|$i|</a>  ";
          }
          ?>

        </td>
      </tr>
      //todo ****** FIN bloque de Paginación ***************
    </table>
  </form>

  <br>
  <p>&nbsp;</p>
</body>

</html>
