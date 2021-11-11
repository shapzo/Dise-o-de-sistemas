<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('../includes/cabeceras.php');   ?>

</head>

<body>

    <?php
    $activa='controller/Licenciatura.php">Lic <span class="sr-only">(current)</span>';
    global $activa;
    require('../includes/menus.php');
    ?>
    <?php
    $tipoMovimiento=$_POST['tipoMovimiento'];
    require("../model/Licenciatura.php");

    if($tipoMovimiento=="nuevo"){
        $id_licenciatura=$_POST['id_licenciatura'];
        $describcion=$_POST['describcion'];//adentro de los corchetes va el name
        $estatus=$_POST['estatus'];
        $menus=nuevo($id_licenciatura,$describcion,$estatus);
    }

    elseif($tipoMovimiento=="modificar"){
        $id_licenciatura=$_POST['id_licenciatura'];//adentro de los corchetes va el name
        $describcion=$_POST['describcion'];
        $estatus=$_POST['estatus'];
        $menus=modificar($id_licenciatura,$describcion,$estatus);
    }

    /*elseif($tipoMovimiento=="baja"){
        #codigo...
    }*/
    elseif($tipoMovimiento=="elimina"){
        $id_licenciatura=$_POST['id_licenciatura'];
        $menus=elimina($id_licenciatura);
    }
    elseif($tipoMovimiento=="listar"){
        $menus=listar();
    }
    require("../view/Licenciatura.php");
    ?>

</body>

</html>
