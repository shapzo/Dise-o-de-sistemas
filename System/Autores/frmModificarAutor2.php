<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
<?php 
include('../../includes/cabeceras2.php');
 ?>
</head>
<body>
<?php
     $activa='frmModificarExerno2.php">Material Externo<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus8.php'); ?>
    <h1>Modificar Materiales</h1>

    <?php 
        $id=$_POST['id'];
        require('../../includes/confbd.php');
        global $conexion;
        $sql="SELECT * FROM material_externo WHERE id_externo='$id'";
        $ejecucionSql=@mysqli_query($conexion,$sql);
        while ($registro = @mysqli_fetch_array($ejecucionSql,MYSQLI_ASSOC)) {
            $id_externo=$registro['id_externo'];
            $titulo=$registro['titulo'];
            $web=$registro['sitio_web'];
        }
    ?>

    <form action="materialExternoController.php" method="post">
        
        <div class="form-group">
            <label for="titulo">Nombre de Material</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $titulo; ?>">
        </div>

        <div class="form-group">
            <label for="web">Pagina web</label>
            <input type="text" class="form-control" id="web" name="web" value="<?php echo $web; ?>">
        </div>

        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="tipoMovimiento" value="modificar">
        <input class="btn btn-primary" type="submit" name="guardar" value="Modificar">
        <input class="btn btn-secondary" type="reset" name="limpiar" value="Limpiar">
    </form>

</body>
</html>