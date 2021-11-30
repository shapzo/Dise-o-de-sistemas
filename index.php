<!DOCTYPE html>
<html lang="en">

<head>
  <?php require('includes/cabeceras.php'); ?>
</head>

<body background="img/imgwallp.jpg">
  <!--particulas-->
  <div id="particles-js"></div>
  <script src="js/particles.min.js"></script>
  <script src="js/apps.js"></script>

  <header class="contenedor">

    <div class="div1">
      <form name="form1" method="post" action="config/sesion.php" class="form-signin">
        <h2 class="form-signin-heading">Iniciar Sesion</h2>
        <center><img src="img/logo.png" width=150 height=150 /><br></center>
        <input type="text" name="usuario" class="input-block-level" placeholder="Usuario" autocomplete="off">
        <input type="password" name="contra" class="input-block-level" placeholder="Contraseña" autocomplete="off"><br>
        
        <button class="btn btn-large btn-primary" type="submit">Acceder</button>
        <p>&nbsp;</p>

      </form>
      </script>
    </div>

    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    
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