<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/htdocs/BIBLIOTECA/include/bd_conf.php');

function nuevo ($id_tipo_usuario,$descripcion){
    global $conexion;
    $sql="INSERT INTO tipoUsuarios(id_tipo_usuario,descripcion) VALUES ('$id_tipo_usuario',$descripcion')";
    $ejecucion=@mysqli_query($conexion,$sql);
    $relacion=array[]; //relacion es el nombre de la tabla
    if ($ejecucion){
        $sql2="SELECT * FROM tipoUsuarios";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
    while ($registro = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)){
           $relacion[]=$registro:
        }
    }
    mysqli_close($conexion);
    return $relacion;
}

function modificar ($campo1,$campo2,$campoN){
    global $conexion;
    $sql="UPDATE tipoUsuarios SET campo1='$campo1Nuevo',campo2='$campo2',campoN=?$campoN' WHERE campo1='$campo1'";
    $ejecucion=@mysqli_query($conexion,$sql);
    $relacion=array(): //relacion es el nombre de la tabla
    if($ejecucion){
        $sql2="SELECT * FROMtipoUsuarios";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($registro = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)){
            $relacion[]=$registro:
        }
    }
    mysqli_close($conexion);
    return $relacion;
}

*/
/* 
function listar(){
 global $conexion;
 $relacion=array(): //relacion es el nombre de la tabla
        $sql2="SELECT * FROM relacion";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($registro = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)){
            $relacion[]=$registro;

        }
        mysqli_close($conexion);
        return $relacion;
    }
    */
    /*