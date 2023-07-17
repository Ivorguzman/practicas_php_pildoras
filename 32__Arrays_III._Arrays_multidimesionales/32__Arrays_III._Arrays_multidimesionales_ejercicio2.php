<?php

/* 
EJERCICIO 2
Crea el código PHP de 3 archivos que den respuesta al siguiente planteamiento:
Queremos almacenar en una matriz el número de alumnos con el que cuenta una academia, ordenados en función del nivel y del idioma que se estudia. Tendremos 3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4 columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3 = Ruso). Se pide realizar la declaración de la matriz y asignarle los valores indicados en la siguiente imagen a cada elemento de las siguientes maneras (crea un archivo php por cada una de estas maneras):
c) Con una sintaxis que combine el uso de array y el uso de índices, y mostrar por pantalla los alumnos que existen en cada nivel e idioma.
Nota: por ejemplo, debe mostrarse por pantalla que el número de alumnos en el nivel básico, idioma inglés, hay 1 alumno; en el nivel básico, idioma francés, hay 14 alumnos, etc.
*/





//! b) Con una sintaxis basada en el uso anidado de la palabra array, y mostrar por pantalla los alumnos que existen en cada nivel e idioma.

print "<pre>";
$curso = array(
   //Declara array

   $basico = array(
      //Dimensión [0][…][…]
      array("ingles", 1),
      array("frances", 14),
      array("aleman", 8),
      array("ruso", 3),
   ),


   $medio = array(
      //Dimensión [1][…][…]
      array("ingles", 6),
      array("frances", 19),
      array("aleman", 7),
      array("ruso", 2),
   ),


   $profecional = array(
      //Dimensión [2][…][…]
      array("ingles", 3),
      array("frances", 13),
      array("aleman", 4),
      array("ruso", 1),
   )



);
print"</pre>";

// echo "_________print_r($.profecional) __________________"."<br />";
// print_r($profecional) ."<br />";
// 


echo "____________print_r($.curso);_______________"."<br />";
echo "<br />";
print_r($curso);
echo "<br /><br /><br />";


echo "___________Resultados con  var_dump($.curso); _______________"."<br /> ";
echo var_dump($curso);
print "<pre>";

echo "<br /><br /><br />";
echo "___________Resultados con  <.pre> y var_dump($.curso) < /.pre>; _______________"."<br /> ";
echo var_dump($curso);

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

echo $curso[1][0][0] . " :  ";
echo $curso[1][0][1] . " Alumno:" . "<br />";

echo $curso[1][1][0] . " : ";
echo $curso[1][1][1] . " Alumnos:" . "<br />";


echo $curso[1][2][0] . " : ";
echo $curso[1][2][1] . " Alumnos:" . "<br />";

echo $curso[1][3][0] . " : ";
echo $curso[1][3][1] . " Alumnos:" . "<br />";




echo "<br />";
echo " Cursos Profesional : <br />";

echo $curso[2][0][0] . " :  ";
echo $curso[2][0][1] . " Alumno:" . "<br />";

echo $curso[2][1][0] . " : ";
echo $curso[2][1][1] . " Alumnos:" . "<br />";


echo $curso[2][2][0] . " : ";
echo $curso[2][2][1] . " Alumnos:" . "<br />";

echo $curso[2][3][0] . " : ";
echo $curso[2][3][1] . " Alumnos:" . "<br />";








?>
