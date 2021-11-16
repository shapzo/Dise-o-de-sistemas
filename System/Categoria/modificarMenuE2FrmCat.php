<!DOCTYPE html>
<html lang="Es">

<head>
    <?php
        require('../../includes/cabeceras.php');
    ?>
</head>

<body>
    <?php
        $activa='modificarMenuE1FrmCat.php">Nuevo Men&uacute; <span class="sr-only">(current)>/span>';
        global $activa;
        require('../../includes/menus6.php');
    ?>
    <h1>Nuevo Men&uacute;</h1>
    <?php
        $id=$_POST['id'];
        require('../../includes/confbd.php');
        global $conexion;
        $sql="SELECT * FROM categoria WHERE id_categoria='$id'";
        $ejecucionSql=@mysqli_query($conexion,$sql);

        while ($registro = @mysqli_fetch_array($ejecucionSql,MYSQLI_ASSOC)) {
            $id_categoria=$registro['id_categoria'];
            $descripcion=$registro['descripcion'];
        }
    ?>
    <form action="../../controller/categoria.php" method="post">
        <div class="form-group">
            <label class="form-label" for="id_categoria">id_categoria</label>
            <input type="text" class="form-control" name="id_categoria" id="id_categoria" value="<?php echo $id_categoria; ?>">
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
