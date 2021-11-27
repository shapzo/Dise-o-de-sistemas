<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require('../../includes/cabeceras2.php'); ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
    <?php
    $activa = 'listarMenufrmLic.php">listas; <span class="sr-only">(current)>/span>';
    global $activa;
    require('../../includes/menus4.php');
    ?>

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
                        <div class="caption">

                            <h1>
                                <span class="badge badge-pill badge-dark spam1">Listar Men&uacute;</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>

        <form action="../../controller/Editorial.php" method="post">
            <input type="hidden" name="tipoMovimiento" value="listar">
            <input class="btn btn-primary" type="submit" name="guardar" value="Guardar">
            <!--button type="submit" class="btn btn-primary">submit</button>
        <button type="reset" class="btn btn-secondary">submit</button>-->

        </form>

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