<?php


// Un vector asociativo permite acceder a un elemento del vector por medio de un subíndice de tipo string.

// En un vector asociativo toda componente está asociada a una clave

//Para declarar arrays asociativos, en el paréntesis de definición del array, tenemos que asociar el índice con el valor por medio del operador =>

// Tenemos la posibilidad de utilizar cualquier tipo de dato para especificar un índice. Por defecto es un número, pero también podemos poner cadenas de texto


// vector asociativo se define de la siguiente forma:
$registro['dni'] = "20456322";
$registro['nombre'] = "Martinez Pablo";
$registro['direccion'] = "Colon 134";
echo $registro['nombre'] . "<br />";
echo $registro['dni'] . "<br />";
echo $registro['direccion'];
echo ("<br /> <br />");




// Otras formas de crear un vector asociativo:
$registro = array(
   'dni' => '20456322',
   'nombre' => 'Martinez Pablo',
   'direccion' => 'Colon 134'
);
echo $registro['nombre'] . "<br />";
echo $registro['dni'] . "<br />";
echo $registro['direccion'];
echo ("<br /> <br />");

//! Cuando tenemos que recorrer en forma completa un vector asosiativo  en PHP es muy común utilizar la estructura 'foreach'.

$articulo = array(
   'codigo' => 1,
   'descripcion' => 'manzanas',
   'precio' => 30.25
);
foreach ($articulo as $clave => $valor) {
   echo 'Para la clave :' . $clave . " almacena el valor: " . $valor;
   echo "<br>";
}
//En cada repetición del 'foreach' la variable $clave almacena el subíndice del vector y la variable $valor contiene el valor de la componente del vector:
$mesesDelAhno = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");

echo ("<br /> <br />");
echo ("Meses del año : <br /> ");
foreach ($mesesDelAhno as $subIndice => $valor) {
   echo ("El mes numero :" . $subIndice + 1 . " es " . $valor . "<br />");
}
// En cada repetición del 'foreach' la variable $subIndice almacena el subíndice del vector y la variable $valor contiene el valor de la componente del vector:




print"<pre>";

$alimentos =
   array(


      //! sino  se coloca la funcion array() no se genera indice en llos seub-array
         "fruta" => array(
            "tropical" => "Kiwi",
            "citrico" => "Mandarina",
            "otros" => "manzana"
         ),
      
      



         "leche" => array(
            "animal" => "vaca",
            "vegetal" => "coco"
         ),


      array( // 0
         "carnes" => array(
            "vacuno" => "lomo",
            "porcino" => "pata"
         )
      )
   );

    print_r($alimentos);



   //! Fatal error: Uncaught Error: Call to undefined function each()
// foreach ($alimentos as $key => $value) {
//    echo "$key: <br />";
//    while (list($clave, $valor) = each($value)) {
//       echo "$clave=$valor <br />";
//    }
// }



echo ("<br /> <br />");


 echo var_dump($alimentos) . "<br />";
print"</pre>";

/* 
echo var_dump($cursos) == array(3) { ["Basico"]=> array(4) { ["Ingles"]=> int(1) ["Frances"]=> int(14) ["Aleman"]=> int(8) ["ruso"]=> int(3) } ["Medio"]=> array(4) { ["Ingles"]=> int(6) ["Frances"]=> int(19) ["Aleman"]=> int(7) ["ruso"]=> int(2) } ["profecional"]=> array(4) { ["Ingles"]=> int(3) ["Frances"]=> int(13) ["Aleman"]=> int(4) ["ruso"]=> int(1) } }

 */


// 
// //! Fatal error: Uncaught Error: Call to undefined function each() esta funcion esta en desuso
// 
// $fruta = array('a' => 'manzana', 'b' => 'banana', 'c' => 'arándano');
// 
// reset($fruta);
// while (list($clave, $valor) = each($fruta)) {
//    echo "$clave => $valor\n";
// }
// 


?>
