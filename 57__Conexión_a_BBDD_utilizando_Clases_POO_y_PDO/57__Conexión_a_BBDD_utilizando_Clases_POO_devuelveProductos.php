<?php
require("57__Conexión_a_BBDD_utilizando_Clases_POO_conexion.php");

// // parent::__construct()==> sirve para invocar a un método constructor que existe en una clase padre de la cual estamos heredando
class DevuelveProductos extends Conexion
{

   /**
    * Esta es una función constructora en PHP que hereda de la clase principal e incluye código
    * comentado para fines de depuración.
    */
    function __construct()
    {
      /* `parent::__construct();` está llamando al método constructor de la clase padre (en este caso,
      la clase `Conexion`) desde dentro del método constructor de la clase `DevuelveProductos`. Esto
      se hace para garantizar que el constructor de la clase principal se ejecute antes que el
      constructor de la clase secundaria, lo que permite que la clase secundaria herede cualquier
      propiedad o método definido en la clase principal. */
        parent::__construct(); // heredando contructor de la super calse( clase padre)

        // // ===COMPROBACIONES===
        // print "<pre>\n";
        // print_r(parent::__construct());
        // // print_r($this);
        // echo "<br />";
        // print "<pre>";
        // // ===FIN COMPROBACIONES===
    }



    public function get_productos()
    {
     
        $consulta = " SELECT * FROM productos"; // creando y almacenando la sentencia SQL 

        $resultados = $this->conexion_db->query($consulta); // generamos la consulta

        $productos = $resultados->fetch_all(MYSQLI_ASSOC); // obtenemos la consulta  sql en un array asosiativo

        // // ===COMPROBACIONES===
        // echo "<br />**************************<br />";
        // print "<pre>\n";
        // print_r($consulta);
        // echo "<br /><br />**************************<br />";
        // print_r($resultados);
        // echo "<br /><br />**************************<br />";
        // print_r($productos);
        // echo "<br />";
        // print "<pre>";
        // // ===FIN COMPROBACIONES===

        return $productos; // retornamos el contenido de productos;



    }

}


// $x = new DevuelveProductos();
// 
// echo $x->get_productos();

?>