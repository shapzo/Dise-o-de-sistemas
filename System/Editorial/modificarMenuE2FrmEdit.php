<!DOCTYPE html>
<html lang="Es">

<head>
    <?php
    require('../../includes/cabeceras2.php');
    ?>
</head>

<body>
    <?php
    $activa = 'modificarMenuE1FrmEdit.php">Nuevo Men&uacute; <span class="sr-only">(current)>/span>';
    global $activa;
    require('../../includes/menus4.php');
    ?>
    <h1>Nuevo Men&uacute;</h1>
    <?php
    $id = $_POST['id'];
    require('../../includes/confbd.php');
    global $conexion;
    $sql = "SELECT * FROM editoriales WHERE id_editorial='$id'";
    $ejecucionSql = @mysqli_query($conexion, $sql);

    while ($registro = @mysqli_fetch_array($ejecucionSql, MYSQLI_ASSOC)) {
        $id_editorial = $registro['id_editorial'];
        $descripcion = $registro['descripcion'];
        $sitio_web = $registro['sitio_web'];
    }
    ?>
    <form action="../../controller/Editorial.php" method="post">
        <div class="form-group">
            <label class="form-label" for="id_editorial">Clave de usuario</label>
            <input type="text" class="form-control" name="id_editorial" id="id_editorial" value="<?php echo $id_editorial; ?>">
        </div>
        <div class="form-group">
            <label class="form-label" for="descripcion">Editorial</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $descripcion; ?>">
        </div>
        <div class="form-group">
            <label class="form-label" for="sitio_web">Sitio web</label>
            <input type="web" class="form-control" name="sitio_web" id="sitio_web" value="<?php echo $descripcion; ?>">
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