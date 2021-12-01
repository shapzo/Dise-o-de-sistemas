<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <?php
    include('../../includes/cabeceras2.php');
    ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
    
    <?php
    $activa = 'frmAltaUsu.php">Dar de alta<span class="sr-only">(current)</span>';
    global $activa;
    require('../../includes/menus2.php'); ?>

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
                                <span class="badge badge-pill badge-dark spam1">Dar de alta</span>
                            </h2>
                            <h1>
                                <span class="badge badge-pill badge-dark spam1">Licenciaturas</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>

        <?php
        require('../../includes/confbd.php');
        global $conexion;
        $sql = "SELECT * FROM usuarios WHERE estatus = 'baja' ORDER BY id_usuario ASC";
        $ejecucionSql = @mysqli_query($conexion, $sql);
        $menus = "";
        while ($registro = @mysqli_fetch_array($ejecucionSql, MYSQLI_ASSOC)) {
            @$menus .= "<option value= $registro[id_licenciatura]>$registro[id_usuario]</option>";
        }
        ?>

        <form action="../../controller/Usuario.php" method="post">

            <div class="form-group">
                <label class="form-label" for="id">Usuarios</label>
                <select class="form-select" id="id" name="id">
                    <?php
                    echo $menus;
                    ?>
                </select>
            </div>

            <input type="hidden" name="tipoMovimiento" value="alta">
            <input class="btn btn-primary" type="submit" name="guardar" value="ALTA">
            <input class="btn btn-secondary" type="reset" name="limpiar" value="Limpiar">
        </form>

    </header>

    <!-- Footer-->
    <?php
    include('../../includes/footer.php');
    ?>

</body>

</html>