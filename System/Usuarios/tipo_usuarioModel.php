<?php
require("includes/confbd.php");

function nuevo($id_carrera, $descripcion)
{
    $estatus = "Alta";
    global $conexion;
    $sql = "INSERT INTO carrera(id_carrera,descripcion,estatus) VALUE ('$id_carrera','$descripcion','$estatus')";
    $ejecucion = @mysqli_query($conexion, $sql);
    $relacion = array();
    if ($ejecucion) {
        $sql2 = "SELECT * FROM carrera WHERE estatus='Alta'";
        $ejecucionConsulta = @mysqli_query($conexion, $sql2);
        while ($registro = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {
            $relacion[] = $registro;
        }
    }
    mysqli_close($conexion);
    return $relacion;
}

function modificar($id_tipo_usuario, $descripcion)
{
    global $conexion;
    $sql = "UPDATE tipousuario SET descripcion='$descripcion' WHERE id_tipo_usuario='$id_tipo_usuario'";
    $ejecucion = @mysqli_query($conexion, $sql);
    $relacion = array(); //RELACION ES EL NOMBRE DE LA TABLA
    if ($ejecucion) {
        $sql2 = "SELECT * FROM tipousuario";
        $ejecucionConsulta = @mysqli_query($conexion, $sql2);
        while ($registro = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) { //REGISTRO ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
            $relacion[] = $registro;
        }
    }
    mysqli_close($conexion);
    return $relacion;
}

function listar()
{
    global $conexion;
    $relacion = array(); //RELACION ES EL NOMBRE DE LA TABLA
    $sql2 = "SELECT * FROM tipousuario";
    $ejecucionConsulta = @mysqli_query($conexion, $sql2);
    while ($registro = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) { //REGISTRO ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
        $relacion[] = $registro;
    }
    mysqli_close($conexion);
    return $relacion;
}
function baja($id_tipo_usuario)
{
    $estatus = "Baja";
    global $conexion;
    $sql = "UPDATE tipousuario SET estatus=$estatus WHERE id_tipo_usuario='$id_tipo_usuario'";
    $ejecucion = @mysqli_query($conexion, $sql);
    $relacion = array(); //RELACION ES EL NOMBRE DE LA TABLA
    if ($ejecucion) {
        $sql2 = "SELECT * FROM tipousuario";
        $ejecucionConsulta = @mysqli_query($conexion, $sql2);
        while ($registro = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) { //REGISTRO ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
            $relacion[] = $registro;
        }
    }
    mysqli_close($conexion);
    return $relacion;
}
?>