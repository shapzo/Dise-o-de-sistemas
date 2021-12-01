<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
     <?php
     include('../../includes/cabeceras2.php');
     ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
     
     <?php
     $activa = 'nuevoMenufrmLic.php">Nuevo licenciatura<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus.php');
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
                                        <span class="badge badge-pill badge-dark spam1">Licenciaturas</span>
                                   </h1>
                              </div>
                         </div>
                    </div>
               </dir>
          </div>

          <div>
               <form class="form-horizontal" role="form" action="../../controller/Licenciatura.php" method="post">
                    <div class="div3">
                         <div>
                              <h3><span class="badge badge-success spam2">Ingresa los datos seleccionados</span></h3>
                         </div>

                         <div class="form-group div-table">
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="id_carrera">Id</label>
                                   <input type="text" class="form-control" name="id_carrera" id="id_carrera">
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
    <?php
    include('../../includes/footer.php');
    ?>
    
</body>

</html>