<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>title</title>
</head>

<body>
    <?php
    include("27__Programación_Orientada_a_Objetos_POO_VI._Modificadores_de_acceso_2_vehiculo.php");


    $mazda = new Coche();
    $pegaso = new Camion();
    $mack = new Camion();


    echo "<br />";
    // ______________class Coche (SUPER CLASE)____________________
    // echo " Soy coche mazda y tengo " . $mazda->ruedas . " ruedas  <br />";
    echo " Soy coche mazda y tengo " . $mazda->getterRuedas() . " ruedas ";
    echo"<br />";
    echo " Soy coche mazda y soy purpura " .$mazda->crear_color("purpura");

    // $mazda->ruedas = 5;
    // echo " Soy coche mazday ahora tengo " . $mazda->ruedas . " ruedas  <br />";
    echo " Soy coche mazda y ahora tengo " . $mazda->getterRuedas() . " ruedas  <br />";
    echo "<br /><br />";


    // echo " Soy coche mazda y tengo  un motor de " . $mazda->motor . " cc  <br />";
    echo " Soy coche mazda y tengo  un motor de " . $mazda->getterMotor() . " cc  <br />";
    // $mazda->motor = 2000;
    // echo " Soy coche mazda ,y ahora tengo un motor de " . $mazda->getterMotor() . " cc  <br />";
    


    // _____________ class Camion extends Coche (HIJA) ______________________
    // echo "Soy camion pegaso, y tengo  ruedas " . $pegaso->ruedas . "<br />";
    echo "Soy camion pegaso, y tengo " . $pegaso->getterRuedas() . " ruedas <br />";

    // $pegaso->ruedas = 10;
    //  echo "Soy camion pegaso y ahora tengo "   . $pegaso-> ruedas ." ruedas " . "<br />";
    echo "Soy camion pegaso,y ahora tengo " . $pegaso->getterRuedas() . " ruedas <br />";
    echo "<br /><br />";


    // echo " Soy coche mazda y tengo  un motor de " . $mazda->motor . " cc  <br />";
    echo " Soy coche mazda y tengo  un motor de " . $mazda->getterMotor() . " cc  <br />";

    // $mazda->motor = 2000;
    // echo " Soy coche mazda ,y ahora tengo un motor de " . $mazda->getterMotor() . " cc  <br />";
    
    //********************************** */
    
    // echo "Soy camion mack, y tengo $mack->ruedas  ruedas " . "<br />";
    echo "Soy camion mack, y tengo " . $mack->getterRuedas() . " ruedas <br />";
    // $mack->ruedas = 14;
    
    // echo "Soy camion mack, y ahora tengo $mack->ruedas  ruedas " . "<br />";
    echo "Soy camion mack, y ahora tengo " . $mack->getterRuedas() . " ruedas <br />";

    echo "Soy camion mack y tengo  un motor de " . $mack->motor . " cc  <br />";
    echo "Soy camion mack y tengo  un motor de " . $mack->getterMotor() . " cc  <br />";



    ?>
</body>

</html>
