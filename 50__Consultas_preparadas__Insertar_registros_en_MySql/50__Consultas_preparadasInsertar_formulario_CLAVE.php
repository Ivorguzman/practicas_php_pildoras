<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formulario de Ingreso</title>
    <link rel="stylesheet" href="linkToCSS" />

</head>

<body>
    <form method='get' action='50__Consultas_preparadasInsertar_seleccionar_opcion.php' align="center">


        <fieldset>
            <legend>Formulario de Ingreso</legend>
            <div align="center">
                <label for="usuario">Nombre :</label>
                <input id="usuario" type='text' name='campo_usuario' placeholder='Ingrese usuario'><br /><br />

                <label for="clave">Password :</label>
                <input id='clave' name="campo_clave" type='text' placeholder='Ingrese clave'><br /><br />

                <input type='submit' value='Enviar'>
            </div>

        </fieldset>
    </form>
   
</body>

</html>
