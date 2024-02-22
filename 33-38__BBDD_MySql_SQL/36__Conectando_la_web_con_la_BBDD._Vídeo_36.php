<?php
// DATOS DE CONECCION ALAMACENADOS
$db_host = "localhost"; // ubicscion de la bade de datosw (local)
$db_usuario = "root"; // Usuario de la base de datos;
$db_clave = ""; // Contraseña de la base de datos
$db_nombre = "productos"; // nombre de la base de datos


// MODO PROCEDIMENTAL
$conexion = mysqli_connect($db_host, $db_usuario, $db_clave, $db_nombre); // creando la conexion y almacenandola en $conexion

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . "<br />";
    echo "Erro de depuración: " . mysqli_connect_errno() . " <br />";
    printf("Coneccion fallida: %s\n", mysqli_connect_error());
    exit;
}

echo "Conección éxitosa: MySQL " . PHP_EOL . "<br />";
echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL; // mysqli_get_host_info()==> Devuelve una cadena que representa el tipo de conexión usada. Devuelve una cadena que describiendo la conexión representada por el parámetro link (incluyendo el nombre del servidor anfitrión).


$query = "SELECT * FROM productos"; // ALAMACENADO LA CONSULATA MYSQL

$resultado = mysqli_query($conexion, $query); // Realiza una consulta a la base de datos, almacenando la consulta sql en forma de resulset (Tabla virtual en memoria con toda la informaion de la conslta) 

$fila = mysqli_fetch_row($resultado); // Aray que Devuelve un array numérico que corresponde a la fila recuperada y mueve el puntero de datos interno hacia delante
echo $fila[0] . "<br/> ";
echo $fila[1] . " <br/>";
echo $fila[2] . " <br />";
echo $fila[3] . "<br /> ";
echo $fila[4] . " <br /> <br /><br />";


$fila = mysqli_fetch_row($resultado);
echo $fila[0] . "<br/> ";
echo $fila[1] . " <br/>";
echo $fila[2] . " <br />";
echo $fila[3] . "<br /> ";
echo $fila[4] . " <br /><br /><br />";


$fila = mysqli_fetch_row($resultado);
echo $fila[0] . "<br/> ";
echo $fila[1] . " <br/>";
echo $fila[2] . " <br />";
echo $fila[3] . "<br /> ";
echo $fila[4] . " <br />";
?>
