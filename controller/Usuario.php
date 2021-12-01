<!DOCTYPE html>
<html lang="en" dir="lir">

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
        require("../model/Usuario.php");

        if ($tipoMovimiento == "nuevo") {
            $id_usuario = $_POST['id_usuario'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $contra = $_POST['contra'];
            $id_tipo_usuario = $_POST['id_tipo_usuario'];
            $id_licenciatura = $_POST['id_licenciatura'];
            $estatus = $_POST['estatus'];
            $menus = nuevo($id_usuario, $nombre, $apellidos, $contra, $id_tipo_usuario, $id_licenciatura, $estatus);
        } 
        elseif ($tipoMovimiento == "modificar") {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $contra = $_POST['contra'];
            $menus = modificar($nombre, $apellidos, $contra);
        } 
        elseif ($tipoMovimiento == "listar") {
            $menus = listar();
        } 
        elseif ($tipoMovimiento == "baja") {
            $id_usuario = $_POST['id'];
            $menus = baja($id_usuario);
        } 
        elseif ($tipoMovimiento == "alta") {
            $id_usuario = $_POST['id'];
            $menus = alta($id_usuario);
        }

        require("../view/Usuarios.php");
        ?>

    </header>

    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

    <div class="div1">
        <input class="btn btn-primary btn-xl text-uppercase" type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

    <!-- Footer-->
  <?php
    include('../includes/footer.php');
    ?>
</body>

</html>