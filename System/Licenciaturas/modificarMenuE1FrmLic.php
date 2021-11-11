<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require('../../includes/cabeceras.php');?>
</head>

<body>
    <?php
        $activa='modificarMenuE1FrmLic.php">Modificar Men&uacute; <span class="sr-only">(current)>/span>';
        global $activa;
        require('../../includes/menus.php');
    ?>
    <h1>Modificar Men&uacute;</h1>
    <?php
        require('../../includes/confbd.php');
        global $conexion;
        $sql="SELECT * FROM licenciaturas ORDER BY id_licenciatura  ASC";
        $ejecucionSql=@mysqli_query($conexion,$sql);
        $opcion="";
        while ($registro = @mysqli_fetch_array($ejecucionSql,MYSQLI_ASSOC)) {
            $opcion.="<option value=".$registro['id_licenciatura '].">".$registro['describcion']."</option>";
        }
    ?>
    <form action="modificarMenuE2FrmLic.php" method="post">
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

</body>

</html>
