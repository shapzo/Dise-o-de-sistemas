<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require('../includes/cabeceras3.php');
    ?>

</head>

<body background="../img/ImgWallpAutors.jpg">


    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../particles/js/particles.min.js"></script>
    <script src="../particles/js/apps.js"></script>

    <!--lcontenedor-->
    <header class="contenedor">

        <?php
        $tipoMovimiento = $_POST['tipoMovimiento'];
        require("../model/Categoria.php");

        if ($tipoMovimiento == "nuevo") {
            $id_categoria = $_POST['id_categoria'];
            $descripcion = $_POST['descripcion']; //adentro de los corchetes va el name
            $estatus = $_POST['estatus'];
            $menus = nuevo($id_categoria, $descripcion, $estatus);
        } elseif ($tipoMovimiento == "modificar") {
            $id_categoria = $_POST['id_categoria']; //adentro de los corchetes va el name
            $descripcion = $_POST['descripcion'];
            $menus = modificar($id_categoria, $descripcion);
        } elseif ($tipoMovimiento == "listar") {
            $menus = listar();
        } elseif ($tipoMovimiento == "baja") {
            $id_carrera = $_POST['id'];
            $menus = baja($id_carrera);
        } elseif ($tipoMovimiento == "alta") {
            $id_carrera = $_POST['id'];
            $menus = alta($id_carrera);
        }


        require("../view/Categoria.php");
        ?>

    </header>
    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

    <div class="div1">
        <input class="btn btn-primary btn-xl text-uppercase" type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

    <!-- Footer-->
    <!-- Footer-->
  <?php
    include('../includes/footer.php');
    ?>
</body>

</html>