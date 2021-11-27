<?php
    require("../includes/confbd.php");

    //Solo se usa si se trabaja con base de datos

    function nuevo($id_carrera,$descripcion,$estatus){
        global $conexion;
        $estatus="Alta";
        $sql="INSERT INTO licenciaturas(id_carrera , descripcion, estatus) VALUES ('$id_carrera', '$descripcion','$estatus')";
        $ejecucion=@mysqli_query($conexion,$sql);
        $licenciaturas=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM licenciaturas WHERE estatus='Alta'";  //cambiar a la s k estan en alta
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($menu = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $licenciaturas[]=$menu;
            }
        }
        mysqli_close($conexion);
        return $licenciaturas;
    }

    function modificar($id_carrera,$descripcion){
        global $conexion;
        $sql="UPDATE licenciaturas SET descripcion='$descripcion' WHERE id_carrera ='$id_carrera'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $licenciaturas=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM licenciaturas WHERE estatus='Alta'";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($valor= mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $licenciaturas[]=$valor;
            }
        }
        mysqli_close($conexion);
        return $licenciaturas;
    }


    function listar(){
        global $conexion;
        $licenciaturas=array();//RELACION ES EL NOMBRE DE LA TABLA
        $sql2="SELECT * FROM licenciaturas WHERE estatus='Alta'";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($valor = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
            $licenciaturas[]=$valor;
            }
              mysqli_close($conexion);
            return $licenciaturas;
        }


        function baja($id_carrera){ 
            $estatus='baja';
            global $conexion;
            $sql="UPDATE licenciaturas SET estatus='$estatus' WHERE id_carrera='$id_carrera'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM licenciaturas WHERE estatus='Alta'";
                $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($valor = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                    $relacion[]=$valor;
                }
            mysqli_close($conexion);
            return $relacion;
            }
        } 
    
        function alta($id_carrera){ 
            $estatus='Alta';
            global $conexion;
            $sql="UPDATE licenciaturas SET estatus='$estatus' WHERE id_carrera='$id_carrera'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM licenciaturas WHERE estatus='Alta'";
                $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($valor = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                    $relacion[]=$valor;
                }
            mysqli_close($conexion);
            return $relacion;
            }
        }

    /*
    function elimina($id,$descripcion,$estatus){  //ojo papi lo kambie, pero es baja
        global $conexion;
        $sql="UPDATE relacion SET estatus=$estatus WHERE id_carrera ='$id'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $relacion=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM licenciaturas";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($registro_que_sea = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $relacion[]=$registro_que_sea;
            }
        }
    }*/
    

?>
