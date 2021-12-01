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
        require("../model/Editorial.php");

        if ($tipoMovimiento == "nuevo") {
            $id_editorial = $_POST['id_editorial'];
            $descripcion = $_POST['descripcion']; //adentro de los corchetes va el name
            $sitio_web = $_POST['sitio_web'];
            $estatus = $_POST['estatus'];
            $menus = nuevo($id_editorial, $descripcion, $sitio_web, $estatus);
        } 
        elseif ($tipoMovimiento == "modificar") {
            $id_editorial = $_POST['id_editorial']; //adentro de los corchetes va el name
            $descripcion = $_POST['descripcion'];
            $sitio_web = $_POST['sitio_web'];
            $menus = modificar($id_editorial, $descripcion, $sitio_web);
        } 
        elseif ($tipoMovimiento == "listar") {
            $menus = listar();
        } 
        elseif ($tipoMovimiento == "baja") {
            $id_editorial = $_POST['id'];
            $menus = baja($id_editorial);
        } 
        elseif ($tipoMovimiento == "alta") {
            $id_editorial = $_POST['id'];
            $menus = alta($id_editorial);
        }


        require("../view/Editorial.php");
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