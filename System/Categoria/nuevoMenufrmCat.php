<!DOCTYPE html>
<html lang="Es" dir="ltr">

<head>
     <?php
     include('../../includes/cabeceras2.php');
     ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
     
     <?php
     $activa = 'nuevoMenufrmCat.php">Nuevo categoria<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus6.php');
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
                                        <span class="badge badge-pill badge-dark spam1">Categorias</span>
                                   </h1>
                              </div>
                         </div>
                    </div>
               </dir>
          </div>

          <div>
               <form class="form-horizontal" role="form" action="../../controller/Categoria.php" method="post">
                    <div class="div3">
                         <div>
                              <h3><span class="badge badge-success spam2">Ingresa los datos seleccionados</span></h3>
                         </div>

                         <div class="form-group div-table">
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="id_categoria">Id</label>
                                   <input type="text" class="form-control" name="id_categoria" id="id_categoria">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="descripcion">Descripcion</label>
                                   <input type="text" class="form-control" name="descripcion" id="descripcion">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="estatus">Estatus</label>
                                   <input type="text" class="form-control" name="estatus" id="estatus">
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