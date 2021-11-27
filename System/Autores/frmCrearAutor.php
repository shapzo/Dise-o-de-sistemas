<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
     <?php
     require('../../includes/cabeceras2.php');
     ?>
</head>

<body>
     <?php
     $activa = 'frmCrearAutor.php">Material autor<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus8.php');
     ?>

     <h1>
          <span class="badge badge-pill badge-warning spam1">Nuevo Autor</span>
     </h1>
     <form action="../../controller/Autor.php" method="post">
          <div class="form-group">
               <label class="form-label" for="id_material">Clave material</label>
               <input type="text" class="form-control" name="id_material" id="id_material">
          </div>
          <div class="form-group">
               <label class="form-label" for="id_autor">Clave Autor</label>
               <input type="text" class="form-control" name="id_autor" id="id_autor">
          </div>
          <div class="form-group">
               <label class="form-label" for="nombre">nombre</label>
               <input type="text" class="form-control" name="nombre" id="nombre">
          </div>
          <div class="form-group">
               <label class="form-label" for="apellido">apellido</label>
               <input type="text" class="form-control" name="apellido" id="apellido">
          </div>

          <input type="hidden" name="tipoMovimiento" value="nuevo">
          <input class="btn btn-primary" type="submit" name="Guardar" value="Guardar">
          <input class="btn btn-secondary" type="reset" name="Limpiar" value="Limpiar">
     </form>

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