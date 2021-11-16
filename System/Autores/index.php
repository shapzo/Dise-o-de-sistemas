<!DOCTYPE html>
<html lang="Es">

<head>
  <?php 
  require('../../includes/cabeceras2.php');
   ?>
</head>

<body>
    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    <?php
     $activa='index.php">Autores<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus8.php'); ?>

     <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../js/particles.min.js"></script>
    <script src="../../js/apps.js"></script>

    <!--la barra de navegacion-->
    <header class="contenedor">

        <div class="divT">
            <h1><span class="badge badge-info">Autores</span></h1>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        
        <div class="divtex">
            <p class="divtex">El término autor procede del vocablo latino auctor y se refiere al individuo que es el 
                creador, inventor, generador o productor de algo. Por ejemplo: “Dan Brown es el autor de ‘El Código Da 
                Vinci’, uno de los libros más vendidos de los últimos años”, “¡Voy a descubrir quién fue el autor de este 
                acto de vandalismo y lo castigaré!”, “Mañana habrá un debate sobre los derechos de autor en el siglo XXI”.
            </p>
        </div>
    </header>

    <!--Parte inferior aluciva al copyright -->
    <div class="copyright">
        <p class="texto_copy">Todos los derechos reservados, queda proivida su distribucion total o parcial</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="texto_copy">Copyright &copy; 2021 </p>
    </div>
</body>

</html>