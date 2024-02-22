
<?php
function impar($var)
{
   // Retorna siempre que el número entero sea impar
   return $var & 1;
}

function par($var)
{
   // Retorna siempre que el número entero sea par
   return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];




// ===COMPROBACIONES===

echo "Impar :\n";
print "<pre>\n";
echo "<br />";
echo "<br />";
echo '$item ==> ';
// print_r($registro);
print_r(array_filter($array1, "impar"));
print "<pre>";
      // ===FIN COMPROBACIONES

echo "Par:\n";
print_r(array_filter($array2, "par"));
?>
