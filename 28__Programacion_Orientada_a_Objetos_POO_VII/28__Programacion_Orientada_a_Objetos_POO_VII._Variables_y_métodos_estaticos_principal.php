<?php

include("28__Programacion_Orientada_a_Objetos_POO_VII._Variables_y_metodos_estaticos.php");

/* Modificando la variable estática `$ayuda` de la clase `Compra_vehiculo` para que tenga un valor de 19500. */
Compra_vehiculo::$ayuda = 19500; // modificando un metodo estic de la clase compra

$compra_antonio = new Compra_vehiculo("compacto");

$compra_antonio->climatizador();
$compra_antonio->tapiceria_de_cuero("blanco");

echo "Tapiceria de cuero blanco Sr. Antonio <br />";
echo "Extra añadido climatizador Sr. Antonio <br />";
echo "Total importe de factura Sr. Antonio => ". $compra_antonio->precio_final()."<br />";
echo "============================================ <br />";


$compra_ana = new Compra_vehiculo("compacto");

$compra_ana->climatizador();
$compra_ana->navegador_gps();
$compra_ana->tapiceria_de_cuero("roja");
echo "Tapiceria de cuero roja Sra. Ana <br />";
echo "Extra añadido navegador gps Sra. Ana <br />";
echo "Total importe de factura Sra. Ana => " . $compra_ana->precio_final() . "<br />";


?>
