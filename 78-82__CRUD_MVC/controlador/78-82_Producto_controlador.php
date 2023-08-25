<?php

// ? Llamada al modelo  (DATA ALISIS DE LA APLICACION)
 // ! (../) -> Raiz del proyecto
require_once("../modelo/78-82_Producto_modelo.php");



/* La línea ` = new Productos_modelo();` está creando una nueva instancia de la clase
`Productos_modelo`. Esto le permite acceder a los métodos y propiedades definidos en esa clase. */
$productos = new Productos_modelo();


/* La línea ` = ->getProductos();` está llamando al método `getProductos()`
en el objeto ``. Este método está definido en la clase `Productos_modelo` y es responsable
de recuperar los datos de los productos de la base de datos o cualquier otra fuente de datos. Luego,
el valor devuelto se asigna a la variable `$matrizProductos `, que puede usarse para mostrar o
manipular los datos de los productos en la vista. */
$matrizProductos = $productos->getProductos();


// // ===COMPROBACIONES===
// print "<pre>\n";
// print_r('LLAMADO AL MODELO  de: (78-82_Producto_controlador.php) --> require_once("../modelo/78-82_Producto_modelo.php")');
// print_r('$matrizProductos');
// print_r("$matrizProductos");
// echo "<br />";
// print "<pre>";
// // ===FIN COMPROBACIONES===




// ?  Llamada a  la vista (FRONTEND DE LA APLICACIÓN)
//! DEMANDA LOS DATOS A LA CAPA  MODELO
// ! (../) -> Raiz del proyecto
require_once("../vista/78-82_Pruducto_vista.php");



// // ===COMPROBACIONES===
// print "<pre>\n";
// print_r('LLAMADO ALA VISTA  de: (78-82_Producto_controlador.php) --> require_once("../vista/78-82_Pruducto_vista.php")');
// print_r('$matrizProductos');

// echo "<br />";
// print "<pre>";
//     // ===FIN COMPROBACIONES===







