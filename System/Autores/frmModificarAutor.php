<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <?php 
    include('../../includes/cabeceras2.php');
     ?>
</head>

<body>
    <?php
     $activa='frmModificarExterno.php">Material Externo<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus8.php'); ?>
    <h1>Modificar Material Externo</h1>

    <?php 
    require('../../includes/confbd.php');
    global $conexion;
    $sql="SELECT * FROM material_externo ORDER BY titulo ASC";
    $ejecucionSql=@mysqli_query($conexion,$sql);
    $opcion="";
    while ($registro = @mysqli_fetch_array($ejecucionSql,MYSQLI_ASSOC)) {
        $opcion.="<option value=".$registro['id_externo'].">".$registro['titulo']."</option>";
    }
?>

    <form action="frmModificarAutor2.php" method="post">

        <div class="form-group">
            <label class="form-label" for="id">Seleccionar Material</label>
            <select class="form-select" id="id" name="id">
                <?php
                    echo $opcion;
                ?>
            </select>
        </div>

        <input class="btn btn-primary" type="submit" name="guardar" value="Editar">
        <input class="btn btn-secondary" type="reset" name="limpiar" value="Limpiar">
    </form>

</body>

</html>