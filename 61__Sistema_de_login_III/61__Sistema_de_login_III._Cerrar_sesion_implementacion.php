<?php
try {
   $conexion_pdo = new PDO('mysql:host=localhost; dbname=productos', 'root', '');
   $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // verificando existencia de usuario
   echo ("*****Conexcion establecida*****" . "<br /><br />");

   // Comprobando existencia de usuario en base de datos con marcadores( :usuario :clave )
   $query_sql = "SELECT * FROM usuarios_pass WHERE usuarios = :usuario AND clave = :clave";

   // Creando consultas preparadas con marcadores ( :usuario :clave )
   $obj_pdo_stmt = $conexion_pdo->prepare($query_sql);

   // rescatar login y password del  formulario
   $clave = htmlentities(addslashes($_POST["campo_clave"]));
   $usuario = htmlentities(addslashes($_POST["campo_usuario"]));
   // htmlentities(....) Combierte cual quier simbolo en HTML
   // addslashes(....) Escapa cualquier caracter estraño evista inyecciones  (; "" . y)
   // $_POST["...."] rescata lo que el usuario introdujo en el formulario

   // ===COMPROBACIONES===
   print "<pre>\n";
   print_r($clave . "<br />");
   echo "<br />";
   print "<pre>";
   // ===FIN COMPROBACIONES===


   // bindValue(....) asocia el maracador con lo almacenado un una variable (":usuario", $usuario)
   $obj_pdo_stmt->bindValue(":usuario", $usuario);
   $obj_pdo_stmt->bindValue(":clave", $clave);



   $obj_pdo_stmt->execute();


   // rowCount() numero de registro que debuelve un consulta (si usario no existe debuelve 0 filas )
   $existeRegistro = $obj_pdo_stmt->rowCount();



   if ($existeRegistro) {

      // ===COMPROBACIONES===
      print "<pre>\n";
      print_r('$existeRegistro ==>' . $existeRegistro . "<br />");
      echo "<br />";
      print "<pre>";
      // ===FIN COMPROBACIONES===


      // verificar si existe el usuario en base de datos
      session_start(); // si el usuari exiete crea una secion

      $_SESSION["usuario"] = $_POST["campo_usuario"]; // almacenamos login del usuario de la secion

      $_SESSION["clave"] = $_POST["campo_clave"]; // almacenamos login del usuario de la secion

      // Location:.....: Redirija al la pagina que se le indique
      header("Location: 61__Sistema_de_login_III._Cerrar_sesion_usuarioRegistrado1.php");

   } else {

      header("Location: 61__Sistema_de_login_III._Cerrar_sesion_formulario.php"); // redirigir usuario a la pagina espesificada
   }


} catch (Exception $e) {
   echo " ERROR ==> : El código de excepción es: " . $e->getMessage() . "<br / >";
   // echo "Código de excepción : " . $e->getCode(). "<br / >";
   echo "En el archivo ==> : " . $e->getFile() . "<br />";
   echo "En la linea  ==> : " . $e->getLine() . "<br />";
   exit("Código de excepción : " . $e->getCode());

} finally {
   $conexion = null;
}



?>
