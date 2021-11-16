<!DOCTYPE html>
<html>
<head>
<?php require('../../includes/cabeceras.php'); ?>

</head>
<body>

<?php
$activa='index.php">Material Externo<span class="sr-only">(current)</span>';
global $activa;
require('../../includes/menus.php');?>

<h1>Subir archivo con PHP:</h1>
<?php
$directorio = 'archivos/';
$subir_archivo = $directorio.basename($_FILES['subir_archivo']['name']);
echo "<div>";
if (move_uploaded_file($_FILES['subir_archivo']['tmp_name'], $subir_archivo)) {
      echo "El archivo es válido y se cargó correctamente.<br><br>";
	   echo"<a href='".$subir_archivo."' target='_blank'><img src='".$subir_archivo."' width='150'></a>";
    } else {
       echo "La subida ha fallado";
    }
    echo "</div>";
?>
<br>
<div style="border:1px solid #000000; text-transform:uppercase">  
<h3 align="center"><div align="center"><a href="index.php">Volver </a></div></h3></div>

</body>
</html>


