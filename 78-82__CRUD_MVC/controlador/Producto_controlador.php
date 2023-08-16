<?php

require_once("../modelo/Producto_modelo.php");


$productos = new Productos_modelo();


// ===COMPROBACIONES===
print "<pre>\n";
echo "<br />";
print_r($productos);
// ===FIN COMPROBACIONES

$matrizProducto = $productos->getProductos();
// ===COMPROBACIONES===
print "<pre>\n";
echo "<br />";
print_r($matrizProducto);
// ===FIN COMPROBACIONES

//require_once("../vista/Pruducto_vista.php");
