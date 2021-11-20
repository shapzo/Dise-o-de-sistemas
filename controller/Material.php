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
    require('../includes/menus7.php');
    ?>

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../js/particles.min.js"></script>
    <script src="../../js/apps.js"></script>

       <!--lcontenedor-->
       <header class="contenedor">
    <?php
        $tipoMovimiento=$_POST['tipoMovimiento'];
        require("../model/Material.php");

        if ($tipoMovimiento=="nuevo") {
            $id_material=$_POST['id_material'];
            $titulo=$_POST['titulo'];
            $autor=$_POST['autor'];
            $id_categorias=$_POST['id_categorias'];
            $id_editorial=$_POST['id_editorial'];
            $isbn_issn=$_POST['isbn_issn'];
            $sitio_web=$_POST['sitio_web'];

            $nombre_archivo=$_FILES['archivo']['name'];
            $tipo_archivo=$_FILES['archivo']['type'];
            $tamano_archivo=$_FILES['archivo']['size'];

            $ruta='../Archivos/';
            $subir=$ruta.basename($_FILES['archivo']['name']);
            move_uploaded_file($_FILES['archivo']['tmp_name'],$subir);
            $archivo=$nombre_archivo;

            $estatus=$_POST['estatus'];
            $licencia=$_POST['licencia'];
            $menus=nuevo($id_material,$titulo,$autor,$id_categorias,$id_editorial,$isbn_issn,$sitio_web,$archivo,$estatus,$licencia);
        }

        elseif ($tipoMovimiento=="modificar") {
            
            $autor=$_POST['autor'];
            $id_categorias=$_POST['id_categorias'];
            $id_editorial=$_POST['id_editorial'];
            $menus=modificar($autor,$id_categorias,$id_editorial);
        }
        elseif($tipoMovimiento=="listar"){
            $menus=listar();
        }
        elseif ($tipoMovimiento=="baja") {
            $id_material=$_POST['id'];
            $menus=baja($id_material);
        }
        elseif ($tipoMovimiento=="alta") {
            $id_material=$_POST['id'];
            $menus=alta($id_material);
        }

    require("../view/Material.php");
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