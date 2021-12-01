<!DOCTYPE html>
<html lang="Es">

<head>
  <?php 
  require('../../includes/cabeceras2.php');
   ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    <?php
     $activa='index.php">Autores<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus8.php'); ?>

     <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../particles/js/particles.min.js"></script>
    <script src="../../particles/js/apps.js"></script>

    <!--la barra de navegacion-->
    <header class="contenedor">

    <div class="div1">
            <dir style="width: 65%;">
                <div class="row" id="box-search">
                    <div class="thumbnail text-center">
                        <img src="../../img/ImgAutors.jpeg" loading="lazy" style="width: 85%;" class="img-responsive img-fluid rounded img3" />
                    </div>
                </div>
            </dir>
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

    <!-- Footer-->
    <?php
    include('../../includes/footer.php');
    ?>
</body>

</html>