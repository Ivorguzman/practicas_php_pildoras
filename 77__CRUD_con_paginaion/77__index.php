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
  // ===COMPROBACIONES PAGINACIÖN===
  // print "<pre>\n";
  // echo "<br />";
  // echo "<br />";
  // print_r("Numero de filas (Registros) en la consulta = " . $numeroFila . "<br>");
  // print_r("Numero paginas = " . $matrizPersonas . "<br>");
  // print_r("Pagina  "  .  $pagina . " de" . " $totalPaginas" . "<br>");
  // print_r("Empezar Desde = " . $empezarDesDe);
  // print_r(" Hasta = " . $matrizPersonas . "<br>");
  // echo "<br />";
  // echo "<br />";
  // ===FIN COMPROBACIONES PAGINACIÖN===

  //===COMPROBACIONES query(.sql.)===
  // $sqlLimit= "SELECT  * FROM  datos_usuarios LIMIT  $empezarDesDe, $matrizPersonas";
  // $registro_PRUEBA = $conexion_pdo->query($sqlLimit)->fetchAll(PDO::FETCH_OBJ);
  // print "<pre>";
  // print "<pre>\n";
  // print_r($registro_PRUEBA);
  // print "<pre>";
  // ===FIN COMPROBACIONES===


  //===COMPROBACIONES prepare(sql.)===
  // $registro_PRUEBA2= $conexion_pdo->prepare($sql);
  // print "<pre>";
  // print "<pre>\n";
  // print_r($registro_PRUEBA2);
  // print "<pre>";
  // ===FIN COMPROBACIONES===


  $registro = $conexion_pdo->query("SELECT * FROM datos_usuarios LIMIT  $empezarDesDe, $matrizPersonas")->fetchAll(PDO::FETCH_OBJ);
  if (isset($_POST["insertar"])) {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];

    try {
      $sql = "INSERT INTO  datos_usuarios (Nombre, Apellido ,Direccion) VALUES (:miNombre, :miApellido,:miDireccion)";
      $registro = $conexion_pdo->prepare($sql);

      //  todo  3. EJECUTAR SQL
      $registro->execute(array(":miNombre" => $nombre,   ":miApellido" => $apellido, ":miDireccion" => $direccion));
      header("Location:77__index.php");
      // ===COMPROBACIONES===
      print "<pre>\n";
      print_r($registro);
      print "<pre>";
      // ===FIN COMPROBACIONES
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
  ?>
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
          <td class='bot'><a href="77__borrar.php?id=<?php echo $item->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
          <td class='bot'><a href="77__editar.php?id=<?php echo $item->id ?>&nombre=<?php echo $item->Nombre ?>&apellido=<?php echo $item->Apellido ?>&direccion=<?php echo $item->Direccion ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
        </tr>
      <?php endforeach ?>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td><input type='text' name='nombre' size='10' class='centrado'></td>
        <td><input type='text' name='apellido' size='10' class='centrado'></td>
        <td><input type='text' name=' direccion' size='10' class='centrado'></td>
        <td><input type='submit' name='insertar' id='insertar' value='Insertar Datos'></td>
      </tr>
      <tr>
        //todo **************** INICIO bucle for de Paginacion ***************
        <td colspan="3" class='paginacion'>


          <?php
          for ($i = 1; $i <= $totalPaginas; $i++) {
            echo "<a href='?pagina=" . $i . "'>|$i|</a>  ";
          }
          ?>

        </td>
        //todo ****** FIN bucle for de Paginacion ***************
      </tr>
    </table>

  </form>

  <br>
  <p>&nbsp;</p>
</body>

</html>
