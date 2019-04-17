<!DOCTYPE>
<html>
    <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
    <head>
        
    </head>
    <body>
    <?php
    require_once "C:\wamp\www\P9.-Sitio-web-de-contenido-din-mico\Modelo\modelo_productos.php";
    
    $productos = new producto();

    // Mostramos todos los productos sin filtrar por categorías
    $todos_productos = $productos->get_productos();
    echo "<h1>Todas las cervezas</h1>";
        while ($datos = $todos_productos[0]->fetch()) {
          $direccion_imagen = "/assets/images".$datos["id_producto"]."/".$datos["foto_producto"];

          echo "<h3>".$datos["nombre_producto"]."</h3>";
         
          echo "<img class='imagen' alt='' src='".$direccion_imagen."'>";
          echo "<p>".$datos["descripcion_producto"]."</p>";
          echo "<p>".$datos["puntos_media"]." puntos de media</p>";
          
        }
    //Clasificamos las cervezas por categoría






    ?>  
    