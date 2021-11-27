<!DOCTYPE html>
<html lang="Es">

<head>
    <!------------------------------------

    CABECERAS DE LA PAGINA, SU CONFIGURACION SE ENCUENTRA EN LA CARPETA
    DE ---  INCLUDES EN LOS ARCHIVOS DE CABESERAS{2,3,4} 

    --------------------------------------->

    <?php
    include('../../includes/cabeceras2.php');
    ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">

    <!----------------------------------------
    AREA DE LA BARRA DE NAVEGACION
    ----------------------------------------->
    <?php
    $activa = 'index.php">Categorias<span class="sr-only">(current)</span>';
    global $activa;
    require('../../includes/menus6.php'); ?>

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../particles/js/particles.min.js"></script>
    <script src="../../particles/js/apps.js"></script>

    <!--lcontenedor-->
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

        <div class="divT">
            <h1><span class="badge badge-info">Categorias</span></h1>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <div class="divtex">
            <p class="divtex">Mientras que para el pensamiento metafísico, personificado en las ideas de Aristóteles, las categorías son representaciones 
                de las cualidades objetivas que conforman el Ser (o sea, las propiedades generales de los objetos), la teoría de las categorías planteada 
                por Kant señala que las categorías son formas apriorísticas de la conciencia, puras determinaciones del pensamiento.</p>
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