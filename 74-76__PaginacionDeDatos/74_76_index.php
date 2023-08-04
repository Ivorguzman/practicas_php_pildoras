<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <?php

   try {

      /* La línea `include("74-76_conexion.php");` incluye el archivo "74-76_conexion.php" en el script
      PHP actual. Este archivo conteniene el código para establecer una conexión con
      la base de datos, como definir las credenciales de la base de datos y crear un objeto PDO para
      las operaciones de la base de datos. Al incluir este archivo, el código puede reutilizar la
      lógica de conexión y acceder a la funcionalidad de la base de datos definida en
      "74-76_conexion.php". */
      include("74-76_conexion.php");

      /* La línea ` = new PDO(, , );` está creando un nuevo objeto
      PDO y estableciendo una conexión con la base de datos. La variable ` $conexion_pdo ` contiene el DNS o
      DSN (Nombre de la fuente de datos) de la base de datos, que especifica el controlador de la
      base de datos, el host y el nombre de la base de datos. Las variables ` $usuario` y ` $password`
      contienen el nombre de usuario y la contraseña para la conexión a la base de datos. La función
      `nuevo PDO()` crea una nueva instancia de la clase PDO, que es una extensión de PHP para
      interactuar con bases de datos. El objeto  resultante se puede usar para ejecutar
       consultas SQL y realizar otras operaciones de base de datos. */
      $conexion_pdo = new PDO($dns, $usuario, $password);
      echo "_21 Conexion establecida con BASE DE DATOS (21 index.php) " . "<br>";

      /* La línea `->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);` establece el
        modo de error para la conexión PDO. */
      $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      /* La línea `->exec("SET CHARACTER SET utf8");` está configurando el conjunto de   caracteres de la conexión de la base de datos a UTF-8. Esto asegura que la conexión pueda manejar   y almacenar caracteres de diferentes idiomas y conjuntos de caracteres correctamente. UTF-8 es   una codificación de caracteres ampliamente utilizada que admite una amplia gama de caracteres de   varios idiomas. */
      $conexion_pdo->exec("SET CHARACTER SET utf8");

      /* Este código verifica si el parámetro "página" está configurado en la URL. Si está configurado, 
        comprueba si el valor del parámetro "pagina" es igual a 1. Si es igual a 1, 
        redirige al usuario a   la página "74_76_index.php". Si el valor del parámetro "pagina"
         no es igual a 1, asigna el valor   del parámetro "pagina" a la variable . */
      if (isset($_GET["pagina"])) {

         if ($_GET['pagina'] == 1) {
            header("Location:74_76_index.php");
         } else {
            $pagina = $_GET["pagina"];

            // ===COMPROBACIONES===
            print "<pre>\n";
            print_r("Pagina  = " . $pagina . "<br>");
            print "<pre>";
            // ===FIN COMPROBACIONES

         }
      } else {
         $pagina = 1;
         // ===COMPROBACIONES===
         print "<pre>\n";
         print_r("pagina  = " . $pagina . "<br>");
         print "<pre>";
         // ===FIN COMPROBACIONES

      }

      $pagina = 1; // Mostrar pagia donde estamos al cargar por primera vez la Pagia web
      $tamhnoPagina = 3; // Cuato registros ver por Pagina

      /* La línea ` =(-1) * ;` está calculando el índice de inicio para
     los registros que se mostrarán en la página actual. */
      $empezarDesDe = ($pagina - 1) * $tamhnoPagina;


      $sql = ("SELECT  * FROM  productos ");
      // $sql = ("SELECT  * FROM  productos WHERE SECCION= 'DEPORTES'");

      /* Se está asignando el resultado de la ejecución de la sentencia
      preparada . La sentencia preparada se ejecuta utilizando el método
      `execute()` del objeto PDO ` $conexion_pdo`. El resultado de la ejecución se almacenará en
      `` y se puede usar para obtener los datos de la base de datos. */
      $registro = $conexion_pdo->prepare($sql);

      /* La línea `->execute(array());` está ejecutando la declaración preparada ``
      con una matriz vacía como parámetro.*/
      $registro->execute(array());

      /* ` = ->rowCount();` está recuperando el número de filas devueltas
      por la consulta SQL ejecutada. Se llama al método `rowCount()` en el objeto PDOStatement
      `$registro` y devuelve el número de filas afectadas por la última sentencia SELECT ejecutada.
      En este caso, devolverá el número de filas en el conjunto de resultados de la consulta. El
      valor de `$registro->rowCount()` será el conteo de filas devueltas por la consulta. */
      $numeroFila = $registro->rowCount();


      /* La línea de código Siguiente  `  = ceil(....  );` está calculando el número total de Registros en el resultado  
      de la consulta y la Funcion celi() redondea el resulta Obtenido, retornando un numero entero. */
      $totalPaginas = ceil($numeroFila / $tamhnoPagina);


      // ===COMPROBACIONES===
      print "<pre>\n";
      echo "<br />";
      echo "<br />";
      //echo '46__ $registro == ';
      // print_r("$registro == $.conexion_pdo->query("SELECT * FROM productos")->fetchAll(PDO::FETCH_OBJ));
      print_r("Numero de fila (Registros) en la consulta = " . $numeroFila . "<br>");
      print_r("Numero de fila (Registros) por pagina = " . $tamhnoPagina . "<br>");
      print_r("Numero de Paginas en la consulta = "  .  $pagina . " de" . " $totalPaginas" . "<br>");
      print_r("Empezar Desde = " . $empezarDesDe);
      print_r(" Hasta = " . $tamhnoPagina . "<br>");
      print "<pre>";
      // ===FIN COMPROBACIONES

      /* La línea de código `  = ("SELECT * FROM productos LIMIT , ");`   está creando una consulta SQL
       para seleccionar un número limitado de filas de la tabla   "productos". La cláusula `LIMIT` 
       se utiliza para limitar el número de filas devueltas por la   consulta. */
      // $sqlLimit = ("SELECT  * FROM  productos");
      $sqlLimit = ("SELECT  * FROM  productos LIMIT  $empezarDesDe, $tamhnoPagina");

      /* Se está asignando el resultado de la ejecución de la sentencia
      preparada . La sentencia preparada se ejecuta utilizando el método
      `execute()` del objeto PDO ` $conexion_pdo`. El resultado de la ejecución se almacenará en
      `` y se puede usar para obtener los datos de la base de datos. */
      $registro = $conexion_pdo->prepare($sqlLimit);

      /* La línea `->execute(array());` está ejecutando la declaración preparada ``
      con una matriz vacía como parámetro.*/
      $registro->execute(array());


      /* El bloque de código que proporcionó es un bucle while que obtiene cada fila de datos del conjunto de 
      resultados devuelto por la consulta SQL ejecutada. */
      while ($resultado = $registro->fetch(PDO::FETCH_BOTH)) {
         // echo "<br>";
         echo "*** SECCION del articulo: "  . $resultado["SECCION"] . " ***  <br>"; // Ojo ==> PDO::FETCH_BOTH
         echo "<br>";
         echo "* CODIGO del articulo: "  . $resultado[0] . "<br>";
         echo "* NOMBRE del articulo: "  . $resultado[2] . "<br>"; // Ojo ==> PDO::FETCH_BOTH
         echo "* FECHA del articulo: "   . $resultado["FECHA"] . "<br>";
         echo "* PRECIO del articulo: "  . $resultado["PRECIO"] . "<br>";
         echo "* Nombre del articulo: "  . $resultado["PAISDEORIGEN"] . "<br>";
         echo "|____________________________________| " . "<br>";
         echo "|                                    | " . "<br>";
      }

      echo "<br>";
      echo "<br>";
      echo "<br>";
      //|____________PAGINACIÓN_____________| "

      for ($i = 1; $i < $totalPaginas; $i++) {
         echo "<a href='?pagina=" . $i . "'>|$i|</a>  ";
      }
      echo " Siguiente";
   } catch (Throwable $e) {
      echo "_ ALEX, ERROR: el codigo de execpción es: " . $e->getMessage() . "<br />";
      echo "_ EL archivo es: " . $e->getFile() . "<br />";
      echo "_ EL codigo del ERROR es: " . $e->getCode() . "<br />";
      echo '_ERROR: ==>  en la linea : ' . $e->getLine() . "<br />";
   } finally {
      $registro->closeCursor();
   }


   ?>


</body>

</html>
