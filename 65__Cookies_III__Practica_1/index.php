<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <title>title</title>
   <link rel="stylesheet" href="linkToCSS" />
</head>

<body>
   <?php
   // Se verificano se a creado  la cookie de nombre [idiomaSleccionado] si se creo verifica el valor de   idiomaSeleccionado y realiza lo que indique el if
   if (isset($_COOKIE["idiomaSeleccionado"])) {

      if ($_COOKIE["idiomaSeleccionado"] == "es") {
         header("Location:spain.php");
      } else if ($_COOKIE["idiomaSeleccionado"] == "in") {
         header("Location:ingles.php");
      }
   } 
   ?>

   <table width="25%" border="0" align="center">
      <tr>
         <td colspan="2" border="0" align="center">
            <h1>Elige Idioma</h1>
         </td>
      </tr>
      <tr>
         <td align="center"><a href="creaCookie.php?idioma=es"><img src="./img/B-esp.png" alt="Pagina Española"
                  width="90" height="60"></a></td>


         <td align="center"><a href="creaCookie.php?idioma=in"><img src="./img/B-ing.gif" alt="Pagina Inglesa"
                  width="90" height="60"></a></td>
      </tr>
   </table>
</body>

</html>
