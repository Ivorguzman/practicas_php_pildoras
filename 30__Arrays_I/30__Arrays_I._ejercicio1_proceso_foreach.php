<?php

/* 

Desarrollar una aplicación que solicite la carga de 5 números en un formulario HTML y al presionar un botón se
calcule la suma en el servidor.
*/


/* 

 ///! Solucion sin el uso de arrays
$valor_1 = $_POST["valor1"];
$valor_2 = $_POST["valor2"];
$valor_3 = $_POST["valor3"];
$valor_4 = $_POST["valor4"];
$valor_5 = $_POST["valor5"];

if (isset($_POST["enviar"])) {
   echo "valores introducidos por teclado: <br />";
   echo ($valor_1 . "<br />");
   echo ($valor_2 . "<br />");
   echo ($valor_3 . "<br />");
   echo ($valor_4 . "<br />");
   echo ($valor_5 . "<br />");
   echo "total suma de los valores : " . $valor_1 + $valor_2 + $valor_3 + $valor_4 + $valor_5;
}else {
   echo "Problemas en el proceso de sumar";
}
 */

//! Solución con el udo de array

$suma = 0;
//Podemos recorrer el vector asociativo $_REQUEST,  $_POST  ó $_GET mediante un foreach e imprimir tanto la clave como el valor.


// foreach ($_REQUEST as $subIndice => $valor) {
/* Este código usa un bucle `foreach` para iterar sobre la matriz `$_POST`, que contiene los valores enviados a través de un formulario usando el método HTTP POST. Para cada elemento del array, el bucle asigna la clave a la variable `` y el valor a la variable ``.
Luego, hace eco del valor ingresado por el usuario y el nombre del campo de formulario
correspondiente. Finalmente, agrega el valor a la variable ``, que se utiliza para calcular la
suma total de todos los valores ingresados por el usuario. */
foreach ($_POST as $subIndice => $valorCampoFormulario) {
   echo "Valor Igresado por el usuaio : " . $valorCampoFormulario ."  ==>  ";
   echo "Valor name Campo Formulario: " . $subIndice."<br />";
   $suma = $suma + $valorCampoFormulario;
}
echo "Total Suma de los entradas por el usuario :" . $suma;
?>
