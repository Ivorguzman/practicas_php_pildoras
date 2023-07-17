<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <title>title</title>
   <link rel="stylesheet" href="linkToCSS" />
</head>

<body>
   <!-- <div align="center"> Este es un formulario HTML que permite al usuario ingresar 5 valores. El formulario tiene un
atributo de acción que especifica la URL del script que procesará los datos del formulario cuando se envíe. El atributo de método especifica el método HTTP que se utilizará al enviar los datos del
formulario; en este caso, se establece en "publicar". Los campos de entrada se denominan "entrada1","entrada2", "entrada3", "entrada4" y "entrada5" respectivamente. Cuando el usuario envía el formulario, los valores ingresados en los campos de entrada se enviarán al script de procesamiento a través del método HTTP POST. -->
   <form align="center" action="30__Arrays_I._ejercicio1_proceso_foreach.php" method="post">
      <h1> Ejercicio carga de 5 números en un formulario </h1>
      Ingrese primer valor:
      <input type="text" name="entrada1">
      <br><br />
      Ingrese segundo valor:
      <input type="text" name="entrada2">
      <br><br />
      Ingrese tercer valor:
      <input type="text" name="entrada3">
      <br><br />
      Ingrese cuarto valor:
      <input type="text" name="entrada4">
      <br><br />
      Ingrese quinto valor:
      <input type="text" name="entrada5">
      <br><br />
      <input type="submit">
   </form>
   </div>

</body>

</html>