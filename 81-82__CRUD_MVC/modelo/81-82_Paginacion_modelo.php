<?php
require_once("81-82_Conectar_modelo.php");
$conexion_pdo = Conectar::conexion();


//todo **************** INICIO Paginacion ***************
/* La línea ` = 1;` está inicializando la variable `$pagina` con un valor de 1. Esta variable se
utiliza para realizar un seguimiento del número de página actual en el sistema de paginación. Al
configurarlo en 1, se garantiza que la página inicial mostrada sea la primera página. */
$pagina = 1;


/* La variable `$registrosPorPagina` se utiliza para determinar la cantidad de registros que se mostrarán por
página en la función de paginación. En este caso, se establece en 3, lo que significa que se
mostrarán 3 registros en cada página. */
$registrosPorPagina = 4; 


/* Este bloque de código verifica si el parámetro "pagina" está configurado en la URL usando el
superglobal . Si está configurado, verifica si el valor es igual a 1. Si es así, redirige al
usuario a la página "81_82_index.php". Si el valor no es igual a 1 asigna el valor del parámetro
"pagina" a la variable . Si el parámetro "pagina" no está configurado en la URL, asigna un
valor predeterminado de 1 a la variable . */
if (isset($_GET["pagina"])) {

   if ($_GET['pagina'] == 1) {
      header("Location:81_82_index.php");
   } else {
      $pagina = $_GET["pagina"];
   }
} else {
   $pagina = 1;
}
/* La línea ` = ( - 1) * ;` está calculando el índice inicial de los registros que se recuperarán de la base de datos. */
$empezarDesDe = ($pagina - 1) * $registrosPorPagina;

$sql = ("SELECT  * FROM  datos_usuarios");

// todo  * CREAR OBJETO STATEMENT (jenera el Resulset)con consulta $sql *
$resultSetRegistro = $conexion_pdo->prepare($sql);
$resultSetRegistro->execute(array());


/* La línea ` = ->rowCount();` está contando el número de filas devueltas por la
consulta SQL ejecutada por el objeto  `$registro`. Devuelve el número total de filas del conjunto de resultados. */
$numeroFila_BBDD = $resultSetRegistro->rowCount();

//! ___________________________________ calculando el número total de Registros ________________________________


/* La variable `$totalPaginas` está calculando el número total de páginas necesarias para lapaginación. Se calcula dividiendo el número total de filas en la tabla de la base de datos por el
número de filas que se mostrarán por página (""). La función `ceil($numeroFila / $registrosPorPagina)` se utiliza para redondear el resultado al número entero más cercano. */
$totalRegistrosPaginas = ceil($numeroFila_BBDD / $registrosPorPagina);
  //! ___________________________________ calculando el número total de Registros ________________________________

  //todo **************** FIN Paginacion ***************
