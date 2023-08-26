<?php

require_once("modelo/78-80_Producto_modelo.php");
// print_r('require_once("../modelo/78-82_Producto_VISTA.php")');
echo "<h2 align='center'> ======= Consulta Tabla Productos =======</h2>";
echo "<h5 align='center'> Sucursal Alemania</h5>";
foreach ($matrizProductos as $registro) {

  // Creacion de una muy pequeña interfaz
  // Recorriendo fila a fila el Record Set con [fetch(PDO::FETCH_ASSOC)]
  echo "<table width='70%' align='center' border='1' dotted #ff0000>";
  echo "<td  align='center' >$registro[CODIGOARTICULO]</td> ";
  echo "<td  align='center' >$registro[NOMBREARTICULO]</td> ";
  echo "<td  align='center' >$registro[PRECIO]</td> ";
  echo "<td  align='center'>$registro[PAISDEORIGEN] </td>";
  echo "</tr>";
  echo "</table>";
}
