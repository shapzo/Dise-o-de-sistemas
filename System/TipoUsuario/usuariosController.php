<!DOCTYPE html>
<html lang="es">

<head>
    <?php require('../includes/cabeceras.php');   ?>
</head>

<body>

    <?php
    $activa = 'usuariosController.php">Usuarios<span class="sr-only">(current)</span>';
    global $activa;
    require('../includes/menus.php');
    ?>

    <?php
    $tipoMovimiento = $_POST['tipoMovimiento'];
    require("../Models/usuariosModel.php");
    if ($tipoMovimiento == "nuevo") {
        $id_usuario = $_POST['id_usuario'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];
        $id_tipo_usuario = $_POST['id_tipo_usuario'];
        $id_carrera = $_POST['id_carrera']; //adentro de los corchetes va el descripcion
        $relacion = nuevo($id_usuario,$nombre,$apellidos,$email,$contrasena,$id_tipo_usuario,$id_carrera);
    } elseif ($tipoMovimiento == "modificar") {
        $id_usuario = $_POST['id_usuario'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];
        $id_tipo_usuario = $_POST['id_tipo_usuario'];
        $id_carrera = $_POST['id_carrera']; //adentro de los corchetes va el descripcion
        $relacion = modificar($id_usuario,$nombre,$apellidos,$email,$contrasena,$id_tipo_usuario,$id_carrera);
    } elseif ($tipoMovimiento == "baja") {
        $id_usuario = $_POST['id_usuario'];
        $relacion = baja($id_usuario);
    }
    /*elseif ($tipoMovimiento == "eliminar") {
        $id = $_POST['id'];
        $relacion = eliminar($id);
    }*/ 
    elseif ($tipoMovimiento == "listar") {
        $relacion = listar();
    }
    require("../Views/usuariosView.php");
    ?>

</body>

</html>