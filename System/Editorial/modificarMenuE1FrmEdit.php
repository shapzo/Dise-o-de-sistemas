<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php
    include('../../includes/cabeceras2.php');
    ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
    <?php
    $activa = 'modificarMenuE1FrmTipo.php">Modificar Men&uacute; <span class="sr-only">(current)>/span>';
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
                                <span class="badge badge-pill badge-dark spam1">Modificar editorial</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>

        <?php
        require('../../includes/confbd.php');
        global $conexion;
        $sql = "SELECT * FROM editoriales ORDER BY id_editorial ASC";
        $ejecucionSql = @mysqli_query($conexion, $sql);
        $opcion = "";
        while ($registro = @mysqli_fetch_array($ejecucionSql, MYSQLI_ASSOC)) {
            @$opcion .= "<option value= $registro[id_editorial]>$registro[descripcion]</option>";
        }
        ?>
        <form action="modificarMenuE2FrmEdit.php" method="post">
            <div class="form-group">
                <label class="form-label" for="id">Men&uacute;</label>
                <select class="form-select" id="id" name="id">
                    <?php
                    echo $opcion;
                    ?>
                </select>
            </div>
            <input type="hidden" name="tipoMovimiento" value="modificar">
            <input class="btn btn-primary" type="submit" name="guardar" value="Modificar">
            <input class="btn btn-secondary" type="reset" name="limpiar" value="limpiar">
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