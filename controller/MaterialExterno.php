<!DOCTYPE html>
<html lang="En">

<head>
    <?php 
    require('../includes/cabeceras3.php');   
    ?>

</head>

<body background="../img/img_woman4.jpg">

    <?php
    $activa='MaterialExterno.php">Material externo <span class="sr-only">(current)</span>';
    global $activa;
    require('../includes/menus5.php');
    ?>

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../js/particles.min.js"></script>
    <script src="../../js/apps.js"></script>

       <!--lcontenedor-->
       <header class="contenedor">

    <?php
    $tipoMovimiento=$_POST['tipoMovimiento'];
    require("../model/MaterialExterno.php");

    if($tipoMovimiento=="nuevo"){
        $id_externo=$_POST['id_externo'];
        $titulo=$_POST['titulo'];//adentro de los corchetes va el name
        $sitio_web=$_POST['sitio_web'];
        $estatus=$_POST['estatus'];
        $id_categoria=$_POST['id_categoria'];
        $menus=nuevo($id_externo,$titulo,$sitio_web,$estatus,$id_categoria);
    }

    elseif($tipoMovimiento=="modificar"){
        $id_externo=$_POST['id_externo'];//adentro de los corchetes va el name
        $titulo=$_POST['titulo'];
        $sitio_web=$_POST['sitio_web'];
        $id_categoria=$_POST['id_categoria'];
        $menus=modificar($id_externo,$titulo,$sitio_web,$id_categoria);
    }
    elseif($tipoMovimiento=="listar"){
        $menus=listar();
    }
    elseif ($tipoMovimiento=="baja") {
        $id_externo=$_POST['id'];
        $menus=baja($id_externo);
    }
    elseif ($tipoMovimiento=="alta") {
        $id_externo=$_POST['id'];
        $menus=alta($id_externo);
    }


    require("../view/MaterialExterno.php");
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
