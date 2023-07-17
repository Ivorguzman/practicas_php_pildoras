<?php

include("29__Programación_Orientada_a_Objetos_POO_VIII_.Variables_y_métodos_estáticos_II_vehiculo.php");

Compra_vehiculo::subsidioGobierno();

$compra_antonio = new Compra_vehiculo("compacto");
$compra_antonio->climatizador();
$compra_antonio->tapiceria_de_cuero("blanco");

// echo $compra_antonio->precio_final();
echo "Tapiceria de cuero blanco Sr. Antonio <br />";
echo "Extra añadido climatizador Sr. Antonio <br />";
// echo "Subsido gubernamental: ".Compra_vehiculo::$ayuda."<br />";
echo "Total importe de factura Sr. Antonio => ". $compra_antonio->precio_final()."<br />";
echo "============================================ <br />";


$compra_ana = new Compra_vehiculo("compacto");
$compra_ana->climatizador();
// $compra_ana->navegador_gps();
$compra_ana->tapiceria_de_cuero("roja");


echo "Tapiceria de cuero roja Sra. Ana <br />";
echo "Extra añadido navegador gps Sra. Ana <br />";
echo "Total importe de factura Sra. Ana => " . $compra_ana->precio_final() . "<br />";

?>