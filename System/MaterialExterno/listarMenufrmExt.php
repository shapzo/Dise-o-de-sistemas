<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require('../../includes/cabeceras2.php'); ?>
</head>

<body>
    <?php
    $activa = 'listarMenufrmExt.php">listas; <span class="sr-only">(current)>/span>';
    global $activa;
    require('../../includes/menus5.php');
    ?>

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../js/particles.min.js"></script>
    <script src="../../js/apps.js"></script>

    <!--lcontenedor-->
    <header class="contenedor">

        <div class="div1">
            <dir style="width: 65%;">
                <div class="row" id="box-search">
                    <div class="thumbnail text-center">
                        <img src="../../img/lisc_!.jpg" loading="lazy" style="width: 85%;" class="img-responsive img-fluid rounded img3" />
                        <div class="caption">

                            <h1>
                                <span class="badge badge-pill badge-dark spam1">Listar Men&uacute;</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>

        <form action="../../controller/MaterialExterno.php" method="post">
            <input type="hidden" name="tipoMovimiento" value="listar">
            <input class="btn btn-primary" type="submit" name="guardar" value="Guardar">
            <!--button type="submit" class="btn btn-primary">submit</button>
        <button type="reset" class="btn btn-secondary">submit</button>-->

        </form>

    </header>

    <!--Parte inferior aluciva al copyright -->
    <div class="copyright">
        <p class="texto_copy">Todos los derechos reservados, queda proivida su distribucion total o parcial</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="texto_copy">Copyright &copy; 2021 </p>
    </div>

</body>

</html>