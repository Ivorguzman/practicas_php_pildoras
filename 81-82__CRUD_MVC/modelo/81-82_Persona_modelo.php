<?php
require_once("modelo/81-82_Conectar_modelo.php");



//! EXTRAER INFORMAVIÓN DE TABLA DE PRODUCTOS DE LA BASE DE DATOS PRUEBAS
class Personas_modelo
{
   //? almacena la conexion
   private $db;



   //? Almacena los productos rescatados de la consulta
   private $personas;




   //? contructor  (conecta con base de datos)
   /**
    * La función es un constructor que inicializa una conexión de base de datos y una matriz vacía para
    * almacenar personas.
    */
   public function __construct()
   {

      $this->db = Conectar::conexion();
      $this->personas = array();
   }


   // GETTERS  SETTERS
   //? Devover articulos de la tabla de productos

   /* La función `getPersonas()` recupera datos de la tabla "datos_usuarios" en la base de datos y los
  almacena en el array ``. Ejecuta una consulta SQL para seleccionar todos los registros de
  la tabla y luego recorre el conjunto de resultados para buscar cada registro y agregarlo a la
  matriz ``. Finalmente devuelve el array `` que contiene todos los registros de
  la tabla. */
   public function getPersonas()
   {

      require_once("modelo/81-82_Paginacion_modelo.php");

      /* La línea ` = ->db->query("SELECT * FROM datos_usuarios");` está ejecutando una   consulta SQL para seleccionar todas las columnas (`*`) de la tabla `datos_usuarios` en la base  de datos. El resultado de esta consulta se almacena en la variable ``. */
      $consultaSql = $this->db->query("SELECT * FROM datos_usuarios LIMIT $empezarDesDe,$registrosPorPagina ");


      /*
      `fetch(PDO::FETCH_ASSOC) Y fetch(PDO::FETCH_OBJ) `son métodos utilizados pararecuperar una fila
       de un conjunto de resultados devuelto poruna consulta de base de datos. En este caso, 
       se utiliza pararecuperar cada fila de datos del conjunto de resultadosdevuelto
       por la consulta SQL `SELECT * FROM datos_usuarios`. El código ` while ( = ->fetch(PDO::FETCH_ASSOC))`
       está recuperando cadafila de datos del conjunto de resultados devuelto por la consulta SQL.
       El bloque de código que proporcionó es un bucle while que recupera cada fila
       de datos del conjuntode resultados devuelto por la consulta SQL `->fetch(PDO::FETCH_OBJ)`
      */

      // todo **** Version fetch(PDO::FETCH_OBJ)) *****************
     // while ($registros = $consultaSql->fetch(PDO::FETCH_OBJ)) {

      // todo **** Version fetch(PDO::FETCH_ASSOC) *****************
      while ($registros = $consultaSql->fetch(PDO::FETCH_ASSOC)) {
         $this->personas[] = $registros;

         // // ===COMPROBACIONES===
         // print "<pre>\n";
         // echo "<br />";
         // print_r($registros);
         // // ===FIN COMPROBACIONES
      }

      /* La línea `return ->personas;` devuelve la matriz `->personas` del método
      `getPersonas()`. Esto significa que cuando se llama al método `getPersonas()`, recuperará los
      datos de la tabla de la base de datos y los almacenará en la matriz `->personas`. Luego,
      devolverá este arreglo para que pueda ser usado fuera de la clase `Personas_modelo`. */
      return $this->personas;
   }
}
