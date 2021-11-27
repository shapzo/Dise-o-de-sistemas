<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <?php
    include('../../includes/cabeceras2.php');
    ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
    
    <?php
    $activa = 'frmBajaCat.php">Dar de baja<span class="sr-only">(current)</span>';
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
                        <div class="caption">
                            <h2>
                                <span class="badge badge-pill badge-dark spam1">Dar de baja</span>
                            </h2>
                            <h1>
                                <span class="badge badge-pill badge-dark spam1">Categorias</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>

        <?php
        require('../../includes/confbd.php');
        global $conexion;
        $sql = "SELECT * FROM categoria WHERE estatus = 'Alta' ORDER BY descripcion ASC";
        $ejecucionSql = @mysqli_query($conexion, $sql);
        $menus = "";
        while ($registro = @mysqli_fetch_array($ejecucionSql, MYSQLI_ASSOC)) {
            $menus .= "<option value= $registro[id_categoria]>$registro[descripcion]</option>";
        }
        ?>

        <form action="../../controller/Categoria.php" method="post">

            <div class="form-group">
                <label class="form-label" for="id">categorias</label>
                <select class="form-select" id="id" name="id">
                    <?php
                    echo $menus;
                    ?>
                </select>
            </div>

            <input type="hidden" name="tipoMovimiento" value="baja">
            <input class="btn btn-primary" type="submit" name="guardar" value="BAJA">
            <input class="btn btn-secondary" type="reset" name="limpiar" value="Limpiar">
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