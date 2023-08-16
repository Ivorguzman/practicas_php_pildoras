<?php
//! EXTRAER INFORMAVIÓN DE TABLA DE PRODUCTOS DE LA BASE DE DATOS PRUEBAS


class Productos_modelo
{
   //? almacna la conexion
   private $db;



   //? Almacena los productos rescatados de la consulta
   private $productos;


   //? contructor  (conecta con base de datos)
   public function __construct()
   {

      require_once("Conectar.php");
      $this->db = Conectar::conexion();
      $this->productos = array();

  

   }


   //? Devover articulos de la tabla de productos
   public function getProductos()
   {

      $consultaSql = $this->db->query("SELECT * FROM productos");

      // ===COMPROBACIONES===
      print "<pre>\n";
      echo "<br />";
      print_r( $consultaSql );
      // ===FIN COMPROBACIONES

      while ($filas = $consultaSql->fetch(PDO::FETCH_ASSOC)) {
         $this->productos[] = $filas;

         // ===COMPROBACIONES===
         print "<pre>\n";
         echo "<br />";
         print_r( $filas);
         // ===FIN COMPROBACIONES
      }
      return $this->productos;
   }

}
