<!DOCTYPE html>
<html lang="Es" dir="ltr">

<head>
<?php require('../../includes/cabeceras.php'); ?>
</head>
<body>
    <?php
     $activa='index.php">Material Externo<span class="sr-only">(current)</span>';
     global $activa;
     require('../../includes/menus.php'); ?>

    <h1>Seccion de sunir archivos</h1>
    <h2>Sellecione su archivo</h2>
    <form action="procesa_subida.php" method="post" enctype="multipart/form-data">
        <label for="documento">Documento</label>
        <input name="documento" type="file" id="documento"><br>
        <input type="submit" name="Guardar" value="Guardar"><input type="reset" value="Limpiar">
    </form>

    <?php
        include "lista_archivos.php";
        listarArchivos("./");
    ?>

</body>

</html>