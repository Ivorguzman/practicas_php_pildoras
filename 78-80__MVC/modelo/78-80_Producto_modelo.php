<?php
//! EXTRAER INFORMAVIÓN DE TABLA DE PRODUCTOS DE LA BASE DE DATOS PRUEBAS


class Productos_modelo
{
   //? almacena la conexion
   private $db;



   //? Almacena los productos rescatados de la consulta
   private $productos;




   //? contructor  (conecta con base de datos)
   /* La función `__construct()` es un método constructor en PHP. Se llama automáticamente cuando se crea
un objeto a partir de una clase. En este código específico, la función constructora se utiliza para
establecer una conexión a la base de datos e inicializar la matriz ` $this->productos = array()`. */
   public function __construct()
   {

      require_once("modelo/78-80_Conectar.php");
      /* `->db = Conectar::conexion();` está asignando el resultado del método `conexion()` de la clase  `Conectar` a la propiedad `` de la clase `Productos_modelo`. */
      $this->db = Conectar::conexion();
      $this->productos = array();
   }

   // GETTERS  SETTERS
   //? Devover articulos de la tabla de productos
   /**
    * La función `getProductos` recupera todos los registros de la tabla "productos" en una base de datos
    * y los devuelve como una matriz.retornando una gama de productos.
    */
   public function getProductos()
   {

      /* La línea ` = ->db->query("SELECT * FROM productos");` está ejecutando una
      consulta SQL para seleccionar todas las columnas (`Campos`) de la tabla `productos` en la base de
      datos . El resultado de la consulta se almacena en la variable `$db`. */
      $consultaSql = $this->db->query("SELECT * FROM productos");

      /* El bloque de código ` while ( = ->fetch(PDO::FETCH_ASSOC)) { ... }` es
      un bucle que itera sobre el conjunto de resultados devuelto por la consulta de la base de
      datos. NOTA:  fetch(PDO::FETCH_ASSOC) Obtiene la siguiente fila registros de la base de la BBDD */
      while ($registros = $consultaSql->fetch(PDO::FETCH_ASSOC)) {
         $this->productos[] = $registros;

         // // ===COMPROBACIONES===
         // print "<pre>\n";
         // echo "<br />";
         // print_r($registros);
         // // ===FIN COMPROBACIONES
      }
      /* La línea `return ->productos;` devuelve el conjunto de productos que se obtuvieron de la
      base de datos. Esto permite que otras partes del código accedan y utilicen los productos que
      se recuperaron. */
      return $this->productos;
   }
}
