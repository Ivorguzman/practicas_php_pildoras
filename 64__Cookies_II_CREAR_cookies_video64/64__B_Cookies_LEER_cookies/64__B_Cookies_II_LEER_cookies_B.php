<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>title</title>
        <link rel="stylesheet" href="linkToCSS" />
    </head>
    <body>
      <?php

      

     /* Este código está comprobando si existe una cookie llamada "prueba". Si lo hace, imprimirá el
     contenido de la cookie. Si no existe, imprimirá un mensaje diciendo que no se puede leer debido
     al parámetro de ruta de la cookie. */
      if (isset($_COOKIE["prueba"])) {
         echo("Leyendo contenido de la  cookie_B : ". $_COOKIE["prueba"]);
      } else {
         echo('No se puede leer, fuera de ambito por el parametro path  de la  cookie');
      }



      
      
      ?>
    </body>
</html>