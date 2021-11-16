<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    require('../includes/cabeceras3.php');   
    ?>

</head>

<body background="../img/img_woman4.jpg">

    <?php
    $activa='Editorial.php">Editorial <span class="sr-only">(current)</span>';
    global $activa;
    require('../includes/menus4.php');
    ?>

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../js/particles.min.js"></script>
    <script src="../../js/apps.js"></script>

       <!--lcontenedor-->
       <header class="contenedor">

    <?php
    $tipoMovimiento=$_POST['tipoMovimiento'];
    require("../model/Editorial.php");

    if($tipoMovimiento=="nuevo"){
        $id_editorial=$_POST['id_editorial'];
        $descripcion=$_POST['descripcion'];//adentro de los corchetes va el name
        $sitio_web=$_POST['sitio_web'];
        $estatus=$_POST['estatus'];
        $menus=nuevo($id_editorial,$descripcion,$sitio_web,$estatus);
    }

    elseif($tipoMovimiento=="modificar"){
        $id_editorial=$_POST['id_editorial'];//adentro de los corchetes va el name
        $descripcion=$_POST['descripcion'];
        $sitio_web=$_POST['sitio_web'];
        $menus=modificar($id_editorial,$descripcion,$sitio_web);
    }
    elseif($tipoMovimiento=="listar"){
        $menus=listar();
    }
    elseif ($tipoMovimiento=="baja") {
        $id_editorial=$_POST['id'];
        $menus=baja($id_editorial);
    }
    elseif ($tipoMovimiento=="alta") {
        $id_editorial=$_POST['id'];
        $menus=alta($id_editorial);
    }


    require("../view/Editorial.php");
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
