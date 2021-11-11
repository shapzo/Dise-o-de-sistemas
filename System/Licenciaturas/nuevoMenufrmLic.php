<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
  <?php require('../../includes/cabeceras.php'); ?>
  </head>
  <body>
  <?php
     $activa='nuevoMenufrmLic.php">Nuevo licenciatura<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus.php');
     ?>

      <form action="../../controller/Licenciatura.php" method="post">
      <div class="form-group">
             <label class="form-label" for="id_licenciatura">id</label>
             <input type="text" class="form-control" name="id_licenciatura" id="id_licenciatura">
        </div>
      <div class="form-group">
             <label class="form-label" for="describcion">describcion</label>
             <input type="text" class="form-control" name="describcion" id="describcion">
        </div> 
        <div class="form-group">
             <label class="form-label" for="estatus">estatus</label>
             <input type="text" class="form-control" name="estatus" id="estatus">
        </div> 
      
        <input type="hidden" name="tipoMovimiento" value="nuevo">
        <input class="btn btn-primary" type="submit" name="Guardar" value="Guardar">
        <input class="btn btn-secondary" type="reset" name="Limpiar" value="Limpiar">
         <!--button type="submit" class="btn btn-primary">Submit</button>
         <button type="submit" class="btn btn-secondary">Submit</button>-->
    </form>
  </body>
  </html>