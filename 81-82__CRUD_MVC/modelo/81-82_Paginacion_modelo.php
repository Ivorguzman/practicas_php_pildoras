<?php


require_once("81-82_Conectar_modelo.php");
$conexion_pdo = Conectar::conexion();



//todo **************** INICIO Paginacion ***************
$pagina = 1; // Mostrar pagia donde estamos al cargar por primera vez la Pagia web
$tamhnoPagina = 4; //  registros  por Pagina

if (isset($_GET["pagina"])) {

   if ($_GET['pagina'] == 1) {
      header("Location:77__index.php");
   } else {
      $pagina = $_GET["pagina"];
   }
} else {
   $pagina = 1;
}
$empezarDesDe = ($pagina - 1) * $tamhnoPagina;

$sql = ("SELECT  * FROM  datos_usuarios ");

// todo  ************  CREAR OBJETO STATEMENT (jenera el Resulset)  con consulta $sql ***************
$registro = $conexion_pdo->prepare($sql);
$registro->execute(array());
$numeroFila = $registro->rowCount();

//! ___________________________________ calculando el número total de Registros ________________________________
$totalPaginas = ceil($numeroFila / $tamhnoPagina);
  //! ___________________________________ calculando el número total de Registros ________________________________

  //todo **************** FIN Paginacion ***************
