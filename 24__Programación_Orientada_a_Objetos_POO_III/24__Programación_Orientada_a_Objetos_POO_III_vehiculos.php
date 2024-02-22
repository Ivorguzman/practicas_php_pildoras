<?php

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
        //  $this Siempre hace referencia a la clase donde su utilice (class Coche(){...}) == $this
        //  -> Se utiliza para referenciar una propiedad o un metodo de la clase.
       /* `->ruedas = 4;` está estableciendo el valor de la propiedad `ruedas` del objeto actual
       (instancia de la clase `Coche`) en 4. Esto se hace en el método constructor de la clase, que
       se llama cuando se crea un nuevo objeto. */
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }


    function crear_color($color_coche)
    {
        $this->color = $color_coche;
    }
}
;

/* 


// Creación de las Instancias (Objetos, Ejemplares) de la clase Coche
$renault = new Coche();
$mazda = new Coche();
$seat = new Coche();
// Modificando la propiedad color con el metodo crear_color()
$renault->crear_color("rojo");
$seat->crear_color("verde");
$mazda->crear_color("amarillo");


echo " Soy el renault y tengo un motor de $renault->motor cc "; // accediendo a la propiedad motor
echo " mi color es  $renault->color y  ";
$renault->girar(); // accediendo al el metodo girar()
echo "<br />";

echo " Soy el mazda y tengo $mazda->ruedas ruedas y mi color es $mazda->color " . "<br />";

echo "Soy el seat y mi color es $seat->color  y ";
$seat->frenar() . "<br />";


 */


/// ********************************_Clase vehiculo_ *****************
class Camion
/// Una clase puede tener sus propias constantes, variables(llamadas "propiedades"), y funciones (llamados "métodos"). 
{
   
    var $ruedas;
    var $color;
    var $motor;

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

      function __construct()
    //  Metodo constructor
    /// Le da un estado inicial a la clase 
    {
        //  $this Siempre hace referencia a la clase donde su utilice (class Coche(){...})
        //  -> Se utiliza para referenciar una propiedad o un metodo de la clase.
        $this->ruedas = 8;
        $this->color = "gris";
        $this->motor = 2600;
    }

}
;




?>
