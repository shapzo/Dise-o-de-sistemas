<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/Ico9/biblioteca_venas/includes/cabeceras.php'); ?>
</head>

<body>
    <?php
     $activa='Autor.php"> Autores <span class="sr-only">(current)</span>';
     global $activa;
     require($_SERVER['DOCUMENT_ROOT'] . '/Ico9/biblioteca_venas/includes/menus.php');
     ?>
    <?php
       $tipoMovimiento=$_POST['tipoMovimiento'];
       require($_SERVER['DOCUMENT_ROOT'] . '/Ico9/biblioteca_venas/model/Autor.php');
      # codigo....

      if ($tipoMovimiento=="nuevo") {
        $id_material=$_POST['id_material'];
        $id_autor=$_POST['id_autor'];
        $nombre=$_POST['nombre'];
        $apelldo=$_POST['apelldo'];
        $autores=nuevo($id_material,$nombre,$apelldo);

      }  elseif($tipoMovimiento=="modificar"){
        $id_material=$_POST['id_material'];
        $id_autor=$_POST['id_autor'];
        $nombre=$_POST['nombre'];
        $apelldo=$_POST['apelldo'];
        $autores=modificar($id_material,$nombre,$apelldo);
        
      }  elseif($tipoMovimiento=="eliminar"){
        $id_material=$_POST['id_material'];
        $autores=eliminar($id_material);
      }  elseif($tipoMovimiento=="listar"){
        $autores=listar();
       } 
       require($_SERVER['DOCUMENT_ROOT'] . '/Ico9/biblioteca_venas/view/Autor.php');
    ?>
</body>

</html>