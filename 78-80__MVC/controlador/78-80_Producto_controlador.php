<?php

// ? Llamada al modelo  (DATA ALISIS DE LA APLICACION)
 // ! (../) -> Raiz del proyecto
/* La línea `require_once("../modelo/78-82_Producto_modelo.php");` incluye el archivo
"78-82_Producto_modelo.php" del directorio "modelo". Es probable que este archivo contenga la
definición de la clase `Productos_modelo`, que se utiliza para interactuar con los datos
relacionados con los productos en la aplicación. Al incluir este archivo, el código puede acceder a
los métodos y propiedades definidos en la clase `Productos_modelo`. */
require_once("modelo/78-80_Producto_modelo.php");



/* La línea ` = new Productos_modelo();` está creando una nueva instancia de la clase
`Productos_modelo`. Esto le permite acceder a los métodos y propiedades definidos en esa clase. */
$productos = new Productos_modelo();




/* La línea ` = ->getProductos();` está llamando al método `getProductos()`
en el objeto ``. Este método está definido en la clase `Productos_modelo` y es responsable
de recuperar los datos de los productos de la base de datos o cualquier otra fuente de datos. Luego,
el valor devuelto se asigna a la variable `$matrizProductos `, que puede usarse para mostrar o
manipular los datos de los productos en la vista. */
$matrizProductos = $productos->getProductos();




// ?  Llamada a  la vista (FRONTEND DE LA APLICACIÓN)
//! DEMANDA LOS DATOS A LA CAPA  MODELO
// ! (../) -> Raiz del proyecto
/* La línea `require_once("../vista/78-82_Pruducto_vista.php");` incluye el archivo
"78-82_Pruducto_vista.php" del directorio "vista". Es probable que este archivo sea el archivo de
visualización responsable de mostrar los datos al usuario. Al incluir este archivo, el código puede
acceder al código HTML y PHP en el archivo de vista y mostrárselo al usuario. */
require_once("vista/78-80_Pruducto_vista.php");








