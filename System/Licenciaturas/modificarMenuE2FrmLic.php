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
        $sql="SELECT * FROM licenciaturas WHERE id_carrera='$id'";
        $ejecucionSql=@mysqli_query($conexion,$sql);

        while ($registro = @mysqli_fetch_array($ejecucionSql,MYSQLI_ASSOC)) {
            $id_carrera=$registro['id_carrera'];
            $descripcion=$registro['descripcion'];
        }
    ?>
    <form action="../../controller/Licenciatura.php" method="post">
        <div class="form-group">
            <label class="form-label" for="id_carrera">Id Carrera</label>
            <input type="text" class="form-control" name="id_carrera" id="id_carrera" value="<?php echo $id_carrera; ?>">
        </div>
        <div class="form-group">
            <label class="form-label" for="descripcion">T&iacute;tulo</label>
            <input type="text" class="form-control" name="descripcion" id="tutulo" value="<?php echo $descripcion; ?>">
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
