<?php
/// Metodo setter ===> Modificar propiedades de un Objeto
/// Metodo getter ===> Consultar propiedades de un Objeto


class Coche
/// Una clase puede tener sus propias constantes, variables(llamadas "propiedades"), y funciones (llamados "métodos"). 
{
   //* Declaración de propiedades
   //Las variables pertenecientes a una clase se llaman propiedades. 
   // También se les puede llamar usando otros términos como atributos,o campos
   // Si se declaran usando var,serán definidas como 'public'. 

   /// creación de las proíedades(variables) de la clase coche 
   /// propiredad Encapsulada con el modificador(private ó prtected)
   // private $ruedas;
   
  /* `protected ;` está declarando una propiedad protegida llamada `` en la clase
  `Coche`. Solo se puede acceder a esta propiedad dentro de la clase y sus subclases. */
   protected $ruedas;

   var $color;

   private $motor;
   // protected $motor;



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

   //? Antes de PHP 8.0.0,Las funciones constructoreseran creados dandole el mismo nombre que la clase (constructor de estilo antiguo). Esa sintaxis está en desuso y dará como resultado un E_DEPRECATEDerror, pero seguirá llamando a esa función como un constructor.

   function __construct()
   //  Metodo constructor
   /// Le da un estado inicial a la clase 
   {
      //  $this Siempre hace referencia a la clase donde su utilice (class Coche(){...}) == $this
      //  -> Se utiliza para referenciar una propiedad o un metodo de la clase.
      $this->ruedas = 4;
      $this->color = "";
      $this->motor = 1600;
   }


   //  Metodo Getter
   function getterRuedas()
   {
      return $this->ruedas;
   }

   function getterMotor()
   {
      return $this->motor;
   }


   function crear_color($color_coche)
   // metoda para asignar color a el objeto .-
/* Este es un método llamado `crear_color` que toma un parámetro `` y lo asigna a la
propiedad `color` del objeto. Luego imprime el objeto usando `print_r` y `var_dump` para fines de
depuración. */
   {
      $this->color = $color_coche;

      print "<pre>";
      print_r($this);
      var_dump($this);
      print "</pre>";
   }
};

/// **_Clase Camion heredadando de Clase coche_**
class Camion extends Coche // Coche (Super clase ó clase Padre), Camion(Sub-clase ó clase Hijo )
{

   function __construct()
   {
      //  -> Se utiliza para referenciar una propiedad o un metodo de la clase.
      $this->ruedas = 6;
      $this->color = 'gris';
      $this->motor = 2600;

      //  $this Siempre hace referencia a la clase donde su utilice (class Coche(){...}) == $this
      echo "<br />";
      print "<pre>";
      print_r($this);
      print "</pre>";
   }

   /// Sobres escritura de metodo establecer color  en la clase Camion de  clase Coche Heredada(extends)
   function crear_color($color_camion)
   {
      $this->color = $color_camion;
   }


   // Instruccion Parent Llama el metode de la clase padre;
   function arrancar()
   {
      parent::arrancar(); // eljecuta le metodo arrancar()
      echo ". Camion  arrancado"; // agrega esta linea al la ejecucion del metodo arrancar

   }
}; 
