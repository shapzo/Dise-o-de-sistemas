<!DOCTYPE html>
<html>
<head>
<?php require('../../includes/cabeceras.php'); ?>

</head>
<body>

<?php
$activa='index.php">Material Externo<span class="sr-only">(current)</span>';
global $activa;
require('../../includes/menus.php');

$nombre_archivo = $_FILES['documento']['name'];
$tipo_archivo = $_FILES['documento']['type'];
$tamaño_archivo = $_FILES['documento']['size'];

     if(move_uploaded_file($_FILES['documento']['tmp_name'],$nombre_archivo)){
        echo "<br>";
        echo "<br>";
        echo "El archivo guardado es: <br>";
        echo "<br>";
        echo "<br>";
        echo "Documento:       <a href=".$nombre_archivo.">".$nombre_archivo."</a><br><br><br>";
     }else{
         echo "Ocurri&oacute; alg&uacute;n error al subir archivo. No se Guardo ni madres de tontos archivos<br>";
    }
?>

<a href="index.php">Subir otro archivo</a>

</body>
</html>


