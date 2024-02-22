<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Consultar articulo</title>
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
    <form method='get' action='54__PDO_Marcadores_en_consultas_preparadas._Vídeo_54.php' align="center">
        <fieldset>
            <legend>Consultar articulo</legend>
            <div align="center">
                <label>Sección: <input type="text" placeholder="Introdusca sección"
                        name="seccion"></label><br /><br />
                <!-- <input align="center" id="consulta" type='submit' name="consulta" value='Consultar registro' disabled> -->
                <label for="clave">Pais de origen :</label>
                <input id='clave' name="pais_origen" type='text' placeholder='Ingrese Pais de importación'><br /><br />
                <input align="center" id="consulta" type='submit' name="consulta" value='Consultar registro'>
            </div>

        </fieldset>
    </form>

</body>

</html>

</html>
