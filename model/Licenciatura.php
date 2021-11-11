<?php
    require("../includes/confbd.php");

    //Solo se usa si se trabaja con base de datos

    function nuevo($id_licenciatura,$describcion,$estatus){
        global $conexion;
        $estatus="Alta";
        $sql="INSERT INTO licenciaturas(id_licenciatura , describcion, estatus) VALUES ('$id_licenciatura', '$describcion','$estatus')";
        $ejecucion=@mysqli_query($conexion,$sql);
        $licenciaturas=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM licenciaturas WHERE estatus='Alta'";  //cambiar a la s k estan en alta
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($menu = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//REGISTRO ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $licenciaturas[]=$menu;
            }
        }
        mysqli_close($conexion);
        return $licenciaturas;
    }
    /*function elimina($id){
        global $conexion;
        $sql="DELETE FROM licenciaturas WHERE id_licenciatura ='$id'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $licenciaturas=array(); //relación es el describcion destatus
        if ($ejecucion) {
            $sql2="SELECT * FROM licenciaturas  WHERE estatu='Alta'";  
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($registro = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                $licenciaturas[]=$registro;
            }
        }
        mysqli_close($conexion);
        return $licenciaturas;
    }*/

    function modificar($id,$describcion,$estatus){
        global $conexion;
        $sql="UPDATE licenciaturas SET describcion='$estatusibcion',$estatus='$titulo' WHERE id_licenciatura ='$id'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $licenciaturas=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM licenciaturas WHERE estatu='Alta'";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($registro = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//REGISTRO ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $licenciaturas[]=$registro;
            }
        }
        mysqli_close($conexion);
        return $licenciaturas;
    }


    function listar(){
        global $conexion;
        $licenciaturas=array();//RELACION ES EL NOMBRE DE LA TABLA
        $sql2="SELECT * FROM licenciaturas WHERE estatu='Alta'";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($registro = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//REGISTRO ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
            $licenciaturas[]=$registro;
            }
              mysqli_close($conexion);
            return $licenciaturas;
        }

    
    function elimina($id,$describcion,$estatus){  //ojo papi lo kambie, pero es baja
        global $conexion;
        $sql="UPDATE relacion SET estatus=$estatus WHERE id_licenciatura ='$id'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $relacion=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM licenciaturas";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($registro_que_sea = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//REGISTRO ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $relacion[]=$registro_que_sea;
            }

        }
    }
    

?>
