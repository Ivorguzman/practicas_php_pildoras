<?php



// Motrar todos los errores de PHP
//error_reporting(-1);

// No mostrar los errores de PHP
//error_reporting(0);

// Motrar todos los errores de PHP
// error_reporting(E_ALL);

// Motrar todos los errores de PHP
// ini_set('error_reporting', E_ALL);


 // // CONECCION A ddbb CON OOP METOD 1 (API mysqli)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php

require("00_conexion_a_base_de_datos.php");

$conexion = new mysqli($db_host, $db_usuario, $db_clave, $db_nombre); // creando la conexion ==>  $conexion = new mysqli("localhost", "root", "", "pruebas");

if (!$conexion->connect_error) {
    print "<pre>\n";
    print_r("resultado de la conexion ==> " . $conexion->connect_errno);
    "</pre>";
    echo "<br />";

    echo "Sin error en la consulta." . "<br />";
    echo "Conección éxitosa a Base de datos ==>" . PHP_EOL;
    echo "Información del host: " . $conexion->host_info . PHP_EOL; // Informacion delHost y protocolo de la conexción
} else {
    exit("Error en la consulta: ");

}

echo "<br /><br /><br />";

$conexion->set_charset("utf8"); // habilitando caracteres especiales (Ñ,etc)

$consulta = " SELECT * FROM productos"; // almacenando la sentencia SQL

$resultado = $conexion->query($consulta); // Realizando la consulta y almacenandola en una variable

/* Este bloque de código verifica si hubo un error en la conexión a la base de datos al verificar la
propiedad `errno` del objeto ``. Si hubo un error, imprimirá un mensaje de error y saldrá
del script usando la función `exit()`. */
if ($conexion->errno) {
    echo "fallo de conexcion  $conexion->connect_errno";
    exit();
}
;

// // IMPRESION DE LOS RESULTADOA LA FUNCION PRINT (PRINT SIN FORMATO)
/* while ($fila = $resultado->fetch_array(MYSQLI_BOTH)) {
    print "\n";
    print "<table  width='90%' align='center' border=1>";
    print "<tr>";
    print "<td align='center'> $fila[CODIGOARTICULO] </td>"; // ojo NO SE NECECITO LA COMILLA EN EL VALOR DEL ARRAY
    print "<td align='center'> $fila[1] </td>";
    print "<td align='center'> $fila[2] </td>";
    print "<td align='center'> $fila[3] </td>";
    print "<td align='center'> $fila[4] </td>";
    print "<td align='center'> $fila[5] </td>";
    print "<td align='center'> $fila[PAISDEORIGEN] </td>";
    print "</tr>";
    print "</table>";

} */
;

// // IMPRESION DE LOS RESULTADOA LA FUNCION PRINTF (PRINT CON FORMATO)
while ($fila = $resultado->fetch_array(MYSQLI_BOTH)) {
    printf(
        "|%s - %s - %s - %s - %s|\n" . "<br />",
        $fila["CODIGOARTICULO"],
        $fila[1],
        $fila[2],
        $fila[2],
        $fila[3],
        $fila[5],
        $fila["PAISDEORIGEN"],
    );
}
;

// // IMPRESION DE LOS RESULTADOA CON ECHO Y UNA TABLA
/* while ($fila = $resultado->fetch_array(MYSQLI_BOTH)) {
    echo "<table  width='90%' align='center' border=1>";
    echo "<tr>";
    echo "<td align='center'> $fila[CODIGOARTICULO] </td>"; // ojo NO SE NECECITO LA COMILLA EN EL VALOR DEL ARRAY
    echo "<td align='center'> $fila[1] </td>";
    echo "<td align='center'> $fila[2] </td>";
    echo "<td align='center'> $fila[3] </td>";
    echo "<td align='center'> $fila[4] </td>";
    echo "<td align='center'> $fila[5] </td>";
    echo "<td align='center'> $fila[PAISDEORIGEN] </td>";
    echo "</tr>";
   echo "</table>";
    echo "<br />";


} */








// // CONECCION A ddbb CON OOP (Clase) METODO 2 

// class Database {
// 	public static $db;
// 	public static $con;

// 	function Database(){
// 		$this->user="root";$this->pass=" ";$this->host="localhost";$this->ddbb="bookmedik";
// 	}
// 
// 	function connect(){
// 		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
// 		$con->query("set sql_mode=' '");
// 		return $con;
// 	}
// 
// 	public static function getCon(){
// 		if(self::$con==null && self::$db==null){
// 			self::$db = new Database();
// 			self::$con = self::$db->connect();
// 		}
// 		return self::$con;
// 	}
// 	
// } 
?>