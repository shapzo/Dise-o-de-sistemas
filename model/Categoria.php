<?php
    require("../includes/confbd.php");

    //Solo se usa si se trabaja con base de datos

    function nuevo($id_categoria,$descripcion,$estatus){
        global $conexion;
        $estatus="Alta";
        $sql="INSERT INTO categoria(id_categoria , descripcion, estatus) VALUES ('$id_categoria', '$descripcion','$estatus')";
        $ejecucion=@mysqli_query($conexion,$sql);
        $categoria=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM categoria WHERE estatus='Alta'";  //cambiar a la s k estan en alta
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($menu = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $categoria[]=$menu;
            }
        }
        mysqli_close($conexion);
        return $categoria;
    }

    function modificar($id_categoria,$descripcion){
        global $conexion;
        $sql="UPDATE categoria SET descripcion='$descripcion' WHERE id_categoria ='$id_categoria'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $categoria=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM categoria WHERE estatus='Alta'";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($valor= mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $categoria[]=$valor;
            }
        }
        mysqli_close($conexion);
        return $categoria;
    }


    function listar(){
        global $conexion;
        $categoria=array();//RELACION ES EL NOMBRE DE LA TABLA
        $sql2="SELECT * FROM categoria WHERE estatus='Alta'";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($valor = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
            $categoria[]=$valor;
            }
              mysqli_close($conexion);
            return $categoria;
        }


        function baja($id_categoria){ 
            $estatus='baja';
            global $conexion;
            $sql="UPDATE categoria SET estatus='$estatus' WHERE id_categoria='$id_categoria'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM categoria WHERE estatus='Alta'";
                $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($valor = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                    $relacion[]=$valor;
                }
            mysqli_close($conexion);
            return $relacion;
            }
        } 
    
        function alta($id_categoria){ 
            $estatus='Alta';
            global $conexion;
            $sql="UPDATE categoria SET estatus='$estatus' WHERE id_categoria='$id_categoria'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM categoria WHERE estatus='Alta'";
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
        $sql="UPDATE relacion SET estatus=$estatus WHERE id_categoria ='$id'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $relacion=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM categoria";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($registro_que_sea = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $relacion[]=$registro_que_sea;
            }
        }
    }*/
    

?>
