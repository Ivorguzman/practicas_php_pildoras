<!DOCTYPE html>
<html>

<!-- <head> -->
<meta charset="utf-8" />
<!-- <link rel="stylesheet" href="linkToCSS" /> -->
<style>
   h1 {
      font-size: 16px;
      text-align: center;
   }


   .contenedor {
      width: 45%;
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
</style>


</head>

<body>
   <div class="contenedor">
      <!-- /* Este es un formulario HTML que permite a los usuarios ingresar su nombre de usuario y contraseña. El  formulario utiliza el método POST para enviar los datos al servidor y el atributo de acción  especifica la URL del script que procesará los datos del formulario. La variable $_SERVER['PHP_SELF'] se usa para especificar que los datos del formulario deben enviarse a la misma página en la que se  encuentra el formulario. El formulario también incluye un conjunto de campos y una leyenda para agrupar los elementos del formulario y proporcionar un título para el formulario. Los elementos de  entrada incluyen una entrada de texto para el nombre de usuario y una entrada de contraseña para la contraseña. Finalmente, hay un botón de envío en el que el usuario puede hacer clic para enviar los datos del formulario al servidor. */ -->
      <form method='post' action=" <?php echo $_SERVER['PHP_SELF']; ?>" align="center">
         <!-- Un código PHP( <php echo $_SERVER['PHP_SELF']; ?>)  variable Super Goblal que es un array asociativo que recupera el nombre del archivo de script actual y envía los datos del formulario a la misma página. Esto se usa en  el atributo `acción` del elemento de formulario HTML para especificar dónde se deben enviar los datos del formulario.  -->
         <fieldset>
            <h1>INTRODUCIR DATOS</h1>
            <legend>Formulario de Ingreso</legend>
            <div align="center">

               <label for="usuario"></label>
               <input id="usuario" type='text' name='campo_usuario' placeholder='Ingrese usuario'><br /><br />

               <label for="clave"></label>
               <input id='clave' name="campo_clave" type='password' placeholder='Ingrese clave'><br /><br />
               <!--   Crear un campo de entrada de casilla de verificación con el nombre "recordar" y el ID    "recordar". Esta casilla de verificación permite al usuario seleccionar si desea ser
               recordado o no al iniciar secion. -->
               <label for="recordar">Recordarme :</label>
               <input type="checkbox" name="recordar" id="recordar"><br /><br />

               <input type='submit' name='enviar'>
            </div>
         </fieldset>
      </form>
   </div>
</body>

</html>
