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
print_r('$_SESSION["usuario"]=== '.$_SESSION["usuario"] );
echo "<br />";
print_r('$_SESSION["clave"]=== '.$_SESSION["clave"] );
print "<pre>";
// ===FIN COMPROBACIONES===


if (!isset($_SESSION["clave"]) && !isset($_SESSION["usuario"])){

   header("Location: 60__Sistema_de_login_II_sesiones_formulario.php");
}


 ?>
<body>
   <h1>Bienvenidos  <?php echo $_SESSION["usuario"]." Feliz Inicio"  ?> </h1>
   <p>Esto solo para usuarios registrados</p>



</form>

</body>

</html>
