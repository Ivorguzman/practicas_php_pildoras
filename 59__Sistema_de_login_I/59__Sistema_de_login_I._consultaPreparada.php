<?php
try {
    $conexion_pdo = new PDO('mysql:host=localhost; dbname=productos', 'root', '');
    // $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // verificando existencia de usuario
    echo ("*****Conexcion establecida*****" . "<br /><br />");

    // $query_sql = "SELECT * FROM usuarios_pass";
    $query_sql = "SELECT * FROM usuarios_pass WHERE usuarios = :usuario AND clave = :clave";
    $obj_pdo_stmt = $conexion_pdo->prepare($query_sql);




    $clave = htmlentities(addslashes($_POST["campo_clave"]));
    $usuario = htmlentities(addslashes($_POST["campo_usuario"]));

    $clave = $_POST["campo_clave"];
    $usuario = $_POST["campo_usuario"];

    $obj_pdo_stmt->bindValue(":usuario", $usuario);
    $obj_pdo_stmt->bindValue(":clave", $clave);


    // ===COMPROBACIONES===
    print "<pre>\n";
    print_r($conexion_pdo);
    print_r($query_sql);
    print_r($obj_pdo_stmt);
    print_r($clave . "<br />");
    print_r($usuario . "<br />");
    echo "<br />";
    print "<pre>";
    // ===FIN COMPROBACIONES===


    $obj_pdo_stmt->execute();

    $existeRegistro = $obj_pdo_stmt->rowCount();

    if ($existeRegistro) { // verificar si existe el usuario
        echo "<h1> Usuario existe<h1>   ";
    } else {
        header("location:59__Sistema_de_login_I._formulario.php"); // redirigir usuario a pagina loic
    }

    // ===COMPROBACIONES===
    print "<pre>\n";
    // print_r($numeroRegistro . "<br />");
    echo "<br />";
    print "<pre>";
    // ===FIN COMPROBACIONES===






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