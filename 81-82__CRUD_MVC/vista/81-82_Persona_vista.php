<?php

require_once("modelo/81-82_persona_modelo.php");

echo "<h2 align='center'> ======= Consulta Tabla datos_usuarios =======</h2>";
echo "<h5 align='center'> Oficina España</h5>";

/* La declaración `foreach (... as ... )` itera sobre cada elemento en la matriz
`$matrizPersonas` y asigna el elemento actual a la variable `$registro`. Esto le permite acceder a
los valores de cada elemento de la matriz dentro del bucle. */
foreach ($matrizPersonas as $registro) {

 
  echo "<table width='70%' align='center' border='1' dotted #ff0000>";
  echo "<td  align='center' >$registro[Nombre]</td> ";
  echo "<td  align='center' >$registro[Apellido]</td> ";
  echo "<td  align='center' >$registro[Direccion]</td> ";
  echo "</tr>";
  echo "</table>";
}
