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
     $activa = 'nuevoMenufrmUsu.php">Nuevo licenciatura<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus2.php');
     ?>
     <?php
    require("../../includes/confbd.php");
    global $conexion;
    mysqli_set_charset($conexion, 'utf8');

    $sql1 = "SELECT * FROM licenciaturas ORDER BY describcion ASC";
    $resultado = mysqli_query($conexion, $sql1);
    while ($licenciaturas = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        @$listaLic .= "<option value  = $licenciaturas[describcion]>$licenciaturas[describcion]</option>";
    }

    $sql2 = "SELECT * FROM tipodeusuario ORDER BY descripcion ASC ";
    $resultado1 = mysqli_query($conexion, $sql2);
    while ($tipodeusuario = mysqli_fetch_array($resultado1, MYSQLI_ASSOC)) {
        @$listaTipo .= "<option value  = $tipodeusuario[id_tipo_usuario]>$tipodeusuario[id_tipo_usuario]</option>";
    }

    $sql2 = "SELECT * FROM tipodeusuario ORDER BY descripcion ASC ";
    $resultado1 = mysqli_query($conexion, $sql2);
    while ($tipodeusuario = mysqli_fetch_array($resultado1, MYSQLI_ASSOC)) {
     @$listausu .= "<option value  = $tipodeusuario[descripcion]>$tipodeusuario[descripcion]</option>";
    }
    mysqli_close($conexion);
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
                                        <span class="badge badge-pill badge-dark spam1">Usuarios</span>
                                   </h1>
                              </div>
                         </div>
                    </div>
               </dir>
          </div>

          <div>
               <form class="form-horizontal" role="form" action="../../controller/Usuario.php" method="post">
                    <div class="div3">
                         <div>
                              <h3><span class="badge badge-success spam2">Ingresa los datos seleccionados</span></h3>
                         </div>

                         <div class="form-group div-table">
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="id_usuario">Id de usuario</label>
                                   <?php
                                    echo '<select class="form-control" id="id_usuario inputSeleccionado" name="id_usuario">' . $listaTipo . '</select>';
                                    ?>
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="id_tipo_usuario">Tipo de usuario</label>
                                   <?php
                                    echo '<select class="form-control" id="id_tipo_usuario inputSeleccionado" name="id_tipo_usuario">' . $listausu . '</select>';
                                    ?>
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="nombre">Nombre</label>
                                   <input type="text" class="form-control" name="nombre" id="nombre">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="apellido">Apellido</label>
                                   <input type="text" class="form-control" name="apellido" id="apellido">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="contra">Contraseña</label>
                                   <input type="text" class="form-control" name="contra" id="contra">
                              </div>
                              <div class="form-group table table-striped table-hover">
                                   <label class="form-label" for="id_licenciatura">Licenciatura</label>
                                   <?php
                                    echo '<select class="form-control" id="id_licenciatura inputSeleccionado" name="id_licenciatura">' . $listaLic . '</select>';
                                    ?>
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

     <!--Parte inferior aluciva al copyright -->
     <div class="copyright">
          <p class="texto_copy">Todos los derechos reservados, queda proivida su distribucion total o parcial</p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <p class="texto_copy">Copyright &copy; 2021 </p>
     </div>
</body>

</html>