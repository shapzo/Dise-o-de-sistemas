<!DOCTYPE html>
<html lang="Es">

<head>
  <?php 
  include('../../includes/cabeceras2.php');
   ?>
</head>

<body background="../../img/ImgWallpAutors.jpg">
    
    <?php
     $activa='index.php">Licenciaturas<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus7.php'); ?>

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
                        <img src="../../img/ImgAutors.jpeg" loading="lazy" style="width: 85%;"
                            class="img-responsive img-fluid rounded img3" />
                    </div>
                </div>
            </dir>
        </div>

        <div class="divT">
            <h1><span class="badge badge-info">Materiales</span></h1>
        </div>

        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
        
        <div class="divtex">
            <p class="divtex">Se denomina materiales a tipos de materia con características específicas.Cabe 
                señalarse que desde el punto de vista físico, se denomina materia a toda entidad observable 
                con energía, que puede ser medida y se puede ubicar de modo espaciotemporal; los materiales 
                vendrían a representar distintos tipos de materias másicas (medibles en cantidad).</p>
        </div>
    </header>

    <!-- Footer-->
    <?php
    include('../../includes/footer.php');
    ?>
    
</body>

</html>