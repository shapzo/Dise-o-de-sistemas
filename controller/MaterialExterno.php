<!DOCTYPE html>
<html lang="En">

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
        require("../model/MaterialExterno.php");

        if ($tipoMovimiento == "nuevo") {
            $id_externo = $_POST['id_externo'];
            $titulo = $_POST['titulo']; //adentro de los corchetes va el name
            $sitio_web = $_POST['sitio_web'];
            $estatus = $_POST['estatus'];
            $menus = nuevo($id_externo, $titulo, $sitio_web, $estatus);
        } 
        elseif ($tipoMovimiento == "modificar") {
            $id_externo = $_POST['id_externo']; //adentro de los corchetes va el name
            $titulo = $_POST['titulo'];
            $sitio_web = $_POST['sitio_web'];
            
            $menus = modificar($id_externo, $titulo, $sitio_web);
        } 
        elseif ($tipoMovimiento == "listar") {
            $menus = listar();
        } 
        elseif ($tipoMovimiento == "baja") {
            $id_externo = $_POST['id'];
            $menus = baja($id_externo);
        } 
        elseif ($tipoMovimiento == "alta") {
            $id_externo = $_POST['id'];
            $menus = alta($id_externo);
        }


        require("../view/MaterialExterno.php");
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