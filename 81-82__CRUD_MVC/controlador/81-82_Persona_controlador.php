<?php

// ? Llamada al modelo DATA ALISIS (BACKEND DE LA APLICACION)
//****************** DEMANDA LOS DATOS A LA CAPA (archivo) MODELO ************************
/* La línea `require_once("modelo/81-82_Persona_modelo.php");` incluye el archivo
"81-82_Persona_modelo.php" del directorio "modelo". Es probable que este archivo sea el archivo
modelo responsable de obtener los datos de la fuente de datos. Al incluir este archivo, el código
puede acceder a los métodos y propiedades definidos en la clase de modelo y recuperar la lista de
personas de la fuente de datos. */
require_once("modelo/81-82_Persona_modelo.php");




/* La línea `= new Personas_modelo();` está creando una nueva instancia de la clase
`Personas_modelo`. Esto le permite acceder a los métodos y propiedades definidos en esa clase. */
$personas = new Personas_modelo();



/* La línea ` = ->getPersonas();` está llamando al método `getPersonas()` en el
objeto ``. Este método probablemente esté definido en la clase `Personas_modelo` y es
responsable de recuperar una lista de personas (personas) de la fuente de datos. La lista de
personas devuelta se asigna luego a la variable `` para su posterior procesamiento o
visualización en la vista. */
$matrizPersonas = $personas->getPersonas();



// //===COMPROBACIONES===
// print "<pre>\n";
// echo "<br />";
// print_r($matrizPersonas);
// //===FIN COMPROBACIONES
 


// ?  Llamada a  la vista (FRONTEND DE LA APLICACIÓN)
// ! (../) -> Raiz del proyecto
/* La línea `require_once("vista/81-82_Persona_vista.php");` incluye el archivo
"81-82_Persona_vista.php" del directorio "vista". Es probable que este archivo sea el archivo de
vista responsable de mostrar los datos recuperados del modelo. Al incluir este archivo, el código
puede acceder al código HTML y PHP en el archivo de vista y mostrárselo al usuario. */
// ****************** DEMANDA LOS DATOS A LA CAPA (archivo)  VISTA ************************

// todo ***************** Version fetch(PDO FETCH_ASSOC) *************************
/* La línea `require_once("vista/81-82_Persona_vista(fetch(PDO FETCH_ASSOC).php");` incluye el archivo
"81-82_Persona_vista(fetch(PDO FETCH_ASSOC).php" del directorio "vista". Este archivo es
Probablemente el archivo de vista responsable de mostrar los datos recuperados del modelo. Al
incluir este archivo, el código puede acceder al código HTML y PHP en el archivo de vista y
mostrárselo al usuario. */
require_once("vista/81-82_Persona_vista(fetch(PDO FETCH_ASSOC).php");





// todo ***************** Version fetch(PDO FETCH_OBJ) *************************
/* La línea `require_once("vista/81-82_Persona_vista(fetch(PDO FETCH_OBJ).php");` incluye el archivo
"81-82_Persona_vista(fetch(PDO FETCH_OBJ).php" del directorio "vista". Este archivo es Probablemente
el archivo de vista responsable de mostrar los datos recuperados del modelo. Al incluir este
archivo, el código puede acceder al código HTML y PHP en el archivo de vista y mostrárselo al
usuario. */
//require_once("vista/81-82_Persona_vista(fetch(PDO FETCH_OBJ).php");



