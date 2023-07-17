<?php

/* La clase Coche define propiedades y métodos para un automóvil, incluido un constructor que establece
valores iniciales para las propiedades. */
class Coche
/// Una clase puede tener sus propias constantes, variables(llamadas "propiedades"), y funciones (llamados "métodos"). 
{
    //* Declaración de propiedades
    //Las variables pertenecientes a una clase se llaman propiedades. 
    // También se les puede llamar usando otros términos como atributos,o campos
    // Si se declaran usando var,serán definidas como 'public'. 

    /// creación de las proíedades(variables) de la clase coche 
    var $ruedas;
    var $color;
    var $motor;



    //*  Declaración de  método

    /// creación de las metodos(funciones) de la clase coche 
    function arrancar()
    {
        echo "Estoy arrancando";
    }

    function girar()
    {
        echo "Estoy girando";
    }

    function frenar()
    {
        echo "Estoy frenando";
    }

    /// Los constructores son métodos ordinarios que se llaman durante la instanciación de su objeto

    //? Antes de PHP 8.0.0,Las funciones constructoreseran creados dandole el mismo nombre que la clase (onstructor de estilo antiguo). Esa sintaxis está en desuso y dará como resultado un E_DEPRECATEDerror, pero seguirá llamando a esa función como un constructor.

    function __construct()
    //  Metodo constructor
    /// Le da un estado inicial a la clase 
    {
        //  $this Siempre hace referencia a la clase donde su utilice (class Coche(){...})
        //  -> Se utiliza para referenciar una propiedad o un metodo de la clase.
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }
}
;




// Creación de las Instancias (Objetos, Ejemplares) de la clase Coche
$renault = new Coche();
$mazda = new Coche();
$seat = new Coche();

echo " Soy el renault y tengo un motor de $renault->motor cc "; // accediendo a la propiedad motor
$renault->girar(); // accediendo al el metodo girar()
echo "<br />";
echo " Soy el mazda y tengo $mazda->ruedas ruedas" . "<br />";
echo "Soy el seat y mi color es $seat->color  y ";
$seat->frenar();

?>
