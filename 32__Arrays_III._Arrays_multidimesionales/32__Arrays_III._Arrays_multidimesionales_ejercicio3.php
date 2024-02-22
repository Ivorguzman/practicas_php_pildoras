<?php

/* 
EJERCICIO 3
Crea el código PHP de 3 archivos que den respuesta al siguiente planteamiento:
Queremos almacenar en una matriz el número de alumnos con el que cuenta una academia, ordenados en función del nivel y del idioma que se estudia. Tendremos 3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4 columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3 = Ruso). Se pide realizar la declaración de la matriz y asignarle los valores indicados en la siguiente imagen a cada elemento de las siguientes maneras (crea un archivo php por cada una de estas maneras):
c) Con una sintaxis que combine el uso de array y el uso de índices, y mostrar por pantalla los alumnos que existen en cada nivel e idioma.
Nota: por ejemplo, debe mostrarse por pantalla que el número de alumnos en el nivel básico, idioma inglés, hay 1 alumno; en el nivel básico, idioma francés, hay 14 alumnos, etc.
*/



//! c) Con una sintaxis que combine el uso de array y el uso de índices, y mostrar por pantalla los alumnos que existen en cada nivel e idioma.
print"<pre>";
$curso = 
array(

   $basico = array(
      //Dimensión [0][…][…]
      ["Ingles", 1],
      ["Frances", 14],
      ["Aleman", 8],
      ["Ruso", 3],
   ),



   $medio = array(
      //Dimensión [1][…][…]
      array("ingles", 6),
      array("frances", 19),
      array("aleman", 7),
      array("ruso", 2),

   ),


);

print_r($curso);



$profecional[0] = array("Ingles", 3);
$profecional[1] = array("Frances", 13);
$profecional[2] = array("Aleman", 4);
$profecional[3] = array("Ruso", 1);

print_r($profecional);



print"</pre>";



echo " Cursos Basicos : <br />";
echo $curso[0][0][0] . " :  ";
echo $curso[0][0][1] . " Alumno:" . "<br />";

echo $curso[0][1][0] . " : ";
echo $curso[0][1][1] . " Alumnos:" . "<br />";


echo $curso[0][2][0] . " : ";
echo $curso[0][2][1] . " Alumnos:" . "<br />";

echo $curso[0][3][0] . " : ";
echo $curso[0][3][1] . " Alumnos:" . "<br />";



echo "<br />";
echo " Cursos Medio : <br />";
echo $curso[1][0][0] = "Ingles" . " :  ";
echo $curso[1][0][1] = 6 . " Alumno:" . "<br />";

echo $curso[1][1][0] = "Frances" . " : ";
echo $curso[1][1][1] = 19 . " Alumnos:" . "<br />";

echo $curso[1][2][0] = "Aleman" . " : ";
echo $curso[1][2][1] = 7 . " Alumnos:" . "<br />";

echo $curso[1][3][0] = "Ruso" . " : ";
echo $curso[1][3][1] = 2 . " Alumnos:" . "<br />";



echo "<br />";
echo " Cursos Profesional : <br />";

// echo $curso[0][0] . " :  ";
// echo $curso[0][1] . " Alumno:" . "<br />";

echo $profecional[0][0] . " :  ";
echo $profecional[0][1] . " Alumno:" . "<br />";


echo $profecional[1][0] . " : ";
echo $profecional[1][1] . " Alumnos:" . "<br />";


echo $profecional[2][0] . " : ";
echo $profecional[2][1] . " Alumnos:" . "<br />";

echo $profecional[3][0] . " : ";
echo $profecional[3][1] . " Alumnos:" . "<br />";




?>
