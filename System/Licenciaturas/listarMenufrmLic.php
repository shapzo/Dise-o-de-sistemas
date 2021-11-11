<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php require('../../includes/cabeceras.php');?>
</head>

<body>
    <?php
$activa='listarMenufrmLic.php">listas; <span class="sr-only">(current)>/span>';
global $activa;
require('../../includes/menus.php');
?>
    <h1>Listar Men&uacute;</h1>
    <form action="../../controller/Licenciatura.php" method="post">
        <input type="hidden" name="tipoMovimiento" value="listar">
        <input class="btn btn-primary" type="submit" name="guardar" value="Guardar">
        <!--button type="submit" class="btn btn-primary">submit</button>
        <button type="reset" class="btn btn-secondary">submit</button>-->

    </form>

</body>

</html>
