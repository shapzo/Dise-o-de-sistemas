<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    require('../includes/cabeceras3.php');   
    ?>

</head>

<body background="../img/img_woman4.jpg">

    <?php
    $activa='Licenciatura.php">Lic <span class="sr-only">(current)</span>';
    global $activa;
    require('../includes/menus.php');
    ?>

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../js/particles.min.js"></script>
    <script src="../../js/apps.js"></script>

       <!--lcontenedor-->
       <header class="contenedor">

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
        $menus=modificar($id_licenciatura,$describcion);
    }
    elseif($tipoMovimiento=="listar"){
        $menus=listar();
    }
    elseif ($tipoMovimiento=="baja") {
        $id_carrera=$_POST['id'];
        $menus=baja($id_carrera);
    }
    elseif ($tipoMovimiento=="alta") {
        $id_carrera=$_POST['id'];
        $menus=alta($id_carrera);
    }


    require("../view/Licenciatura.php");
    ?>

</header>

    <!--Parte inferior aluciva al copyright -->
    <div class="copyright">
        <p class="texto_copy">Todos los derechos reservados, queda proivida su distribucion total o parcial</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p class="texto_copy">Copyright &copy; 2021 </p>
    </div>
</body>

</html>
