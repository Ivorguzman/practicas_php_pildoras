<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <link rel="stylesheet" href="linkToCSS" />
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
         width: 45%;
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
   </style>


</head>

<body>
   <div class="contenedor">

      <h1>INTRODUCIR DATOS</h1>
      <form method='post' action="<?php echo $_SERVER['PHP_SELF']; ?>" align="center">
         <!-- <form method='post' action=" " align="center"> -->
         <fieldset>
            <legend>Formulario de Ingreso</legend>
            <div align="center">
               <label for="usuario">Nombre :</label>
               <input id="usuario" type='text' name='campo_usuario' placeholder='Ingrese usuario'><br /><br />

               <label for="clave">Password :</label>
               <input id='clave' name="campo_clave" type='password' placeholder='Ingrese clave'><br /><br />

               <input type='submit' name='enviar'>
            </div>
         </fieldset>
      </form>
   </div>
</body>

</html>
