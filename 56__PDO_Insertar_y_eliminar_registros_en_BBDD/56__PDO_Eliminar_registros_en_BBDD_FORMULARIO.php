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
    <h1>Eliminar articulos</h1>
    <br />
    <form name='form1' method='get' action='56__PDO_Eliminar__registros_en_BBDD_PROCESO.php'>
        <table align="center">
            <tr>
                <td><label>Codigó articulo</label></td>
                <!-- <td><input type="text" name="codigo_articulo"></td> -->
                <td><input type="text" name="buscar"></td>
            </tr>
            <tr>
                <td><input type="reset" name="borrar" value="Limpiar formulario"></td>
                <td align="center"><input type="submit" name="enviar" value="Eliminar Registro"></td>
            </tr>
        </table>
    </form>
</body>

</html>
