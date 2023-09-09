<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>
  <?php
  require_once("modelo/81-82_Paginacion_modelo.php");
  ?>

  <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table cellpadding="5" width="50%" border="3" align="center">
      <tr>
        <div>
          <h1 class="titulo">CRUD<span class="subtitulo"> Create | Read | Update | Delete</span></h1>
          <h5>PDO::FETCH_OBJ</h5>
        </div>
      </tr>
      <tr>
        <th class="primera_fila">Id</th>
        <th class="primera_fila">Nombre</th>
        <th class="primera_fila">Apellido</th>
        <th class="primera_fila">Dirección</th>
        <th class="primera_fila">Sleccione</th>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
        <td class="sin">&nbsp;</td>
      </tr>

      <!-- 
      El "< ? php foreach ( as )" es un bucle de PHP que itera sobre cada elemento en la
     matriz `registro`. Asigna cada elemento a la variable `item` y ejecuta el código dentro del
     bucle para cada elemento. En este caso, se utiliza para mostrar los datos de la matriz
     `registro` en las filas de la tabla del código HTML.
     Una sintaxis alternativa para algunas de sus estructuras de control, a saber: if, while, for, foreach, y switch. En cada caso, la forma básica de la sintaxis alternativa es cambiar la llave de apertura por dos puntos (:) y la llave de cierre por endif;, endwhile;, endfor;, endforeach;, o endswitch;, respectivamente. -->

      <!-- https://www.php.net/manual/es/control-structures.alternative-syntax.php -->


      <?php foreach ($matrizPersonas as $item) : ?>
        <!-- INICIO ca   mpos dinamicos para presentar contenido de la base de datos -->
        <td align="center"><?php echo $item->id ?></td> <!--id -->
        <td><?php echo $item->Nombre ?></td> <!--Nombre -->
        <td><?php echo $item->Apellido ?></td> <!--Apellido -->
        <td><?php echo $item->Direccion ?></td> <!--Direccion-->
        <!-- FIN campos dinamicos para presentar contenido de la base de datos -->

        <!-- INICIO campos dinamicos para presentar contenido de la base de datos y botones borrar y actualizar -->
        <td class='bot'><a href="modelo/81-82_borrar.php?id=<?php echo $item->id ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

        <td class='bot'><a href="81-82_editar.php?id=<?php echo $item->id ?>&nombre=<?php echo $item->Nombre ?>&apellido=<?php echo $item->Apellido ?>&direccion=<?php echo $item->Direccion ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
        <!-- FIn campos dinamicos para presentar contenido de la base de datos y botones borrar y actualizar -->
        </tr>
      <?php endforeach ?>

      <tr>
        <td align="right">Descripción:</td>
        <!-- INICIO Cuadros de texto de insertar Datos en la tabla  y boton de insertar datos-->
        <td><input type='text' name='nombre' size='10' class='centrado'></td>
        <td><input type='text' name='apellido' size='10' class='centrado'></td>
        <td><input type='text' name=' direccion' size='10' class='centrado'></td>
        <td width="150" align="center"><input type='submit' name='insertar' id='insertar' value='Insertar Datos'></td>
        <!-- INICIO Cuadros de texto de insertar Datos en la tabla  y boton de insertar datos-->
      <tr>
        <!-- INICIO numeros de la paginacion-->
        <td colspan="5" class='paginacion'>
          <label>Página: </label>
          <?php
          for ($i = 1; $i <= $totalPaginas; $i++) {
            echo "<a href='?pagina=" . $i . "'>|$i|</a>  ";
          }
          ?>
        </td>
        <!--  FIN numeros de la paginacion-->
      </tr>

      </tr>
    </table>
  </form>
</body>

</html>


<<!-- ?php require_once("modelo/81-82_persona_modelo.php"); echo "<h2 align='center'> ======= Consulta Tabla datos_usuarios =======</h2>" ; echo "<h5 align='center'> Oficina España</h5>" ; /* La declaración `foreach (... as ... )` itera sobre cada elemento en la matriz `$matrizPersonas` y asigna el elemento actual a la variable `$registro`. Esto le permite acceder a los valores de cada elemento de la matriz dentro del bucle. */ foreach ($matrizPersonas as $registro) { echo "<table width='70%' align='center' border='1' dotted #ff0000>" ; echo "<td  align='center' >$registro[Nombre]</td> " ; echo "<td  align='center' >$registro[Apellido]</td> " ; echo "<td  align='center' >$registro[Direccion]</td> " ; echo "</tr>" ; echo "</table>" ; } -->
