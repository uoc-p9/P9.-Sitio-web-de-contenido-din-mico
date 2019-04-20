<!DOCTYPE html>
<html lang="es">

<head>
    <title>JDA</title>
    <meta charset="UTF-8">
    <meta name="JDA" content="WEB JDA">
    <LINK REL=StyleSheet HREF="css/estilo.css" TYPE="text/css" MEDIA=screen>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <div id="container">

        <!--IMAGEN CORPORATIVA-->
        <div id="cabecera">
            <a title="Inicio" href="index.html"><img src="images/logotipo.png" alt="logo corporativo" width="80%" height="90%" /></a>
        </div>

        <!--MENÚ NAVBAR-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./vista/vista_producto.php">Productos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pale Lager <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pilsner <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pale Ale <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Administración</a>
                    </li>
                </ul>
                <button style="margin-right: 1%" type="button" onclick="location.href = 'login.html'" class="btn btn-success">Inicio sesión</button>
                <button type="button" onclick="location.href = 'registro.html'" class="btn btn-danger">Registrarse</button>
            </div>
        </nav>
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







    ?>  
    </body>
    </html>