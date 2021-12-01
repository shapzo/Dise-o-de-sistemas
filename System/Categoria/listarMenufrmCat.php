<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require('../../includes/cabeceras2.php'); ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
    <?php
    $activa = 'listarMenufrmLic.php">listas; <span class="sr-only">(current)>/span>';
    global $activa;
    require('../../includes/menus6.php');
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

        <form action="../../controller/Categoria.php" method="post">
            <input type="hidden" name="tipoMovimiento" value="listar">
            <input class="btn btn-primary" type="submit" name="guardar" value="Guardar">
            <!--button type="submit" class="btn btn-primary">submit</button>
        <button type="reset" class="btn btn-secondary">submit</button>-->

        </form>

    </header>

    <!-- Footer-->
    <?php
    include('../../includes/footer.php');
    ?>

</body>

</html>