<?php

require("57__config.php"); /// requiriendo el archivo de conexion a base de datos.


// Creando la clase de conexion
class Conexion
{
    // // var $conexion_db; // sin proteger
  /* `protegido ón_db; // protegida` está declarando una propiedad protegida llamada
  `` dentro de la clase `Conexion`. La palabra clave `protegido` significa que solo se
  puede acceder a la propiedad dentro de la clase y sus subclases. Esta propiedad se usa para
  almacenar el objeto de conexión a la base de datos creado por el constructor de la clase
  `Conexion`. */
    protected $conexion_db; // protegida
    // CREANDO EL CONSTRUCTO
    function __construct()
    {
        $this->conexion_db = new mysqli(DB_HOST, DB_USUARIOS, DB_CONTRA, DB_NOMBRE);
        // creando condicional del error
        if ($this->conexion_db->connect_error) {

            printf("Falló la conexión: % s\n", $this->conexion_db->connect_error);
            exit();
            // exit("Fallo al conectar con base de datos");
        } else {
            echo " Conexión exitosa a base de datos";

        }
        $this->conexion_db->set_charset(DB_CHARSET);
    }
}


// // ===COMPROBACIONES===
// // $conexion1 = new Conexion;
// print "<pre>\n";
// print_r($conexion1);
// echo "<br />";
// print "<pre>";
// // ===FIN COMPROBACIONES===
// 

?>
