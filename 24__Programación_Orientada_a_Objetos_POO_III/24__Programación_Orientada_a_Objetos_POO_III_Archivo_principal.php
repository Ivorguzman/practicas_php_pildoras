<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>title</title>
</head>

<body>
    <?php
    include("24__Programación_Orientada_a_Objetos_POO_III_vehiculos.php");


    $mazda = new Coche();
    $pegaso = new Camion();

    
    echo "<br />";
    echo "El carro tiene ", $mazda->ruedas, " ruedas" . "<br />";
    echo "El carro tiene ", $mazda->ruedas, " ruedas" . "<br />";
    
    
    $mazda->crear_color("naranja");
    echo "mazda es de color $mazda->color"."<br />";
    echo "Soy camion pegaso ", $pegaso->arrancar()."<br />";
    echo "Soy el mazda  y ", $mazda->frenar();
    ?>              
</body>

</html>
