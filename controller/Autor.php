<!DOCTYPE html>
<html lang="es" dir="ltr">

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
    require("../model/Autor.php");
    # codigo....

    if ($tipoMovimiento == "nuevo") {
      $id_material = $_POST['id_material'];
      $id_autor = $_POST['id_autor'];
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
      $autores = nuevo($id_material, $nombre, $apellidos);
    } elseif ($tipoMovimiento == "modificar") {
      $id_material = $_POST['id_material'];
      $id_autor = $_POST['id_autor'];
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
      $autores = modificar($id_material, $nombre, $apellidos);
    } elseif ($tipoMovimiento == "eliminar") {
      $id_material = $_POST['id_material'];
      $autores = eliminar($id_material);
    } elseif ($tipoMovimiento == "listar") {
      $autores = listar();
    }
    require('../view/Autor.php');
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