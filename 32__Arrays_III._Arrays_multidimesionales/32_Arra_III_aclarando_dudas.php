<?php



//! Cómo recorrer una matriz multidimensional usando foreach 

$usuarios = [
   [
      "id" => 1,
      "nombre" => "Nathan",
      "edad" => 29,
   ],
   [
      "id" => 2,
      "nombre" => "Susan",
      "edad" => 32,
   ],
   [
      "id" => 3,
      "nombre" => "Jane",
      "edad" => 23,
   ],
];

/* Este código usa un bucle foreach para iterar sobre una matriz multidimensional llamada ``.
El bucle primero asigna el subarreglo actual a la variable `` y su índice a la variable
``. Luego imprime el índice del subarreglo. */
foreach ($usuarios as $indice => $usuario) {
   // print the array index
   print "==== INDICE ========== > {$indice}";
   print PHP_EOL; // breaking space
   foreach ($usuario as $clave => $valor) {
      print"<br />";
      print "{$clave} : {$valor}" ;
      echo "<br />";// print key and value
      print PHP_EOL;
   }
}


/*

//? EJEMPLO DE ESTUDIO A

$rows = array(


   array(
      'nombre' => 'Antonio', 'apellidos' => 'Gómez Gómez', 'telefono' => '675832145'
   ),

   array(
      'nombre' => 'Pedro', 'apellidos' => 'Guillén Gastón', 'telefono' => '674562178'
   ),

   array(
      'nombre' => 'Dolores', 'apellidos' => 'Candela Quema', 'telefono' => '689765432'
   ),

   array(
      'nombre' => 'Rubén', 'apellidos' => 'Guardia Jurado', 'telefono' => '654213896'
   ),


);
print "<pre>";
print_r(var_dump($rows));
//  print_r($rows);
echo"+++++++++++++++++++++++++++++++++++++++++++";
echo "<br /><br />";
foreach ($rows as $key => $valor) {
   echo "Indice: " . $key . ' ==>  Nombre: ' . $valor['nombre'] . '<br />';
   echo "Indice: " . $key . ' ==>  Apellido: ' . $valor['apellidos'] . '<br />';
   echo "Indice: " . $key . ' ==>  Telefono: ' . $valor['telefono'] . '<br /><br />';
};
print "</pre>";



echo "************************************************"."<br />";
echo "*************** EJEMPLO DE ESTUDIO B *************"."<br />";
echo "************************************************";
echo "<br /> <br />";




//? EJEMPLO DE ESTUDIO B
$datosArray[0]['nombre'] = 'Antonio';
$datosArray[0]['apellidos'] = 'Gómez Gómez';
$datosArray[0]['telefono'] = '675832145';
$datosArray[1]['nombre'] = 'Pedro';
$datosArray[1]['apellidos'] = 'Guillén Gastón';
$datosArray[1]['telefono'] = '674562178';
$datosArray[2]['nombre'] = 'Dolores';
$datosArray[2]['apellidos'] = 'Candela Quema';
$datosArray[2]['telefono'] = '689765432';


print "<pre>";
print_r(var_dump($rows));
// print_r($datosArray);
echo "+++++++++++++++++++++++++++++++++++++++++++";
echo "<br /><br />";

foreach ($datosArray as $key => $valor) {
   echo "Indice: " . $key . ' ==>  Nombre: ' . $valor['nombre'] . '<br />';
   echo "Indice: " . $key . ' ==>  Apellido: ' . $valor['apellidos'] . '<br />';
   echo "Indice: " . $key . ' ==>  Telefono: ' . $valor['telefono'] . '<br /><br />';
};
print "</pre>";
*/


?>