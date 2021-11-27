<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/Ico9/biblioteca_venas/includes/confbd.php');

    function nuevo($id_material,$id_autor,$nombre, $apellidos){
         global $conexion;
         $sql="INSERT INTO autores (id_material,id_autor,nombre, apellidos) VALUES ('$id_material','$id_autor','$nombre','$apellidos')";
            $ejecucion=@mysqli_query($conexion,$sql);
            $autores=array(); //relacion es el nombre de la tabla
    if ($ejecucion) {
        $sql2="SELECT * FROM autores";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($autor = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {
            $autores[]=$autor;
            }
        }
        mysqli_close($conexion);
        return $autores;
    }
    function modificar($id_material,$id_autor,$nombre, $apellidos){
        global $conexion;
        $sql="UPDATE autores SET id_autor='$id_autor', nombre, apellido='$nombre, $apellidos' WHERE id_material='$id_material'";   
        $ejecucion=@mysqli_query($conexion,$sql);
        $autores=array(); //relacion es el nombre de la tabla
        if ($ejecucion) {
            $sql2="SELECT * FROM autores ";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($autor =@mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                $autores[]=$autor;
            }
        }
        mysqli_close($conexion);
        return $autores;
    }

    function listar(){
        global $conexion;
        $autores=array(); //relacion es el nombre de la tabla
        $sql2="SELECT * FROM autores ";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($autor =@mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
            $autores[]=$autor;
        }
        mysqli_close($conexion);
        return $autores;
    }
    
    /*
    function baja ($id_material){
        $estatus="Baja";
        global $conexion;
        $sql="UPDATE  autores SET estatus='$estatus' WHERE id_material='$id_material'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $autores=array(); //relación es el nombre de la tabla
        if ($ejecucion) {
            $sql2="SELECT * FROM autores where estatus='Alta'";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($autor =@mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                $autores[]=$autor;
            }
        }
        mysqli_close($conexion);
        return $autores;
    } */

    function eliminar($id_material){
        global $conexion;
        $sql="DELETE FROM autores WHERE id_material='$id_material'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $relacion=array(); //relación es el nombre de la tabla
        if ($ejecucion) {
            $sql2="SELECT * FROM autores";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($autor =@mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                $autores[]=$autor;
            }
        }
        mysqli_close($conexion);
        return $autores;
    } 
?>
