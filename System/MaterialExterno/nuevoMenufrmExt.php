<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
     <?php
     include('../../includes/cabeceras2.php');
     ?>
</head>

<body>
     &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
     <?php
     $activa = 'nuevoMenufrmTipo.php">Nueva editorial<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus5.php');
     ?>
     <?php
    require("../../includes/confbd.php");
    global $conexion;
    mysqli_set_charset($conexion, 'utf8');

    $sql1 = "SELECT * FROM categoria ORDER BY id_categoria ASC";
    $resultado = mysqli_query($conexion, $sql1);
    while ($categoria = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        @$listaCat .= "<option value  = $categoria[id_categoria]>$categoria[id_categoria]</option>";
    }
    ?>

     <!--particulas-->
     <div id="particles-js"></div>
     <script src="../../js/particles.min.js"></script>
     <script src="../../js/apps.js"></script>

     <!--lcontenedor-->
     <header class="contenedor">

          <div class="div1">
               <dir style="width: 65%;">
                    <div class="row" id="box-search">
                         <div class="thumbnail text-center">
                              <img src="../../img/lisc_!.jpg" loading="lazy" style="width: 85%;" class="img-responsive img-fluid rounded img3" />
                              <div class="caption">
                                   <h2>
                                        <span class="badge badge-pill badge-dark spam1">Tabla</span>
                                   </h2>
                                   <h1>
                                        <span class="badge badge-pill badge-dark spam1">Material externo</span>
                                   </h1>
                              </div>
                         </div>
                    </div>
               </dir>
          </div>

          <div>
               <form class="form-horizontal" role="form" action="../../controller/MaterialExterno.php" method="post">
                    <div class="div3">
                         <div>
                              <h3><span class="badge badge-success spam2">Ingresa los datos seleccionados</span></h3>
                         </div>

                         <div class="form-group div-table">
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="id_externo">Clave </label>
                                   <input type="text" class="form-control" name="id_externo" id="id_externo">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="titulo">Nombre del material</label>
                                   <input type="text" class="form-control" name="titulo" id="titulo">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="sitio_web">Pagina web</label>
                                   <input type="web" class="form-control" name="sitio_web" id="sitio_web">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="estatus">estatus</label>
                                   <input type="text" class="form-control" name="estatus" id="estatus">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="id_categoria">Clave de la categoria</label>
                                   <?php
                                    echo '<select class="form-control" id="id_categoria inputSeleccionado" name="id_categoria">' . $listaCat . '</select>';
                                    ?>
                              </div>

                              <input type="hidden" name="tipoMovimiento" value="nuevo">
                              <input class="btn btn-primary" type="submit" name="Guardar" value="Guardar">
                              <input class="btn btn-secondary" type="reset" name="Limpiar" value="Limpiar">
                         </div>
               </form>
          </div>


     </header>

     <!--Parte inferior aluciva al copyright -->
     <div class="copyright">
          <p class="texto_copy">Todos los derechos reservados, queda proivida su distribucion total o parcial</p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <p class="texto_copy">Copyright &copy; 2021 </p>
     </div>
</body>

</html>