<?php
// Problema propuesto1
// Definir un vector con los nombres de los días de la semana. Luego imprimir el primero y el último elemento del vector.

/// Un Array es una colección de valores. Los array pueden ser unidimensionales (vectores), bidimensionales (matrices) y multidimensionales (más de dos dimensiones).

/// Si necesitamos conocer el tamaño del vector en cualquier momento podemos llamar a la función count().
//! definirlo e inicializarlo simultáneamente:
$diasSemana = array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");
echo ("Dias de la semana : ");
for ($i = 0; $i < count($diasSemana); $i++) {
   echo ($diasSemana[$i] . " , ");
}
echo ("<br /> <br />");

//! Se lo puede crear al vuelo, sin tener que declararlo:

$diasSemana2[0] = "lunes";
$diasSemana2[1] = "martes";
$diasSemana2[2] = "miercoles";
$diasSemana2[3] = "jueves";
$diasSemana2[4] = "viernes";
$diasSemana2[5] = "sabado";
$diasSemana2[6] = "domingo";

$diasSemana2 = array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");
echo ("Dias de la semana : ");
for ($i = 0; $i < count($diasSemana2); $i++) {
   echo ($diasSemana2[$i] . " , ");
}

echo ("<br /> <br />");
//! También podemos obviar el subíndice cuando asignamos los valores. Automáticamente comienza a numerarse desde cero

/* Crear un arreglo llamado `diasSemana3` y agregarle los valores "lunes", "martes", "miercoles",
"jueves", "viernes", "sabado" y "domingo", uno a uno, sin especificar el índice. El índice se asigna automáticamente a partir de 0. */
$diasSemana3[] = "lunes";
$diasSemana3[] = "martes";
$diasSemana3[] = "miercoles";
$diasSemana3[] = "jueves";
$diasSemana3[] = "viernes";
$diasSemana3[] = "sabado";
$diasSemana3[] = "domingo";

/* Creando un arreglo llamado `` e inicializándolo con los valores "lunes", "martes",
"miercoles", "jueves", "viernes", "sabado" y "domingo". */
$diasSemana3 = array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");

/* Imprimiendo los elementos del arreglo `` con una etiqueta "Dias de la semana:" antes de
los elementos y una coma después de cada elemento. El ciclo `for` está iterando a través de la
matriz usando la función `count()` para determinar la longitud de la matriz. */
echo ("Dias de la semana : ");
for ($i = 0; $i < count($diasSemana3); $i++) {
   echo ($diasSemana3[$i] . " , ");
}

  
?>
