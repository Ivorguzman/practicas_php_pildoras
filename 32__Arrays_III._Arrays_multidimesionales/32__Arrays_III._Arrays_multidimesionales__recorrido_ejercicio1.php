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
a) Representa los datos usando un array de tres dimensiones con índices numéricos donde el primer
índice indica el país, el segundo el equipo y el tercero la posición del jugador. 
 
 *************************************************************************************************************
 A continuación Presenta la información del país, equipo, posiciones y jugadores de cada equipo usando un bucle for.
 *****************************************************************************************************************
 */


//! Representa los datos usando un array de tres dimensiones con índices numéricos donde el primer  índice indica el país, el segundo el equipo y el tercero la posición del jugador. Presenta la información


print "<pre>";

/* El código está inicializando una matriz tridimensional llamada `equipos` con información sobre
diferentes equipos de fútbol de diferentes países. La primera dimensión representa el país, la
segunda dimensión representa el equipo y la tercera dimensión representa la posición y el jugador.
El código asigna valores a índices específicos en la matriz para almacenar esta información. Por
ejemplo, `[0][0][1] = "España"` asigna el valor "España" al índice [0][0][1], que representa
el primer equipo de España. */
$equipos[0][0][0] = "Pais :";
$equipos[0][0][1] = "España";
$equipos[0][0][2] = "Mexico";
$equipos[0][0][3] = "Argentina";


$equipos[1][0][0] = "Equipo :";
$equipos[1][0][1] = "Equipo 1";
$equipos[1][0][2] = "Equipo 2";

$equipos[2][0][0] = "Posicion :";
$equipos[2][0][1] = "";
$equipos[2][0][2] = "";
$equipos[2][0][3] = "";
$equipos[2][0][4] = "";

$equipos[3][0][0] = "Nombre :";


$equipos[2][0][1] = "Arquero";
$equipos[3][0][1] = "Juanes";

// // print_r(var_dump($equipos));
print_r($equipos);


// 
// echo $equipos[0][0][0];
// echo $equipos[0][0][1] . "<br />";
// echo $equipos[1][0][0];
// echo $equipos[1][0][1] . "<br />";
// echo $equipos[2][0][0];
// echo $equipos[2][0][1] . "<br />";
// echo $equipos[3][0][0];
// echo $equipos[3][0][1] . "<br />";
// 




/* El código utiliza un bucle anidado `for` para iterar a través de una matriz tridimensional
`equipos`. El ciclo externo itera a través de la primera dimensión (que representa el país), el
ciclo del medio itera a través de la segunda dimensión (que representa al equipo) y el ciclo interno itera a través de la tercera dimensión (que representa la posición y el jugador). */
for ($i = 0; $i < count($equipos); $i++) {
   echo  "count($.equipos) ==> " . count($equipos) . "<br />";
   // echo "count($.equipos)  : " . count($equipos) . "<br />";
   echo  "i ====  for externo ==================> " . $i . "<br />";
   for ($j = 0; $j < count($equipos[$i]); $j++) {
      // echo "count($.equipos[$.i])  : ". count($equipos[$i])."<br />";
      echo "i : " . $i . " ==> " .  "j:" . $j . "<br />";
      for ($k = 0; $k < count($equipos[$i][$j]); $k++) {
         // echo "count($.equipos[$.i])  : " . count($equipos[$i]) . "<br />";
         echo "i:" . $i . " ==> " .  "k:" . $k . "<br />";
         echo "Imprime :" . $equipos[$i][$j][$k] . '<br />+++++++++++++++++++++++++++++' . "<br />";
      }
   }
}


print "</pre>";



// for ($i = 0; $i < count($array); $i++) {
//    for ($j = 0; $j < count($array[$i]); $j++) {
//       for ($k = 0; $k < count($array[$i][$j]); $k++) {
//          echo $array[$i][$j][$k] . '<br />';
//       }
//    }
// }
echo "<br />";


 /*
// ! represntacon grafica del array $equipos
//? print_r($equipos);
Array
(
    [0] => Array
        (
            [0] => Array
                (
                    [0] => Pais
                    [1] => España
                    [2] => Mexico
                    [3] => Argentina
                )

        )

   
     [1] => Array
        (
            [0] => Array
                (
                    [0] => Equipo
                    [1] => Equipo 1
                    [2] => Equipo 2
                )

        )

    [2] => Array
        (
            [0] => Array
                (
                    [0] => Posicion
                    [1] => portero
                    [2] => defensa
                    [3] => medio
                    [4] => delantero
                )

        )

)



 */