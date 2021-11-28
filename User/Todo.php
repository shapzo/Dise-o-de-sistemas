<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require('../includes/cabeceras3.php');
    ?>
</head>

<body background="../img/ImgWallpHentai.jpg">

    <!--particulas-->
    <div id="particles-js"></div>
    <script src="../particles/js/particles.min.js"></script>
    <script src="../particles/js/apps.js"></script>

    <header class="contenedor">

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Consultas</h2>
                    <h3 class="section-subheading text-muted">Seleccione lo que desea</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../img/autors1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Autores</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../img/autors2.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Categorias</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../img/autors3.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Editoriales</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../img/autors4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Usuarios</div>
                                <div class="portfolio-caption-subheading text-muted">Los tipo de usuarios</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../img/autors5.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Licenciaturas</div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../img/autors6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Libros</div>
                                <div class="portfolio-caption-subheading text-muted">Descargue el que desea</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
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

    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 autores-->

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Tabla de autores</h2>
                                <p class="item-intro text-muted">Solo disponibles los que estan en la tabla</p>
                                <img class="img-fluid d-block mx-auto" src="../img/autors1.jpg" alt="..." />

                                <?php
                                require('../includes/confbd.php');
                                global $conexion;

                                $elautores = array();
                                $sqlautores = "SELECT * FROM autores";
                                $resultadoautores = mysqli_query($conexion, $sqlautores);

                                while ($autores = mysqli_fetch_array($resultadoautores, MYSQLI_ASSOC)) {
                                    $elautores[] = $autores;
                                }
                                mysqli_close($conexion);

                                ?>

                                <table class="table table-striped table-hover">
                                    <thead id="thed">
                                        <tr id="tr">
                                            <th id="th">Clave del material</th>
                                            <th id="th">Clave del autor</th>
                                            <th id="th">Nombre</th>
                                            <th id="th">apellidos</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($elautores as $autores) {
                                            echo "<tr>";
                                            echo "<td>" . $autores['id_material'] . "</td>";
                                            echo "<td>" . $autores['id_autor'] . "</td>";
                                            echo "<td>" . $autores['nombre'] . "</td>";
                                            echo "<td>" . $autores['apellidos'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>


                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 Categorias-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Tabla de categorias</h2>
                                <p class="item-intro text-muted">Solo disponibles los que estan en la tabla</p>
                                <img class="img-fluid d-block mx-auto" src="../img/autors2.jpg" alt="..." />

                                <?php

                                require('../includes/confbd.php');
                                global $conexion;

                                $elcategorias = array();
                                $sqlcategorias = "SELECT * FROM categorias";
                                $resultadocategorias = mysqli_query($conexion, $sqlcategorias);

                                while ($categorias = mysqli_fetch_array($resultadocategorias, MYSQLI_ASSOC)) {
                                    $elcategorias[] = $categorias;
                                }
                                mysqli_close($conexion);

                                ?>

                                <table class="table table-striped table-hover">
                                    <thead id="thed">
                                        <tr id="tr">
                                            <th id="th">Clave de categoria</th>
                                            <th id="th">Describcion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($elcategorias as $categorias) {
                                            echo "<tr>";
                                            echo "<td>" . $categorias['id_categoria'] . "</td>";
                                            echo "<td>" . $categorias['descripcion'] . "</td>";

                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">tabla de editoriales</h2>
                                <p class="item-intro text-muted">Solo disponibles los que estan en la tabla</p>
                                <img class="img-fluid d-block mx-auto" src="../img/autors3.jpg" alt="..." />

                                <?php
                                require('../includes/confbd.php');
                                global $conexion;

                                $eleditoriales = array();
                                $sqleditoriales = "SELECT * FROM editoriales";
                                $resultadoeditoriales = mysqli_query($conexion, $sqleditoriales);

                                while ($editoriales = mysqli_fetch_array($resultadoeditoriales, MYSQLI_ASSOC)) {
                                    $eleditoriales[] = $editoriales;
                                }
                                mysqli_close($conexion);

                                ?>

                                <table class="table table-striped table-hover">
                                    <thead id="thed">
                                        <tr id="tr">
                                            <th id="th">Clave editorial</th>
                                            <th id="th">Describcion</th>
                                            <th id="th">Pagina web</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($eleditoriales as $editoriales) {
                                            echo "<tr>";
                                            echo "<td>" . $editoriales['id_editorial'] . "</td>";
                                            echo "<td>" . $editoriales['descripcion'] . "</td>";
                                            echo "<td>" . $editoriales['sitio_web'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Tabla de usuarios</h2>
                                <p class="item-intro text-muted">Solo disponibles los que estan en la tabla</p>
                                <img class="img-fluid d-block mx-auto" src="../img/autors4.jpg" alt="..." />

                                <?php
                                require('../includes/confbd.php');
                                global $conexion;

                                $elusuarios = array();
                                $sqlusuarios = "SELECT * FROM usuarios";
                                $resultadousuarios = mysqli_query($conexion, $sqlusuarios);

                                while ($usuarios = mysqli_fetch_array($resultadousuarios, MYSQLI_ASSOC)) {
                                    $elusuarios[] = $usuarios;
                                }
                                mysqli_close($conexion);

                                ?>

                                <table class="table table-striped table-hover">
                                    <thead id="thed">
                                        <tr id="tr">
                                            <th id="th">Clave de usuario</th>
                                            <th id="th">Nombre</th>
                                            <th id="th">Apellido</th>
                                            <th id="th">Clave de tipo de usuario</th>
                                            <th id="th">Clave de licenciatura</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($elusuarios as $usuarios) {
                                            echo "<tr>";
                                            echo "<td>" . $usuarios['id_usuario'] . "</td>";
                                            echo "<td>" . $usuarios['nombre'] . "</td>";
                                            echo "<td>" . $usuarios['apellidos'] . "</td>";
                                            echo "<td>" . $usuarios['id_tipo_usuario'] . "</td>";
                                            echo "<td>" . $usuarios['id_licenciatura'] . "</td>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">tabla de Licenciaturas</h2>
                                <p class="item-intro text-muted">Solo disponibles los que estan en la tabla</p>
                                <img class="img-fluid d-block mx-auto" src="../img/autors5.png" alt="..." />

                                <?php
                                require('../includes/confbd.php');
                                global $conexion;

                                $ellicenciaturas = array();
                                $sqllicenciaturas = "SELECT * FROM licenciaturas";
                                $resultadolicenciaturas = mysqli_query($conexion, $sqllicenciaturas);

                                while ($licenciaturas = mysqli_fetch_array($resultadolicenciaturas, MYSQLI_ASSOC)) {
                                    $ellicenciaturas[] = $licenciaturas;
                                }
                                mysqli_close($conexion);

                                ?>

                                <table class="table table-striped table-hover">
                                    <thead id="thed">
                                        <tr id="tr">
                                            <th id="th">Clave de licenciatura</th>
                                            <th id="th">Describcion</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($ellicenciaturas as $licenciaturas) {
                                            echo "<tr>";
                                            echo "<td>" . $licenciaturas['id_carrera'] . "</td>";
                                            echo "<td>" . $licenciaturas['descripcion'] . "</td>";

                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Libros de la biblioteca</h2>
                                <p class="item-intro text-muted">Solo disponibles los que estan a la vista</p>
                                <img class="img-fluid d-block mx-auto" src="../img/autors6.jpg" alt="..." />

                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>