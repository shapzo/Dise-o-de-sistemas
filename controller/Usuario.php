<!DOCTYPE html>
<html lang="en" dir="lir">
<head>
    <?php require_once($_SERVER['DOCUMENT_ROOT']  . '/webs/BiBLIOTECA/includes/cabeceras2.php');?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT']  . '/webs/BiBLIOTECA/includes/lop2.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT']  . '/webs/BiBLIOTECA/includes/lateral2.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT']  . '/webs/BiBLIOTECA/includes/contenido2.php');?>
    <?php
        $tipoMovimiento=$_POST['tipoMovimiento'];
        require_once($_SERVER['DOCUMENT_ROOT']  . '/webs/BiBLIOTECA/models/TipoUsuarioModel.php');

        if ($tipoMovimiento=="nuevo") {
            $id_tipo_usuario=$_POST['id_tipo_usuario'];
            $descripcion=$_POST['descripcion'];
            $relacion=nuevo($id, $id_tipo_usuario, $descripcion);
        }else ($tipoMovimiento=="modificar") {
            # code...
        }else ($tipoMovimiento=="baja") {
            # code...
        }else ($tipoMovimiento=="eliminar") {
            # code...
        }else ($tipoMovimiento=="listar") {
            # code...
        }*/
        //<?php require_once($_SERVER['DOCUMENT_ROOT']  . '/webs/BiBLIOTECA/includes/nombreview.php.php');?>
    ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT']  . '/webs/BiBLIOTECA/includes/contenido2.php');?>
    <?php require_once($_SERVER['DOCUMENT_ROOT']  . '/webs/BiBLIOTECA/includes/pie2.php');?>

    </body>
</html>