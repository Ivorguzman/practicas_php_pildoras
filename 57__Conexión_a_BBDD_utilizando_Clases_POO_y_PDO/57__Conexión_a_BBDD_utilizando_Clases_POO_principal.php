<?php

require("57__Conexión_a_BBDD_utilizando_Clases_POO_devuelveProductos.php");
$lista_productos = new DevuelveProductos();
$array_productos = $lista_productos->get_productos();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
  <style>
        body {
            background-color: #ffc;
        }

        h1 {
            text-align: center;
            color: #00f;
            width: 50%;
            margin: auto;



        }

        table {
            padding: 13px;
            border: 1px solid #f00;
        }

    </style>
    </style>
    <title>57__conexion</title>
</head>

<body>
    <?php

    // recorrer el array asosiativo  con foreach(... as ...){......} ;
    foreach($array_productos as $producto){

        echo "<br /><br /><h1>Articulo : $producto[CODIGOARTICULO] <br />  Descipción </h1> ";
        echo "<table width='20%' align='center' border='1'>";
        echo "<tr><td >$producto[SECCION]</td></tr>";
        echo "<tr><td >$producto[NOMBREARTICULO]</td></tr>";
        echo "<tr><td >$producto[PRECIO]</td></tr>";
        echo "<tr><td >$producto[FECHA]</td></tr>";
        echo "<tr><td >$producto[IMPORTADO]</td></tr>";
        echo "<tr><td >$producto[PAISDEORIGEN]</td></tr></table>";
    }
    

    ?>

</body>

</html>
