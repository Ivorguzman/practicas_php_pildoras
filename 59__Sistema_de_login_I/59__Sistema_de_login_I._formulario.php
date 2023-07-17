<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Formulario de Ingreso</title>
    <link rel="stylesheet" href="linkToCSS" />
    <style>
        body {
            background-color: #ffc;
            color: #C04000;
        }
        h1 {
            text-align: center;
            color: #00f;
            border-bottom: dotted #0000ff;
            width: 50%;
            margin: auto;
        }
        table {
            padding: 13px;
            border: 1px solid #f00;
        }
    </style>
</head>

<!-- <body> -->
    <form method='POST' action='59__Sistema_de_login_I._consultaPreparada.php' align="center">
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
