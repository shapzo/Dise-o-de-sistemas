<!DOCTYPE html>
<html lang="Es">

<head>
    <?php
    require('../../includes/cabeceras2.php');
    ?>
</head>

<body>
    <?php
    $activa = 'modificarMenuE1FrmExt.php">Nuevo Men&uacute; <span class="sr-only">(current)>/span>';
    global $activa;
    require('../../includes/menus5.php');
    ?>
    <h1>Nuevo Men&uacute;</h1>
    <?php
    $id = $_POST['id'];
    require('../../includes/confbd.php');
    global $conexion;
    $sql = "SELECT * FROM material_externo WHERE id_externo='$id'";
    $ejecucionSql = @mysqli_query($conexion, $sql);

    while ($registro = @mysqli_fetch_array($ejecucionSql, MYSQLI_ASSOC)) {
        $id_externo = $registro['id_externo'];
        $titulo = $registro['titulo'];
        $sitio_web = $registro['sitio_web'];
        
    }
    ?>
    <form action="../../controller/MaterialExterno.php" method="post">
        <div class="form-group">
            <label class="form-label" for="id_externo">Clave</label>
            <input type="text" class="form-control" name="id_externo" id="id_externo" value="<?php echo $id_externo; ?>">
        </div>
        <div class="form-group">
            <label class="form-label" for="titulo">Nombre del material</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo $titulo; ?>">
        </div>
        <div class="form-group">
            <label class="form-label" for="sitio_web">Sitio web</label>
            <input type="web" class="form-control" name="sitio_web" id="sitio_web" value="<?php echo $titulo; ?>">
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