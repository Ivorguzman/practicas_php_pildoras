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
            color: #f00;
            border-bottom: dotted #f00;
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
    <h1>Borrar Registro</h1>
    <br />
    <form name='form2' method='get' action='44__Eliminanar_registros_en_BBDD_MySql._Vídeo_44.php'>
        <table align="center">
            <tr>
                <td><label>Codigó articulo</label></td>
                <td><input type="text" name="codigo_articulo"></td>
            </tr>
            
            <tr>
                <td><br /></td>
                <td><br /></td>
            </tr>
            <tr align="center">
                <td><input  type="reset" name="borrar" value="Limpiar formulario"></td>
                <td><input  type="submit" name="limpiar" value="Borrar"></td>
            </tr>
        </table>
    </form>



</body>

</html>
