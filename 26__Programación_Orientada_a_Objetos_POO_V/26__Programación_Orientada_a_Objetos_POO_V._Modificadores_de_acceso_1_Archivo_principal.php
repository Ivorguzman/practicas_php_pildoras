<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>title</title>
</head>

<body>
    <?php
    include("26__Programación_Orientada_a_Objetos_POO_V._Modificadores_de_acceso_1_vehiculo.php");


    $mazda = new Coche();
    $pegaso = new Camion();


    echo "<br />";

    // $mazda->crear_color("naranja");
    // echo "Soy coche mazda   y " . $mazda->arrancar() . "<br />"; // concatenndo CON [.] ==  metodo despues Stringt
    // echo "Soy coche mazda   y ", $mazda->frenar() . "<br />"; // concatenndo CON [,] ==  string despues metodo
    // echo " Soy coche mazda mi color es $mazda->color" . "<br />";
    echo " Soy coche mazda y tengo $mazda->ruedas ruedas" . "<br />";

    // echo "Soy camion pegaso y ahora tengo"   . $mazda-> ruedas = 2 ." ruedas" . "<br />";

 
    // ____________________________________________
    

    // echo "Soy camion pegaso, ", $pegaso->arrancar() . "<br />";
    // echo "Soy camion pegaso, ", $pegaso->frenar() . "<br />";
    // echo $pegaso->crear_color('rojo verdozo');
    // echo "Soy camion pegaso, mi color es  ", $pegaso->color . "<br />";
    echo "Soy camion pegaso, y tengo $pegaso->ruedas  ruedas " . "<br />";
    echo "Soy camion pegaso y ahora tengo"   . $pegaso-> ruedas=2 ." ruedas";
    ?>
</body>

</html>
