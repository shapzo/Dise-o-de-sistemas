<?php
require("includes/confbd.php");

function nuevo($id_usuario, $nombre, $apellidos, $email, $contrasena, $id_tipo_usuario, $id_carrera, $estatus)
{
    global $conexion;
    $estatus="Alta";
    $sql = "INSERT INTO usuarios(id_usuario,nombre,apellidos,email,contrasena,id_tipo_usuario,id_carrera,estatus) VALUE ('$id_usuario, $nombre, $apellidos, $email, $contrasena, $id_tipo_usuario, $id_carrera, $estatus')";
    $ejecucion = @mysqli_query($conexion, $sql);
    $relacion = array();
    if ($ejecucion) {
        $sql2 = "SELECT * FROM usuarios WHERE estatus='Alta'";
        $ejecucionConsulta = @mysqli_query($conexion, $sql2);
        while ($registro = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {
            $relacion[] = $registro;
        }
    }
    mysqli_close($conexion);
    return $relacion;
}

function modificar($id_usuario,$nombre,$apellidos,$email,$contrasena,$id_tipo_usuario,$id_carrera)
{
    global $conexion;
    $sql="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', email='$email',contrasena='$contrasena', id_tipo_usuario='$id_tipo_usuario', id_carrera='$id_carrera' WHERE id_usuario='$id_usuario'";
    $ejecucion=@mysqli_query($conexion,$sql);
    $relacion=array();
    if ($ejecucion) {
        $sql2="SELECT * FROM usuarios WHERE estatus='Alta'";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
    while ($registro= mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)){
    $relacion[]=$registro;
        }
    }
    mysqli_close($conexion);
    return $relacion;
}

function listar()
{
    global $conexion;
    $relacion = array(); //RELACION ES EL NOMBRE DE LA TABLA
    $sql2 = "SELECT * FROM usuarios";
    $ejecucionConsulta = @mysqli_query($conexion, $sql2);
    while ($registro = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) { //REGISTRO ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
        $relacion[] = $registro;
    }
    mysqli_close($conexion);
    return $relacion;
}
function baja($id_usuario)
{
    $estatus = "Baja";
    global $conexion;
    $sql="UPDATE usuarios SET estatus='$estatus' WHERE id_usuario='$id_usuario'";
    $ejecucion=@mysqli_query($conexion,$sql);
    $relacion=array();
    if ($ejecucion) {
        $sql2="SELECT * FROM usuarios WHERE estatus='Alta'";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($registro= mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)){
            $relacion[]=$registro;
        }
    }
    mysqli_close($conexion);
    return $relacion;
}
?>