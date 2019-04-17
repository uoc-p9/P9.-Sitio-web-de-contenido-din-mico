<?php

require_once "C:\wamp\www\P9.-Sitio-web-de-contenido-din-mico\Modelo\conexion.php";

Class Producto{
    public function get_productos(){      
        $con = new conexion();
        $sql = "SELECT * FROM productos;";
        return $con->query($sql,array());      
      }
    public function tipo_categorias($id_categoria){
        $con= new conexion();
        $sql= "SELECT * FROM productos WHERE productos.id_categoria= categorias.id_categoria;";
        return $con->query($sql,array($id_categoria)); 
     }
    
     public function get_punt_media(){      
      $con = new conexion();
      $sql = "SELECT puntos_media FROM productos;";
      return $con->query($sql,array());      
    }
}

?>
