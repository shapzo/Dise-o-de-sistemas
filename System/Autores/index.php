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
  <footer class="copyright py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start texto_copy">Todos los derechos reservados, queda proivida su distribucion total o parcial</div>
                <div class="col-lg-4 my-3 my-lg-0">
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3 texto_copy" href="#!">Politica de privacidad</a>
                    <a class="link-dark text-decoration-none texto_copy" href="#!">Biblioteca Pedros</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>