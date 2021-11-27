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
        require("../model/Material.php");

        if ($tipoMovimiento == "nuevo") {
            $id_material = $_POST['id_material'];
            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $id_categorias = $_POST['id_categorias'];
            $id_editorial = $_POST['id_editorial'];
            $isbn_issn = $_POST['isbn_issn'];
            $sitio_web = $_POST['sitio_web'];

            $nombre_archivo = $_FILES['archivo']['name'];
            $tipo_archivo = $_FILES['archivo']['type'];
            $tamano_archivo = $_FILES['archivo']['size'];

            $ruta = '../Archivos/';
            $subir = $ruta . basename($_FILES['archivo']['name']);
            move_uploaded_file($_FILES['archivo']['tmp_name'], $subir);
            $archivo = $nombre_archivo;

            $estatus = $_POST['estatus'];
            $licencia = $_POST['licencia'];
            $menus = nuevo($id_material, $titulo, $autor, $id_categorias, $id_editorial, $isbn_issn, $sitio_web, $archivo, $estatus, $licencia);
        } elseif ($tipoMovimiento == "modificar") {

            $autor = $_POST['autor'];
            $id_categorias = $_POST['id_categorias'];
            $id_editorial = $_POST['id_editorial'];
            $menus = modificar($autor, $id_categorias, $id_editorial);
        } elseif ($tipoMovimiento == "listar") {
            $menus = listar();
        } elseif ($tipoMovimiento == "baja") {
            $id_material = $_POST['id'];
            $menus = baja($id_material);
        } elseif ($tipoMovimiento == "alta") {
            $id_material = $_POST['id'];
            $menus = alta($id_material);
        }

        require("../view/Material.php");
        ?>

    </header>

    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

    <div class="div1">
        <input type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

    <!-- Footer-->
    <footer class="copyright py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start texto_copy">Todos los derechos reservados, queda proivida su distribucion total o parcial</div>
                <div class="col-lg-4 my-3 my-lg-0">
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3 texto_copy" href="#!">Politica de privacidad</a>
                    <a class="link-dark text-decoration-none texto_copy" href="#!">Biblioteca Pedros</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>