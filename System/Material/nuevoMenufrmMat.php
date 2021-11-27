<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
     <?php
     include('../../includes/cabeceras2.php');
     ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
     
     <?php
     $activa = 'nuevoMenufrmUsu.php">Nuevo licenciatura<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus7.php');
     ?>
     <?php
    require("../../includes/confbd.php");
    global $conexion;
    mysqli_set_charset($conexion, 'utf8');

    $sql1 = "SELECT * FROM categoria ORDER BY id_categoria ASC";
    $resultado = mysqli_query($conexion, $sql1);
    while ($categoria = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        @$listaCat .= "<option value  = $categoria[id_categoria]>$categoria[descripcion]</option>";
    }

    $sql2 = "SELECT * FROM editorial ORDER BY descripcion ASC ";
    $resultado1 = mysqli_query($conexion, $sql2);
    while ($editorial = mysqli_fetch_array($resultado1, MYSQLI_ASSOC)) {
        @$listaEdit .= "<option value  = $editorial[id_editorial]>$editorial[descripcion]</option>";
    }

    $sql2 = "SELECT * FROM editorial ORDER BY descripcion ASC ";
    $resultado1 = mysqli_query($conexion, $sql2);
    while ($editorial = mysqli_fetch_array($resultado1, MYSQLI_ASSOC)) {
     @$listaedit.= "<option value  = $editorial[sitio_web]>$editorial[sitio_web]</option>";
    }
    mysqli_close($conexion);
    ?>

     <!--particulas-->
    <div id="particles-js"></div>
    <script src="../../particles/js/particles.min.js"></script>
    <script src="../../particles/js/apps.js"></script>

     <!--lcontenedor-->
     <header class="contenedor">

          <div class="div1">
               <dir style="width: 65%;">
                    <div class="row" id="box-search">
                         <div class="thumbnail text-center">
                              <img src="../../img/ImgAutors.jpeg" loading="lazy" style="width: 85%;" class="img-responsive img-fluid rounded img3" />
                              <div class="caption">
                                   <h2>
                                        <span class="badge badge-pill badge-dark spam1">Tabla</span>
                                   </h2>
                                   <h1>
                                        <span class="badge badge-pill badge-dark spam1">Materiales</span>
                                   </h1>
                              </div>
                         </div>
                    </div>
               </dir>
          </div>

          <div>
               <form class="form-horizontal" role="form" action="../../controller/Material.php" method="post" enctype="multipart/form-data">
                    <div class="div3">
                         <div>
                              <h3><span class="badge badge-success spam2">Ingresa los datos seleccionados</span></h3>
                         </div>

                         <div class="form-group div-table">
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="id_material">Id de material</label>
                                   <input type="text" class="form-control" name="id_material" id="id_material">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="titulo">Titulo</label>
                                   <input type="text" class="form-control" name="titulo" id="titulo">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="autor">Autor</label>
                                   <input type="text" class="form-control" name="autor" id="autor">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="id_categorias">categoria</label>
                                   <?php
                                    echo '<select class="form-control" id="id_categorias inputSeleccionado" name="id_categorias">' . $listaCat . '</select>';
                                    ?>
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="id_editorial">Editorial</label>
                                   <?php
                                    echo '<select class="form-control" id="id_editorial inputSeleccionado" name="id_editorial">' . $listaEdit . '</select>';
                                    ?>
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="isbn_issn">Isbn</label>
                                   <input type="text" class="form-control" name="isbn_issn" id="isbn_issn">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="sitio_web">pagina web</label>
                                   <?php
                                    echo '<select class="form-control" id="sitio_web inputSeleccionado" name="sitio_web">' . $listaedit . '</select>';
                                    ?>
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="archivo">Subir Archivo</label>
                                   <input type="file" class="form-control" name="archivo" id="archivo">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="estatus">Estatus</label>
                                   <input type="text" class="form-control" name="estatus" id="estatus">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="licencia">Licencia</label>
                                   <input type="text" class="form-control" name="licencia" id="licencia">
                              </div>

                              <input type="hidden" name="tipoMovimiento" value="nuevo">
                              <input class="btn btn-primary" type="submit" name="Guardar" value="Guardar">
                              <input class="btn btn-secondary" type="reset" name="Limpiar" value="Limpiar">
                         </div>
               </form>
          </div>


     </header>

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