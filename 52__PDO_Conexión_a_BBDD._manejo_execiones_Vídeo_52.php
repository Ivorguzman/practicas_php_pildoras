<?php

// Manejo de la exepción si falla la conexcion;

/* El código intenta establecer una conexión a una base de datos MySQL utilizando PDO y las
credenciales proporcionadas. Luego verifica si la conexión fue exitosa e imprime información sobre
la conexión. Si se detecta una excepción durante el intento de conexión, se imprimirá un mensaje de
error con detalles sobre la excepción. Finalmente, el código establece el objeto PDO en nulo para
cerrar la conexión. */
try {
    $base = new PDO('mysql:host=localhost; dbname=productos', 'root', ''); // conectar a base de datos
    echo ("Conexcion establecida");

    // ===COMPROBACIONES===
    print "<pre>\n";
    print_r($base);
    echo "<br />";
    print "<pre>";
    // ===FIN COMPROBACIONES===
    
} catch (Exception $e) {
    // echo "ERROR ==> : El código de excepción es: " . $e->getCode() . "<br />";
    echo " ERROR: El código de excepción es: " . $e->getMessage() . "<br />";
    echo "En el archivo: " . $e->getFile() . "<br />";
    echo "En la linea : " . $e->getLine() . "<br />";

} finally {
    $base = null;
}



?>
