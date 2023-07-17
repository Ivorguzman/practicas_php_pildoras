<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>title</title>
    <link rel="stylesheet" href="linkToCSS" />
    <style>
        body {
            background-color: #ffc;
        }

        .c {
            background-color: #10100f;
            ;
        }

        .c2 {
            background-color: #f2f208;
            width: 160px;
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

<body>
    <h1>Registro de Usuarios</h1>
    <br />
    <form align="center" name='form1' method='get' action='68_insertar_registro_Video_68.php'>
        <table class="c" align="center">
            <tr>
                <td><label>Usuario :</label></td>
                <td><input type="text" name="usuario"></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><label>Contraseña :</label></td>
                <td> <input type="password" name="clave"></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>



</body>

</html>
