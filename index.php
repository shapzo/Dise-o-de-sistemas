<!DOCTYPE html>
<html lang="Es">

<head>
    <?php require('includes/cabeceras.php'); ?>
</head>

<body>
    <header class="contenedor">
        <!--la barra de navegacion-->
        <?php
        $activa = 'index.php">Inicio<span class="sr-only">(current)</span>';
        global $activa;
        require 'includes/NavBar.php';?>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        
        <!-- Imagen de inicio-->
        <div class="div1">
            <dir style="width: 65%;">
                <div class="row" id="box-search">
                    <div class="thumbnail text-center">
                        <img src="img/Img1.png" loading="lazy" style="width: 85%;"
                            class="img-responsive img-fluid rounded img1" />
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
            <p class="texto1">La biblioteca escolar es una espacio organizado por recursos para
                el aprendizaje dentro del centro educativo, que ofrece igualdad de oportunidades
                al alumnado en cuanto al acceso a la información, la lectura y la cultura.
                Asimismo, es un lugar donde se producen procesos de enseñanza aprendizaje,
                interacciones sociales, culturales y de instrucción que dan respuesta a las
                necesidades de los estudiantes.
            </p>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    </header>

    <!--Parte inferior aluciva al copyright -->
    <div class="copyright">
        <p class="texto_copy">Todos los derechos reservados, queda proivida su distribucion total o parcial</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="texto_copy">Copyright &copy; 2021 </p>
    </div>

</body>

</html>