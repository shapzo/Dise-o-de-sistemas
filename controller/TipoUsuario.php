<!DOCTYPE html>
<html lang="en" dir="lir">
<head>
    <?php 
    require('../includes/cabeceras3.php');   
    ?>
</head>
<body>
<?php
    $activa='TipoUsuario.php">Tipo Usuario <span class="sr-only">(current)</span>';
    global $activa;
    require('../includes/menus3.php');
    ?>

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../js/particles.min.js"></script>
    <script src="../../js/apps.js"></script>

       <!--lcontenedor-->
       <header class="contenedor">
    <?php
        $tipoMovimiento=$_POST['tipoMovimiento'];
        require("../model/TipoUsuario.php");

        if ($tipoMovimiento=="nuevo") {
            $id_tipo_usuario=$_POST['id_tipo_usuario'];
            $descripcion=$_POST['descripcion'];
            $estatus=$_POST['estatus'];
            $menus=nuevo($id_tipo_usuario,$descripcion,$estatus);
        }

        elseif($tipoMovimiento=="modificar"){
            $id_tipo_usuario=$_POST['id_tipo_usuario'];
            $descripcion=$_POST['descripcion'];
            $menus=modificar($id_tipo_usuario,$descripcion);
        }
        elseif($tipoMovimiento=="listar"){
            $menus=listar();
        }
        elseif ($tipoMovimiento=="baja") {
            $id_tipo_usuario=$_POST['id'];
            $menus=baja($id_tipo_usuario);
        }
        elseif ($tipoMovimiento=="alta") {
            $id_tipo_usuario=$_POST['id'];
            $menus=alta($id_tipo_usuario);
        }

    require("../view/TipoUsuario.php");
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