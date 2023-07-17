<?php

/* 
EJERCICIO
Crea el código PHP de dos archivos que den respuesta al siguiente planteamiento:
Queremos almacenar en una matriz el número de alumnos con el que cuenta una academia, ordenados
en función del nivel y del idioma que se estudia. Tendremos 3 niveles: Nivel básico, medio y de
perfeccionamiento, que se corresponden con las filas de la matriz, y 4 idiomas (Inglés, Francés, Alemán
y Ruso), que se corresponden con las columnas de la matriz. Se pide realizar la declaración de la matriz
y asignarle los valores indicados en la siguiente imagen cumpliendo con:
Con una sintaxis ejemplo de uso de arrays asociativos donde tanto el primer índice del array (niveles) como el segundo (idiomas) sea un texto indicativo. Se debe mostrar por pantalla los alumnos que existen en cada nivel e idioma. Ejemplo: numeroAlumnos['basico']['frances'] representará el número de alumnos que existen en el nivel básico, idioma francés.
Nota: en ambos casos debe mostrarse por pantalla que el número de alumnos en el nivel básico, idioma inglés, hay 1 alumno; en el nivel básico, idioma francés, hay 14 alumnos, etc
*/




//!   Con una sintaxis ejemplo de uso de arrays asociativos donde tanto el primer índice del array (niveles) como el segundo (idiomas) sea un texto indicativo. Se debe mostrar por pantalla los alumnos que existen en cada nivel e idioma. Ejemplo: numeroAlumnos['basico']['frances'] representará el número de alumnos que existen en el nivel básico, idioma francés.Nota: en ambos casos debe mostrarse por pantalla que el número de alumnos en el nivel básico, idioma inglés, hay 1 alumno; en el nivel básico, idioma francés, hay 14 alumnos, etc

/* El código está creando una matriz asociativa multidimensional llamada `cursos` que almacena la
cantidad de estudiantes en una academia según su nivel e idioma de estudio. Los niveles son
"Basico", "Medio" y "profecional", y los idiomas son "Ingles", "Frances", "Aleman" y "ruso". Los
valores de la matriz representan el número de estudiantes en cada nivel y combinación de idiomas. */

$cursos = array(


   "Basico" => array(
      "Ingles" => 1,
      "Frances" => 14,
      "Aleman" => 8,
      "ruso" => 3

   ),

   "Medio" => array(
      "Ingles" => 6,
      "Frances" => 19,
      "Aleman" => 7,
      "ruso" => 2
   ),


   "profecional" => array(
      "Ingles" => 3,
      "Frances" => 13,
      "Aleman" => 4,
      "ruso" => 1
   )


);




echo " Curso Basico :";
echo "<br />";


//!  echo "Ingles : " . $cursos[0]["Ingles"] . " Alumno  <br /> ";

/* El código está imprimiendo el número de estudiantes en cada nivel y combinación de idiomas en una academia, utilizando una matriz multidimensional asociativa llamada `cursos`. Está accediendo a los valores en la matriz utilizando los nombres de nivel e idioma como claves, e imprimiéndolos con espacios y saltos de línea HTML. El resultado muestra el número de estudiantes en cada nivel y
combinación de idiomas. */
echo "Ingles : " . $cursos["Basico"]["Ingles"] . " Alumno  <br /> "; 
echo "Frances : " . $cursos["Basico"]["Frances"] . " Alumnos <br /> ";
echo "Aleman : " . $cursos["Basico"]["Aleman"] . " Alumnos <br /> ";
echo "Ruso : " . $cursos["Basico"]["ruso"] . " Alumnos <br /> <br /><br />";




echo " Curso Medio :";
echo "<br />";
echo "Ingles : " . $cursos["Medio"]["Ingles"] . " Alumno  <br /> ";
echo "Frances : " . $cursos["Medio"]["Frances"] . " Alumnos <br /> ";
echo "Aleman : " . $cursos["Medio"]["Aleman"] . " Alumnos <br /> ";
echo "Ruso : " . $cursos["Medio"]["ruso"] . " Alumnos <br /><br /><br /> ";



echo " Curso profecional :";
echo "<br />";
echo "Ingles : " . $cursos["profecional"]["Ingles"] . " Alumno  <br /> ";
echo "Frances : " . $cursos["profecional"]["Frances"] . " Alumnos <br /> ";
echo "Aleman : " . $cursos["profecional"]["Aleman"] . " Alumnos <br /> ";
echo "Ruso : " . $cursos["profecional"]["ruso"] . " Alumnos <br /><br /><br /> ";

 echo var_dump($cursos) . "<br />";


/* 
echo var_dump($cursos) == array(3) { ["Basico"]=> array(4) { ["Ingles"]=> int(1) ["Frances"]=> int(14) ["Aleman"]=> int(8) ["ruso"]=> int(3) } ["Medio"]=> array(4) { ["Ingles"]=> int(6) ["Frances"]=> int(19) ["Aleman"]=> int(7) ["ruso"]=> int(2) } ["profecional"]=> array(4) { ["Ingles"]=> int(3) ["Frances"]=> int(13) ["Aleman"]=> int(4) ["ruso"]=> int(1) } }

 */
?>
