<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php
    include('../../includes/cabeceras2.php');
    ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
    
    <?php
    $activa = 'modificarMenuE1FrmExt.php">Modificar Men&uacute; <span class="sr-only">(current)>/span>';
    global $activa;
    require('../../includes/menus5.php');
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
                                <span class="badge badge-pill badge-dark spam1">Modificar Material externo</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </dir>
        </div>

        <?php
        require('../../includes/confbd.php');
        global $conexion;
        $sql = "SELECT * FROM material_externo ORDER BY id_externo ASC";
        $ejecucionSql = @mysqli_query($conexion, $sql);
        $opcion = "";
        while ($registro = @mysqli_fetch_array($ejecucionSql, MYSQLI_ASSOC)) {
            @$opcion .= "<option value= $registro[id_externo]>$registro[titulo]</option>";
        }
        ?>
        <form action="modificarMenuE2FrmExt.php" method="post">
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
    <?php
    include('../../includes/footer.php');
    ?>

</body>

</html>