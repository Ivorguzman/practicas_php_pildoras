<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>My Title</title>

   <style>
      h1,
      h2 {
         text-align: center;
         /* background-color: red; */
      }

      table {
         width: 100%;
         background-color: #ffc;
         border: 4px dotted #f00;
         margin-left: auto;
         margin-right: auto;
      }

      .contenedor,
      table {
         width: 35%;
         /* border: 4px dotted #f00; */
         margin-left: auto;
         margin-right: auto;
      }

      form {
         width: 100%;
         margin-left: auto;
         margin-right: auto;
      }

      td {
         text-align: left;
         padding: 10px;
      }
      .tr_centrado{
         position: absolute;
         left: 45%;
      }
      

   </style>
</head>

<body>

   <?php



   if (isset($_POST["enviar"])) {
      /* La sentencia if (isset(["enviar"]))  comprueba si el formulario se ha enviado
  comprobando si se ha hecho clic en el botón "enviar". Si se ha hecho clic en él, se ejecutará el
  código dentro de la instrucción if. */

      /* Este bloque de código establece una conexión a una base de datos MySQL y verifica si existe un
      usuario en la base de datos con un nombre de usuario y contraseña específicos. Utiliza PDO (PHP Data
      Objects) para preparar y ejecutar una consulta SQL con marcadores de posición para el nombre de
      usuario y la contraseña. Si se encuentra un usuario coincidente, se inicia una sesión y el nombre de
      usuario y la contraseña del usuario se almacenan en las variables de sesión. Si no se encuentra
      ningún usuario coincidente, se muestra un mensaje de error. El código también incluye el manejo de
      errores usando bloques try-catch y un bloque finalmente para cerrar la conexión a la base de datos. */
      try { 

         /* Crear un nuevo objeto PDO (PHP Data Objects) para establecer una conexión a una base de datos
         MySQL con los siguientes parámetros:
         - Anfitrión: host local
         - Nombre de la base de datos: productos
         - Nombre de usuario: raíz
         - Contraseña: (cadena vacía) */
         $conexion_pdo = new PDO('mysql:host=localhost; dbname=productos', 'root', '');

         /* `->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);` está configurando
         el atributo de modo de error del objeto PDO en `PDO::ERRMODE_EXCEPTION`. Esto significa que
         si ocurre un error durante una operación de la base de datos, PDO lanzará una excepción en
         lugar de simplemente devolver un falso o una advertencia. Esto permite un manejo de errores
         más detallado y puede ayudar con la depuración. */
         $conexion_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo ("*****Conexcion establecida*****" . "<br /><br />");


         /* Creando una consulta SQL para seleccionar todas las columnas de la tabla "usuarios_pass"
         donde la columna "usuarios" coincide con el valor del parámetro ":usuario" y la columna
         "clave" coincide con el valor del parámetro ":clave". El uso de marcadores de posición
         (":usuario" y ":clave") ayuda a prevenir ataques de inyección SQL al permitir que los
         valores se vinculen a la consulta por separado. 
          `:usuario Y :clave` son marcadores de posición o parámetros en unainstrucción SQL preparada que se
         reemplazarán con los valor reales de las variables `usuarios,clave ` cuando se ejecute la instrucción. Esto
         ayuda a prevenir ataques de inyección SQL al separar elcódigo SQL de la entrada del
         usuario y su clave. */
         $query_sql = "SELECT * FROM usuarios_pass WHERE usuarios = :usuario AND clave = :clave";

         /* ` = ->prepare();` está preparando una instrucción SQL
         con marcadores de posición para los valores que se proporcionarán más adelante. Esto se
         hace para evitar ataques de inyección SQL al separar el código SQL de la entrada del
         usuario. El objeto ` $obj_pdo_stmt` resultante se puede ejecutar con el método `execute()`,
         que sustituirá los marcadores de posición con los valores reales y ejecutará la
         declaración. */
         $obj_pdo_stmt = $conexion_pdo->prepare($query_sql);

         /* El código siguiente está desinfectando y escapando los datos de entrada del usuario recibidos
         a través de una solicitud POST en PHP. Utiliza las funciones htmlentities y addedlashes para
         evitar posibles vulnerabilidades de seguridad, como los ataques de inyección SQL. Los valores
         de los campos "campo_clave" y "campo_usuario" están siendo almacenados en las variables
          y  respectivamente. */
         $clave = htmlentities(addslashes($_POST["campo_clave"]));
         $usuario = htmlentities(addslashes($_POST["campo_usuario"]));
         // htmlentities(....) Combierte cual quier simbolo en HTML
         // addslashes(....) Escapa cualquier caracter estraño evista inyecciones  (; "" . y)
         // $_POST["...."] rescata lo que el usuario introdujo en el formulario
         /* `El código siguiente ->bindValue(":usuario", );` vincula el valor de la variable ` $usuario`
          al marcador de posición `:usuario` en la declaración SQL preparada. Esto se hace usando el
         método `bindValue()` del objeto PDOStatement. Al vincular el valor al marcador de posición,
         la instrucción SQL se puede ejecutar con el valor real de `$usuario y $clave` en lugar de los marcadores
         de posición (:usuario, :clave). Esto ayuda a prevenir ataques de inyección de SQL al garantizar que la entrada
         del usuario se desinfecte adecuadamente antes de usarse en una declaración de SQL. */
         $obj_pdo_stmt->bindValue(":usuario", $usuario);
         $obj_pdo_stmt->bindValue(":clave", $clave);



         /* `->execute();` está ejecutando la instrucción SQL preparada con los valores de
         los parámetros vinculados. Esto significa que los marcadores de posición en la sentencia SQL
         (por ejemplo, ":usuario" y ":clave") se reemplazarán con los valores reales de las variables
         `$usuario` y `$clave`, y la sentencia SQL resultante se ejecutará contra la base de datos. El
         resultado de la ejecución dependerá de la instrucción SQL específica que se ejecute, pero en
         este caso será una instrucción SELECT que recupera la información del usuario de la base de
         datos según el nombre de usuario y la contraseña proporcionados. */
         $obj_pdo_stmt->execute();


         /* ` = ->rowCount();` cuenta el número de filas devueltas por la
         instrucción SQL ejecutada y almacena el recuento en la variable `existeRegistro`. Este
         recuento representa la cantidad de registros en la base de datos que coinciden con los
         criterios especificados (en este caso, el nombre de usuario y la contraseña ingresados por el
         usuario). Si el recuento es mayor que 0, significa que se encontró un registro coincidente y
         el usuario está autenticado. Si el recuento es 0, significa que no se encontró ningún
         registro coincidente y que el usuario no está autenticado. */
         $existeRegistro = $obj_pdo_stmt->rowCount();


         print "<pre>";
         print_r("$-existeRegistro ==> " . $existeRegistro);
         print "</pre>";

         /*` Este bloque de código verifica, si la variable  no es igual a 0. Si no es
        igual a 0, se ejecutará el código después de la instrucción if. si hay un registro en la base de datos que coincida con el nombre de usuario y la contraseña ingresados por el usuario en el formulario de inicio de sesión. Si se encuentra un registro coincidente, inicia una sesión y almacena el nombre de usuario y la contraseña en las variables de sesión. Si no se encuentra ningún registro coincidente, muestra un mensaje de error "Usuario ó Contraseño incorrecto" (nombre de usuario o contraseña incorrectos). Este código se utiliza para autenticar al usuario e iniciar una sesión si las credenciales de inicio de sesión soncorrectas.` */
         if ($existeRegistro != 0) {
            /* El código está iniciando una sesión en PHP. La función `session_start()`
            inicializa una nueva sesión o reanuda una sesión existente. Esto permite que el servidor
            almacene y recupere datos para un usuario en particular a través de múltiples
            solicitudes. el ` */
            session_start(); // si el usuari existe crea una secion
   
            /* Esta línea de código almacena el valor del campo de entrada "campo_usuario" de un
            formulario enviado a través del método POST en una variable de sesión llamada "usuario".
            Esto se utiliza para realizar un seguimiento del usuario que ha iniciado sesión y
            mantener su sesión a lo largo de su interacción con el sitio web. */
            $_SESSION["usuario"] = $_POST["campo_usuario"]; // almacenamos el usuario de la secion
   
            /* `["clave"] = ["campo_clave"]` almacena el valor del campo de entrada
            "campo_clave" de un formulario enviado en una variable de sesión llamada "clave". Esto se
            utiliza para realizar un seguimiento de las credenciales de inicio de sesión del usuario
            a lo largo de su interacción con el sitio web. */
            $_SESSION["clave"] = $_POST["campo_clave"]; // almacenamos login del usuario de la secion
   
         } else {
            /* El código siguiente es un bloque de código PHP que verifica si las credenciales de inicio
        de sesión del usuario son correctas. Si las credenciales son incorrectas, mostrará el
        mensaje "Usuario ó Contraseño incorrecto". */

            echo " Usuario ó Contraseño incorrecto";

         }


         /* Este es un bloque catch que se usa para manejar cualquier excepción que pueda ocurrir en el
           bloque try. Si se lanza una excepción, el bloque catch la atrapará y ejecutará el código
           dentro del bloque. En este caso, mostrará un mensaje de error que incluye el mensaje de
           excepción, el nombre del archivo y el número de línea, y luego saldrá del script con el
           código de excepción. Esto ayuda con la depuración y el manejo de errores. */
      } catch (Exception $e) {

         echo " ERROR ==> : El código de excepción es: " . $e->getMessage() . "<br / >";
         // echo "Código de excepción : " . $e->getCode(). "<br / >";
         echo "En el archivo ==> : " . $e->getFile() . "<br />";
         echo "En la linea  ==> : " . $e->getLine() . "<br />";
         exit("Código de excepción : " . $e->getCode());

      } /* El bloque `finally` se usa para ejecutar código después de un bloque `try` y/o un bloque
`catch`, independientemente de si se lanzó una excepción o no. En este caso específico, está
cerrando la conexión a la base de datos configurando la variable `$conexion` en `null`. Esto
asegura que la conexión a la base de datos se cierre correctamente incluso si se lanzó una
excepción durante la ejecución del bloque `try`. */finally {
         $conexion = null;
      }
   }
   ?>

   <div class="contenedor">

      <?php
      /* Este bloque de código comprueba si la variable de sesión "usuario" no está configurada o es nula. Si
      no está configurado o es nulo, incluye un archivo PHP llamado
      "62__Sesiones_y_PHP_SELF_formulario.php" que contiene un formulario de inicio de sesión. Si se
      establece la variable de sesión "usuario", muestra un mensaje de bienvenida con el valor de la
      variable de sesión "usuario". Este código se utiliza para controlar la visualización de contenido en
      función de si un usuario ha iniciado sesión o no. */
      if (!isset($_SESSION["usuario"])) {
         include("62__Sesiones_y_PHP_SELF_formulario.php");
      } else {
         echo " Hola Bienvenido " . $_SESSION["usuario"];

      }
      ?>


   </div>


   <h2>CONTENIDO DE LA WEB</h2>
   <table width="800"  border="0">
      <tr>
         <td><img src="62__Sesiones_y_PHP_SELF_1.JPG" width="300" height="166"></td>
         <td><img src="  62__Sesiones_y_PHP_SELF_3.JPG" width=" 300" height="171"></td>
      </tr>
      <tr>
         <td><img src="62__Sesiones_y_PHP_SELF_2.JPG" width="300" height="166"></td>
         <td><img src="62__Sesiones_y_PHP_SELF_4.JPG" width="300" height="166"></td>


         
      </tr>
      <tr class="tr_centrado"  >
         <td ><a href="62__Sesiones_y_PHP_SELF._Cerrar_sesion_usuarioRegistrado.php"> Cerrar sesion</a></td>
      </tr>


   </table>





</body>

</html>
