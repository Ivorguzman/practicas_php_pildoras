<?php
/* 
EJERCICIO
Crea el código PHP de dos archivos que den respuesta al siguiente planteamiento:
Queremos almacenar en una matriz el número de alumnos con el que cuenta una academia, ordenados
en función del nivel y del idioma que se estudia. Tendremos 3 niveles: Nivel básico, medio y de
perfeccionamiento, que se corresponden con las filas de la matriz, y 4 idiomas (Inglés, Francés, Alemán
y Ruso), que se corresponden con las columnas de la matriz. Se pide realizar la declaración de la matriz
y asignarle los valores indicados en la siguiente imagen cumpliendo con:

//! Con una sintaxis ejemplo de uso de arrays asociativos donde el primer índice del array (niveles) es unnúmero y el segundo un texto indicativo del idioma. Se debe mostrar por pantalla los alumnos queexisten en cada nivel e idioma. Ejemplo: numeroAlumnos[0]['frances'] representará el número de alumnos que existen en el nivel básico, idioma francés.
*/

$cursos = array(

   array( // ==> Ojo no le coloque nombre al array por  solo referirme a los  indices en este nivel  ; ¿ conveniente ?
      "Ingles" => 1,
      "Frances" => 14,
      "Aleman" => 8,
      "ruso" => 3
   ),

   $medio = array(
      "Ingles" => 6,
      "Frances" => 19,
      "Aleman" => 7,
      "ruso" => 2
   ),

   $profecional = array(
      "Ingles" => 3,
      "Frances" => 13,
      "Aleman" => 4,
      "ruso" => 1
   )

);
echo " Curso Basico :";
echo "<br />";

echo "Ingles : " . $cursos[0]["Ingles"] . " Alumno  <br /> ";
echo "Frances : " . $cursos[0]["Frances"] . " Alumnos <br /> ";
echo "Aleman : " . $cursos[0]["Aleman"] . " Alumnos <br /> ";
echo "Ruso : " . $cursos[0]["ruso"] . " Alumnos <br /> <br /><br />";


echo " Curso Medio :";
echo "<br />";

echo "Ingles : " . $cursos[1]["Ingles"] . " Alumno  <br /> ";
echo "Frances : " . $cursos[1]["Frances"] . " Alumnos <br /> ";
echo "Aleman : " . $cursos[1]["Aleman"] . " Alumnos <br /> ";
echo "Ruso : " . $cursos[1]["ruso"] . " Alumnos <br /> <br /><br />";


echo " Curso Medio :";
echo "<br />";

echo "Ingles : " . $cursos[2]["Ingles"] . " Alumno  <br /> ";
echo "Frances : " . $cursos[2]["Frances"] . " Alumnos <br /> ";
echo "Aleman : " . $cursos[2]["Aleman"] . " Alumnos <br /> ";
echo "Ruso : " . $cursos[2]["ruso"] . " Alumnos <br /> <br /><br />";

 
?>
