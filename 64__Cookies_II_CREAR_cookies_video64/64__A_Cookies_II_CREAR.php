<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <title>title</title>
   <link rel="stylesheet" href="linkToCSS" />
</head>

<body>
   <?php


   //! con parametro path

   /* Esta línea de código está creando una cookie llamada "prueba" con el valor "Esta es la información
  de nuestra segunda cookie con argumento [time()] y [path]" y un tiempo de caducidad de 60 segundos
  desde la hora actual. El cuarto parámetro "/64__Cookies_II_CREAR_cookies_video64/64__B_Cookies_LEER_cookies/" especifica la ruta en el  servidor donde estará disponible la cookie. */
   setcookie("prueba", "Esta es la información de nuestra segunda cookie con argumento [time()]  y [path] ", time() + 60, "/64__Cookies_II_CREAR_cookies_video64/64__B_Cookies_LEER_cookies/");



   //! Sin parametro path

   //? setcookie("prueba", "Esta es la información de nuestra segunda cookie con el argumento [tiempo()] (TERCER PARÁMETRO)", time() + 60);
   /* Esta línea de código está creando una cookie llamada "prueba" con el valor "Esta es la información
    de nuestra segunda cookie con el argumento [tiempo()] (TERCER PARÁMETRO)" y un tiempo de caducidad
    de 30 segundos desde el tiempo actual. */

   /* Este bloque de código está comprobando si existe una cookie llamada "prueba" mediante la función
   `isset()`. Si la cookie existe, mostrará un mensaje al usuario indicando que la cookie se creó
   correctamente y mostrará el valor de la cookie almacenada en el arreglo superglobal
   `["prueba"]` con la clave "prueba". Si la cookie no existe, imprimirá el mensaje "No
   existe esa cookie". */
   if (isset($_COOKIE["prueba"])) {
      /* `echo ("cookie creada correctamente: " . ["prueba"]);` muestra un mensaje al usuario
      que indica que la cookie se creó correctamente y muestra el valor de la cookie almacenada en
      la matriz superglobal ` $_COOKIE["prueba"]` con la tecla "prueba". El operador `.` se utiliza para
      concatenar la cadena "cookie creada correctamente:" con el valor de la cookie. */
      echo ("cookie creada  corectamente : " . $_COOKIE["prueba"]);
   } else {
      print_r('No existe esa cookie');
   }

   ?>
</body>

</html>