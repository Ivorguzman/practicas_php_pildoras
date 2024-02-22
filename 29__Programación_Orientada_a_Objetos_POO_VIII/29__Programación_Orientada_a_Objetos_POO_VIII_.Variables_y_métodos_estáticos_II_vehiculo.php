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
     /* Declarar una variable estática privada llamada `` con un valor inicial de 0. Esta
     variable pertenece a la clase y no a ninguna instancia de la clase. Se puede acceder mediante
     el operador de resolución de ámbito `::` y se puede utilizar para almacenar y recuperar datos
     que se comparten entre todas las instancias de la clase. En este código específico, se utiliza
     para almacenar un monto de descuento que se aplica al precio final de la compra de un vehículo. */
     private static $ayuda = 0; // Campo estatico pertenece ;A la clase no; A la instancias
     static function subsidioGobierno()
    {
        if(date("m-d-y")>"01-31-2023" && date("m-d-y")<"03-30-2023"){
            self::$ayuda = 4500;
            echo ("DESCUENTO GUBERNAMENTAL APLICADO :". Compra_vehiculo::$ayuda ."<br /><br />");
        }
    }
    function precio_final()
    {
        return $this->precio_base - self::$ayuda;
    }

}






?>