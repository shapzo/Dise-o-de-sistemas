<!DOCTYPE html>
<html lang="en">

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
    $tipoMovimiento=$_POST['tipoMovimiento'];
    require("../model/Licenciatura.php");

    if($tipoMovimiento=="nuevo"){
        $id_carrera=$_POST['id_carrera'];
        $descripcion=$_POST['descripcion'];//adentro de los corchetes va el name
        $estatus=$_POST['estatus'];
        $menus=nuevo($id_carrera,$descripcion,$estatus);
    }

    elseif($tipoMovimiento=="modificar"){
        $id_carrera=$_POST['id_carrera'];//adentro de los corchetes va el name
        $descripcion=$_POST['descripcion'];
        $menus=modificar($id_carrera,$descripcion);
    }
    elseif($tipoMovimiento=="listar"){
        $menus=listar();
    }
    elseif ($tipoMovimiento=="baja") {
        $id_carrera=$_POST['id'];
        $menus=baja($id_carrera);
    }
    elseif ($tipoMovimiento=="alta") {
        $id_carrera=$_POST['id'];
        $menus=alta($id_carrera);
    }


    require("../view/Licenciatura.php");
    ?>

</header>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;

<div class="div1">
<input class="btn btn-primary btn-xl text-uppercase" type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
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
