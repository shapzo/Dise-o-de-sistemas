<!DOCTYPE html>
<html lang="Es">

<head>
    <?php
        require('../../includes/cabeceras.php');
    ?>
</head>

<body>
    <?php
        $activa='modificarMenuE1FrmUsu.php">Nuevo Men&uacute; <span class="sr-only">(current)>/span>';
        global $activa;
        require('../../includes/menus2.php');
    ?>
    <h1>Nuevo Men&uacute;</h1>
    <?php
        $id=$_POST['id'];
        require('../../includes/confbd.php');
        global $conexion;
        $sql="SELECT * FROM usuarios WHERE id_usuario='$id'";
        $ejecucionSql=@mysqli_query($conexion,$sql);

        while ($registro = @mysqli_fetch_array($ejecucionSql,MYSQLI_ASSOC)) {
            $nombre=$registro['nombre'];
            $apellido=$registro['apellido'];
            $contra=$registro['contra'];
        }
    ?>
    <form action="../../controller/Usuario.php" method="post">
        <div class="form-group">
            <label class="form-label" for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre; ?>">
        </div>
        <div class="form-group">
            <label class="form-label" for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="tutulo" value="<?php echo $apellido; ?>">
        </div>
        <div class="form-group">
            <label class="form-label" for="contra">Contraseña</label>
            <input type="password" class="form-control" name="contra" id="tutulo" value="<?php echo $contra; ?>">
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
