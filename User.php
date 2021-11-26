<?php
include("config/security.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    require('includes/cabeceras.php');
     ?>
</head>
<body background="img/ImgWallpHentai.jpg">

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="particles/js/particles.min.js"></script>
    <script src="particles/js/apps.js"></script>

    <header class="contenedor">

        <!--la barra de navegacion-->
        <?php
        $activa = 'index.php">Inicio<span class="sr-only">(current)</span>';
        global $activa;
        require('includes/NavBar2.php'); ?>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <!-- Imagen de inicio-->
        <div class="div1">
            <dir style="width: 65%;">
                <div class="row" id="box-search">
                    <div class="thumbnail text-center">
                        <img src="img/img1_ani.jpg" loading="lazy" style="width: 85%;" class="img-responsive img-fluid rounded img1" />
                        <div class="caption">
                            <h2>
                                <span class="badge badge-pill badge-primary spam1">Biblioteca</span>
                            </h2>
                            <h1>
                                <span class="badge badge-pill badge-info spam1">Los pedros</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <!--imagens con movimiento-->
        <div class="div2">
            <marquee crollamount="30" direction="right">
                <img loading="lazy" class="img2" src="img/imgport1.jpg" />
            </marquee>
            <marquee crollamount="30" direction="right">
                <img loading="lazy" class="img2" src="img/imgport2.jpg" />
            </marquee>
            <marquee crollamount="30" direction="left">
                <img loading="lazy" class="img2" src="img/imgport3.png" />
            </marquee>
            <marquee crollamount="30" direction="left">
                <img loading="lazy" class="img2" src="img/imgport4.jpg" />
            </marquee>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <!--describcion de la biblioteca-->
        <div class="divtex">
            <p class="texto1">Te invitamos a conocer y aprovechar las editoriales que te ofrece la biblioteca los pedros
                a través de sus extensos libros, revistas contenido variado. No dudes en 
                acudir con nosotros si tienes algún problema, nos interesa mucho apoyarte oportunamente para que alcances tus objetivos. Con esfuerzo y 
                entusiasmo aprenderás mucho, mientras construyes nuevas relaciones con tus compañeros y profesores.
            </p>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
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