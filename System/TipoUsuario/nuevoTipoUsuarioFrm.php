<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <?php require('../includes/cabeceras.php'); ?>
</head>

<body>
    <?php
     $activa='nuevoTipoUsuarioFrm.php">Nuevo tipo de suaurio <span class="sr-only">(current)</span>';
     global $activa;
     require('../includes/menus.php'); 
     ?>
    <h1>Nuevo tipo de usuario</h1>
    <form action="../Controllers/tipo_usuarioController.php" method="post">
        <div class="form-group">
            <label class="form-label" for="id_tipo_usuario">Clave</label>
            <input type="text" class="form-control" name="id_tipo_usuario" id="id_tipo_usuario">
        </div>
        <div class="form-group">
            <label class="form-label" for="descripcion">Tipo de usuario</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion">
        </div>

        <input type="hidden" name="tipoMovimiento" value="nuevo">
        <input class="btn btn-primary" type="submit" name="guardar" value="Guardar">
        <input class="btn btn-secondary" type="reset" name="limpiar" value="Limpiar">
        <!--button type="submit" class="btn btn-primary">Submit</button>
         <button type="submit" class="btn btn-secondary">Submit</button>-->
    </form>
</body>

</html>