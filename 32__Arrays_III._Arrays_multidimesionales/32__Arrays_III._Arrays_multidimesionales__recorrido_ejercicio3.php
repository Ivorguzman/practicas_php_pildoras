<?php


/* 
/*
 ********************** EJERCICIO  ***************************
Supón que quieres representar lo siguiente:
___________________________________________
<<<<<<<  hay 2 equipos españoles >>>>>>>>
en el primero:
portero es Frank,
el defensa Pepe,
el medio Luis
el delantero Raul.
------------------------------------------------------
En el segundo:
el portero es Tiger,
el defensa Mourin,
el medio Katz
el delantero Alberto.
---------------------------------------------
<<<<<<<<<<<    Hay 1 equipo mexicano  >>>>>>>>>>,
portero es Suarez,
el defensa Koltz,
el medio Fernandez
el delantero Ramirez.
------------------------------------------------------
<<<<<<<<<   Hay 2 equipos argentinos. >>>>>>>>>
En el primero:
el portero es Higuita,
el defensa Mel,
el medio Rubens
el delantero Messi.
-------------------------------------------------
En el segundo:
el portero es Kostenmeiner,
el defensa Lenkins,
el medio Marash
el delantero Juanes.
-----------------------------------------------------------------------
 
Función count. Uso de for y for-each para recorrer arrays.
© aprenderaprogramar.com, 2006-2029


c) Representa los datos usando arrays arrays asociativos donde el primer índice indica el país, el
segundo el equipo y el tercero la posición del jugador (un ejemplo de cómo declarar un elemento sería
por ejemplo: //!$equipos['Mexico']['Equipo1']['defensa']="koltz"; ).
 *************************************************************************************
A continuación usando un bucle foreach recorre los elementos del array mostrando la información del país, equipo, posiciones jugadores de cada equipo
****************************************************************************************
*/




///  Para recorrer un array multidimensional, tendremos que ir anidando tantas estructuras repetitivas como dimensiones tenga el array. 


//! PRACTICAS :
// $equipos[0][0][0] = "**** PAIS **** :";
// $equipos[0][0][1] = "España";
// $equipos[0][0][2] = "Mexico";
// $equipos[0][0][3] = "Argentina";
// 
// 
// $equipos[1][0][0] = "**** EQUIPO **** :";
// $equipos[1][0][1] = "Equipo 1";
// $equipos[1][0][2] = "Equipo 2";
// 
// $equipos[2][0][0] = "**** POSICIÓN **** :";
// $equipos[2][0][1] = "portero";
// $equipos[2][0][2] = "defensa";
// $equipos[2][0][3] = "medio";
// $equipos[2][0][4] = "delantero";
// 
// 
// $equipos[3][0][0] = "**** NOMBRE **** :";
// $equipos[3][0][1] = "Frank";
// $equipos[3][0][2] = "Pepe";
// $equipos[3][0][3] = "Luis";
// $equipos[3][0][4] = "Raul";
// $equipos[3][0][5] = "Tiger";
// $equipos[3][0][6] = "Mourin";
// $equipos[3][0][7] = "Katz";
// $equipos[3][0][8] = "Alberto";
// $equipos[3][0][9] = "Canilla";
// $equipos[3][0][10] = "Suarez";
// $equipos[3][0][11] = "Koltz";
// $equipos[3][0][12] = "Fernandez";
// $equipos[3][0][13] = "Ramirez";
// $equipos[3][0][14] = "Higuita";
// $equipos[3][0][15] = "Mel";
// $equipos[3][0][16] = "Rubens";
// $equipos[3][0][17] = "Messi";
// $equipos[3][0][18] = "Kostenmeiner";
// $equipos[3][0][19] = "Lenkins";
// $equipos[3][0][20] = "Marash";
// $equipos[3][0][21] = "Juanes";
// $equipos[3][0][22] = "Ivor";


print "<pre>";



/* El código está creando un arreglo llamado `equipos` con tres sub-arreglos: `pais`, `equipo` y
`posicion`. Cada uno de estos sub-arreglos tiene un par clave-valor, donde la clave es una cadena
("pais", "equipo", "posicion") y el valor es una cadena vacía (""). */
$equipos = array(

   $pais = array(
      "pais" => "",
   ),
   $equipo = array(
      "equipo" => "",
   ),
   $posicion = array(
      "posicion" => "",
   )

);

$equipos['Mexico']['Equipo1']['defensa']="koltz"; 


print "<pre>";

print_r($equipos);

echo $equipos['Mexico']['Equipo1']['defensa'];
// var_dump(($equipos));

print "</pre>";
