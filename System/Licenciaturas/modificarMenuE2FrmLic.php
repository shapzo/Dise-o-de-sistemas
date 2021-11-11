<!DOCTYPE html>
<html lang="Es">

<head>
    <?php
        require('../../includes/cabeceras.php');
    ?>
</head>

<body>
    <?php
        $activa='modificarMenuE1FrmLic.php">Nuevo Men&uacute; <span class="sr-only">(current)>/span>';
        global $activa;
        require('../../includes/menus.php');
    ?>
    <h1>Nuevo Men&uacute;</h1>
    <?php
        $id=$_POST['id'];
        require('../../includes/confbd.php');
        global $conexion;
        $sql="SELECT * FROM licenciaturas WHERE id_licenciatura='$id'";
        $ejecucionSql=@mysqli_query($conexion,$sql);

        while ($registro = @mysqli_fetch_array($ejecucionSql,MYSQLI_ASSOC)) {
            $id_licenciatura=$registro['id_licenciatura'];
            $describcion=$registro['describcion'];
        }
    ?>
    <form action="../../controller/Licenciatura.php" method="post">
        <div class="form-group">
            <label class="form-label" for="id_licenciatura">id_licenciatura</label>
            <input type="text" class="form-control" name="id_licenciatura" id="id_licenciatura" value="<?php echo $id_licenciatura; ?>">
        </div>
        <div class="form-group">
            <label class="form-label" for="describcion">T&iacute;tulo</label>
            <input type="text" class="form-control" name="describcion" id="tutulo" value="<?php echo $describcion; ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="hidden" name="tipoMovimiento" value="modificar">
        <input class="btn btn-primary" type="submit" name="guardar" value="Modificar">
        <input class="btn btn-secondary" type="reset" name="limpiar" value="Limpiar">
        <!--button type="submit" class="btn btn-primary">submit</button>
        <button type="reset" class="btn btn-secondary">submit</button>-->
    </form>
</body>

</html>
