<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('includes/cabeceras.php');   ?>
</head>

<body>

    <?php
    $activa = 'tipo_usuarioController.php">Tipo de usuarios <span class="sr-only">(current)</span>';
    global $activa;
    require('includes/menus.php');
    ?>

    <?php
    $tipoMovimiento = $_POST['tipoMovimiento'];
    require("tipo_usuarioModel.php");
    if ($tipoMovimiento == "nuevo") {
        $id_tipo_usuario = $_POST['id_tipo_usuario'];
        $descripcion = $_POST['descripcion']; //adentro de los corchetes va el descripcion
        $relacion = nuevo($id_tipo_usuario, $descripcion);
    } elseif ($tipoMovimiento == "modificar") {
        $id_tipo_usuario = $_POST['id_tipo_usuario']; //adentro de los corchetes va el descripcion
        $descripcion = $_POST['descripcion'];
        $relacion = modificar($id_tipo_usuario, $descripcion);
    } elseif ($tipoMovimiento == "baja") {
        $id_tipo_usuario = $_POST['id_tipo_usuario'];
        $relacion = baja($id_tipo_usuario, $descripcion);
    }
    /*elseif ($tipoMovimiento == "eliminar") {
        $id = $_POST['id'];
        $relacion = eliminar($id);
    }*/ elseif ($tipoMovimiento == "listar") {
        $relacion = listar();
    }
    require("tipo_usuarioView.php");
    ?>

</body>

</html>