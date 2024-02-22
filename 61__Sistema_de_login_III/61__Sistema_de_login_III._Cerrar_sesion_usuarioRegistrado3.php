<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <title>Formulario de Ingreso</title>
   <link rel="stylesheet" href="linkToCSS" />
   <style>
      body {
         background-color: #ffc;
         color: #C04000;
      }

      h1 {
         text-align: center;
         color: #00f;
         border-bottom: dotted #0000ff;
         width: 50%;
         margin: auto;
      }

      table {
         padding: 13px;
         border: 1px solid #f00;
      }

   </style>
</head>


<?php



// crear o reanudar secion  Rescatando de $_SESSION["usuario"] su valor
session_start();


// ===COMPROBACIONES===
print "<pre>\n";

// print_r("session_start() === ".session_start() );
echo "<br />";
print_r('$_SESSION["usuario"]=== ' . $_SESSION["usuario"]);
echo "<br />";
print_r('$_SESSION["clave"]=== ' . $_SESSION["clave"]);
print "<pre>";
// ===FIN COMPROBACIONES===


if (!isset($_SESSION["clave"]) && !isset($_SESSION["usuario"])) {

   header("Location: 61__Sistema_de_login_III._Cerrar_sesion_formulario.php");
}

echo "Usuario : " . $_SESSION["usuario"];
?>




<body>
   <h1>Bienvenidos
      <?php echo $_SESSION["usuario"] . " Feliz Inicio" ?>
   </h1>
   <p><h2>Esto solo para usuarios registrados 3</h2></p><br />

   <a href="61__Sistema_de_login_III._Cerrar_sesion_usuarioRegistrado1.php">Ir a pagina usuarios registrados 1 </a>
   <a href="61__Sistema_de_login_III._Cerrar_sesion_usuarioRegistrado2.php">Ir a pagina usuarios registrados 2</a><br /><br />

   <!-- Cerrando la seción  en la pagina   61.......matarSecion.php-->
   <a href="61__Sistema_de_login_III._Cerrar_sesion_matarSecion.php"> Cerrar sesion</a>


   </form>

</body>

</html>
