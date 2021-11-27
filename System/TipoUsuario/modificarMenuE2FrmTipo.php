<!DOCTYPE html>
<html lang="Es">

<head>
    <?php
    require('../../includes/cabeceras2.php');
    ?>
</head>

<body>
    <?php
    $activa = 'modificarMenuE1FrmLic.php">Nuevo Men&uacute; <span class="sr-only">(current)>/span>';
    global $activa;
    require('../../includes/menus3.php');
    ?>
    <h1>Nuevo Men&uacute;</h1>
    <?php
    $id = $_POST['id'];
    require('../../includes/confbd.php');
    global $conexion;
    $sql = "SELECT * FROM tipousuario WHERE id_tipo_usuario='$id'";
    $ejecucionSql = @mysqli_query($conexion, $sql);

    while ($registro = @mysqli_fetch_array($ejecucionSql, MYSQLI_ASSOC)) {
        $id_tipo_usuario = $registro['id_tipo_usuario'];
        $descripcion = $registro['descripcion'];
    }
    ?>
    <form action="../../controller/TipoUsuario.php" method="post">
        <div class="form-group">
            <label class="form-label" for="id_tipo_usuario">Clave de usuario</label>
            <input type="text" class="form-control" name="id_tipo_usuario" id="id_tipo_usuario" value="<?php echo $id_tipo_usuario; ?>">
        </div>
        <div class="form-group">
            <label class="form-label" for="descripcion">Tipo de usuario</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?php echo $descripcion; ?>">
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