<!DOCTYPE html>

<html lang="en">

/*
`fetch(PDO::FETCH_ASSOC) Y fetch(PDO::FETCH_OBJ) `son métodos utilizados para
recuperar una fila de un conjunto de resultados devuelto por
una consulta de base de datos. En este caso, se utiliza para
recuperar cada fila de datos del conjunto de resultados
devuelto por la consulta SQL `SELECT * FROM datos_usuarios`.
El código ` while ( = ->fetch(PDO::FETCH_ASSOC))` está recuperando cada
fila de datos del conjunto de resultados devuelto por la consulta SQL.

El bloque de código que proporcionó es un bucle while que recupera cada fila
de datos del conjuntode resultados devuelto por la consulta SQL `->fetch(PDO::FETCH_OBJ)`. */







<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table width="50%" border="2" align="center">
      <tr>
        <div>
          <h1 class="titulo">CRUD<span class="subtitulo"> Create | Read | Update | Delete</span></h1>
        </div>
      </tr>
      <tr>
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellido</td>
        <td class="primera_fila">Dirección</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>

      <!-- 
      El "< ? php foreach ( as )" es un bucle de PHP que itera sobre cada elemento en la
     matriz `registro`. Asigna cada elemento a la variable `item` y ejecuta el código dentro del
     bucle para cada elemento. En este caso, se utiliza para mostrar los datos de la matriz
     `registro` en las filas de la tabla del código HTML.
     Una sintaxis alternativa para algunas de sus estructuras de control, a saber: if, while, for, foreach, y switch. En cada caso, la forma básica de la sintaxis alternativa es cambiar la llave de apertura por dos puntos (:) y la llave de cierre por endif;, endwhile;, endfor;, endforeach;, o endswitch;, respectivamente.
  
     //!https://www.php.net/manual/es/control-structures.alternative-syntax.php
     


     <?php foreach ($matrizPersonas as $item) : ?>
  
      <?php //COMPROBACION
      ?>
      <?php print "<pre>\n" ?>;
      <?php echo "<br />" ?>;
     <?php print_r($matrizPersonas); ?>
    <?php //FIN COMPROBACION
    ?>

    
      <td><?php echo $item->id ?></td> <!--id -->
      <td><?php echo $item->Nombre ?></td> <!--Nombre -->
      <td><?php echo $item->Apellido ?></td> <!--Apellido -->
      <td><?php echo $item->Direccion ?></td> <!--Direccion-->

      <td class='bot'><a href="70__borrar.php?id=<?php echo $item->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>


      <td class='bot'><a href="70_editar.php?id=<?php echo $item->id ?>&nombre=<?php echo $item->Nombre ?>&apellido=<?php echo $item->Apellido ?>&direccion=<?php echo $item->Direccion ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>

      </tr>
    <?php endforeach ?>

    <tr>
      <td></td>
      <td><input type='text' name='nombre' size='10' class='centrado'></td>
      <td><input type='text' name='apellido' size='10' class='centrado'></td>
      <td><input type='text' name=' direccion' size='10' class='centrado'></td>
      <td><input type='submit' name='insertar' id='insertar' value='Insertar Datos'></td>
    </tr>
    </table>
  </form>
</body>

</html>


// todo INICIO *******************************************************************************
<<!-- ?php require_once("modelo/81-82_persona_modelo.php"); echo "<h2 align='center'> ======= Consulta Tabla datos_usuarios =======</h2>" ; echo "<h5 align='center'> Oficina España</h5>" ; /* La declaración `foreach (... as ... )` itera sobre cada elemento en la matriz `$matrizPersonas` y asigna el elemento actual a la variable `$registro`. Esto le permite acceder a los valores de cada elemento de la matriz dentro del bucle. */ foreach ($matrizPersonas as $registro) { echo "<table width='70%' align='center' border='1' dotted #ff0000>" ; echo "<td  align='center' >$registro[Nombre]</td> " ; echo "<td  align='center' >$registro[Apellido]</td> " ; echo "<td  align='center' >$registro[Direccion]</td> " ; echo "</tr>" ; echo "</table>" ; } -->
  //todo FIN ****************************************************************************************
