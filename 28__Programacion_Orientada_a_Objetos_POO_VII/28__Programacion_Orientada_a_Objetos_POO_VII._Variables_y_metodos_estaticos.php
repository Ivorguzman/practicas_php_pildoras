<?php
class Compra_vehiculo
{
    var $precio_base;
    function __construct($gama)
    {
        switch ($gama) {
            case 'urbano':
                // // Compra_vehiculo::$precio_base = 10000;
                $this->precio_base = 10000;
                break;
            case 'compacto':
                $this->precio_base = 20000;
                break;
            case 'berlina':
                $this->precio_base = 30000;
                break;

            default:
                # code...
                break;
        }
    }
    /// Se le llama Paamayim Nekudotayim, operador de resolución de ámbito o doble dos puntos "::" (double colon) al operador que permite acceder a constantes y a métodos estáticos además de poder sobreescribir propiedades o métodos de una clase.

    function climatizador()
    {
        // Compra_vehiculo::$precio_base += 2000;
        $this->precio_base += 2000;
    }
    function navegador_gps()
    {
        $this->precio_base += 2500;
    }
    function tapiceria_de_cuero($color)
    {
        switch ($color) {
            case 'blanco':
                $this->precio_base += 3000;
                break;

            case 'beige':
                $this->precio_base += 3500;
                break;


            default:
                $this->precio_base += 5000;
                break;
        }
    }
    /* `static ` está declarando una variable estática llamada `` en la clase
    `Compra_vehiculo`. Esta variable pertenece a la clase en sí, no a ninguna instancia específica
    de la clase. Se puede acceder usando la sintaxis `self::` desde cualquier método en la
    clase. En este caso, se está utilizando para calcular el precio final de compra de un vehículo
    en el método `precio_final()`. */
    static $ayuda = 4500; // Campo estatico pertenece ;A la clase no; A la instancias

    function precio_final()
    {
     /* `return ->precio_base - self::;` es un método de la clase `Compra_vehiculo` que
     calcula el precio final de compra de un vehículo restando una variable estática `` al
     precio base `` . El `self::` se refiere a la variable estática ``
     perteneciente a la clase `Compra_vehiculo`, mientras que `->precio_base` se refiere a la
     variable instancia `` perteneciente a la instancia específica de la clase . */
       return $this->precio_base - self::$ayuda;
    }

}





4
?>
