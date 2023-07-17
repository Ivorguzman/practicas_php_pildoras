

<?php

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

*/

//!  Representa los datos usando un array de tres dimensiones con índices numéricos donde el primer índice indica el país, el segundo el equipo y el tercero la posición del jugador.!!******************************************************************************************************** 
// ! Presenta la información  del país, equipo, posiciones y jugadores de cada equipo usando un bucle for each.************************************************************************************************************

///  Para recorrer un array multidimensional, tendremos que ir anidando tantas estructuras repetitivas como dimensiones tenga el array. 


/* 
print "<pre>";
// !PRACTICA:
$equipos[0][0][0] = "**** PAIS **** :";
$equipos[0][0][1] = "España";
$equipos[0][0][2] = "Mexico";
$equipos[0][0][3] = "Argentina";


$equipos[1][0][0] = "**** EQUIPO **** :";
$equipos[1][0][1] = "Equipo 1";
$equipos[1][0][2] = "Equipo 2";

$equipos[2][0][0] = "**** POSICIÓN **** :";
$equipos[2][0][1] = "portero";
$equipos[2][0][2] = "defensa";
$equipos[2][0][3] = "medio";
$equipos[2][0][4] = "delantero";


$equipos[3][0][0] = "**** NOMBRE **** :";
$equipos[3][0][1] = "Frank";
$equipos[3][0][2] = "Pepe";
$equipos[3][0][3] = "Luis";
$equipos[3][0][4] = "Raul";
$equipos[3][0][5] = "Tiger";
$equipos[3][0][6] = "Mourin";
$equipos[3][0][7] = "Katz";
$equipos[3][0][8] = "Alberto";
$equipos[3][0][9] = "Canilla";
$equipos[3][0][10] = "Suarez";
$equipos[3][0][11] = "Koltz";
$equipos[3][0][12] = "Fernandez";
$equipos[3][0][13] = "Ramirez";
$equipos[3][0][14] = "Higuita";
$equipos[3][0][15] = "Mel";
$equipos[3][0][16] = "Rubens";
$equipos[3][0][17] = "Messi";
$equipos[3][0][18] = "Kostenmeiner";
$equipos[3][0][19] = "Lenkins";
$equipos[3][0][20] = "Marash";
$equipos[3][0][21] = "Juanes";
$equipos[3][0][22] = "Ivor";

print "<pre>";

print_r($equipos);
// var_dump(($equipos));

print "</pre>";


foreach ($equipos as $indice => $valor) {
   // echo "$-valor :" ."[0][0] = ". $valor[0][0];
   print PHP_EOL;
   foreach ($valor as $indice1 => $valores) {
      // echo "$-valores :" . "[0] = " . $valores[0];
      print PHP_EOL;
      foreach ($valores as $indice2 => $valor3) {
         // echo "indice  => " . $indice . "<br />";
         // echo "indice1 => " . $indice1 . "<br />";
         // echo "indice2 => " . $indice2 . "<br />";
         echo "[$indice][$indice1][$indice2] = " . $equipos[$indice][$indice1][$indice2];
         // echo "$-valore3 :" . " $valor3"."<br />";
         print PHP_EOL;

         // ! echo $valor3 . "<br />";
      }
   }
   print PHP_EOL;
}

 */

//!$equipos['Mexico']['Equipo1']['defensa']="koltz"; ).

// $equipos[0][0][0] = '';
// $equipos[0][0][2] = "Mexico";
// $equipos[1][0][0] = '';
// $equipos[1][0][1] = "Equipo 1";
// $equipos[2][0][0] = '';
// $equipos[2][0][2] = "defensa";

$equipos[0][1][2] = "koltz";


print "<pre>";

print_r($equipos);
var_dump(($equipos));

print "</pre>";



/* El código usa un bucle foreach anidado para iterar sobre una matriz tridimensional llamada
``. El primer bucle foreach itera sobre la primera dimensión de la matriz, que representa el
país. El segundo bucle foreach itera sobre la segunda dimensión, que representa al equipo. El tercer
bucle foreach itera sobre la tercera dimensión, que representa la posición y el nombre del jugador. */
foreach ($equipos as $indice => $valor) {
   print_r("$-valor[1][2] = ".$valor[1][2]);
   echo   "<br /> <br />";
   foreach ($valor as $indice => $valor2) {
      print_r("$-valor[2] = " . $valor2[2]);
      foreach ($valor2 as $indice => $valor3) {
         echo   "<br /><br />";
         print_r("$-indice  : $-valor3 = ".$indice . ": " . $valor3);
         echo "<br /><br />";
         print_r("$-valor3 = ".$valor3);
      }
   }
   
};
