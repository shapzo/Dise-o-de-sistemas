<!DOCTYPE html>
<html lang="en" dir="lir">
<head>
    <?php 
    require('../includes/cabeceras3.php');   
    ?>
</head>
<body>
<?php
    $activa='Usuario.php">Usuario <span class="sr-only">(current)</span>';
    global $activa;
    require('../includes/menus2.php');
    ?>

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../js/particles.min.js"></script>
    <script src="../../js/apps.js"></script>

       <!--lcontenedor-->
       <header class="contenedor">
    <?php
        $tipoMovimiento=$_POST['tipoMovimiento'];
        require("../model/Usuario.php");

        if ($tipoMovimiento=="nuevo") {
            $id_usuario=$_POST['id_usuario'];
            $id_tipo_usuario=$_POST['id_tipo_usuario'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $contra=$_POST['contra'];
            $id_licenciatura=$_POST['id_licenciatura'];
            $estatus=$_POST['estatus'];
            $menus=nuevo($id_usuario,$id_tipo_usuario,$nombre,$apellido,$contra,$id_licenciatura,$estatus);
        }

        elseif ($tipoMovimiento=="modificar") {
            
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $contra=$_POST['contra'];
            $menus=modificar($nombre,$apellido,$contra);
        }
        elseif($tipoMovimiento=="listar"){
            $menus=listar();
        }
        elseif ($tipoMovimiento=="baja") {
            $id_usuario=$_POST['id'];
            $menus=baja($id_usuario);
        }
        elseif ($tipoMovimiento=="alta") {
            $id_usuario=$_POST['id'];
            $menus=alta($id_usuario);
        }

    require("../view/Usuarios.php");
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