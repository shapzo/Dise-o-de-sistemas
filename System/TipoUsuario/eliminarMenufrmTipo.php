<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require('../../includes/cabeceras.php'); ?>
</head>

<body>
    <?php
    $activa = 'modificarMenuE1FrmLic.php">Modificar Tabla <span class="sr-only">(current)>/span>';
    global $activa;
    require('../../includes/menus.php');
    ?>
    <h1>Modificar Tabla</h1>
    <?php
    require('../../includes/confbd.php');
    global $conexion;
    $sql = "SELECT * FROM licenciaturas ORDER BY id_licenciatura  ASC";
    $ejecucionSql = @mysqli_query($conexion, $sql);
    $opcion = "";
    while ($registro = @mysqli_fetch_array($ejecucionSql, MYSQLI_ASSOC)) {
        $opcion .= "<option value=" . $registro['id_licenciatura '] . ">" . $registro['describcion'] . "</option>";
    }
    ?>
    <form action="../../controller/Licenciatura.php" method="post">
        <div class="form-group">
            <label class="form-label" for="id_licenciatura ">Tabla</label>
            <select class="form-select" id_licenciatura="id_licenciatura " name="id_licenciatura ">
                <?php
                echo $opcion;
                ?>
            </select>
        </div>
        <input type="hidden" name="tipoMovimiento" value="elimina">
        <input class="btn btn-primary" type="submit" name="guardar" value="elimina">

        <!--button type="submit" class="btn btn-primary">submit</button>
        <button type="reset" class="btn btn-secondary">submit</button>-->

    </form>

</body>

</html>