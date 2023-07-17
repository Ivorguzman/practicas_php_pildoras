<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>title</title>
        <link rel="stylesheet" href="linkToCSS" />
    </head>
    <body>
      <?php

      

/* Este código PHP está comprobando si existe una cookie llamada "prueba". Si lo hace, imprimirá el
mensaje "Leyendo contenido de la cookie_A" seguido del valor de la cookie. Si no existe, imprimirá
el mensaje "No se puede leer, fuera de ambito por el parámetro ruta de la cookie" que significa "No
se puede leer, fuera de alcance debido al parámetro ruta de la cookie". */
      if (isset($_COOKIE["prueba"])) {

         echo("Leyendo contenido de la  cookie_A : ". $_COOKIE["prueba"]);
      } else {
         echo('No se puede leer, fuera de ambito por el parametro path  de la  cookie');
      }



      
      
      ?>
    </body>
</html>