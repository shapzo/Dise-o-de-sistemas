<?php
    require("../includes/confbd.php");

    //Solo se usa si se trabaja con base de datos

    function nuevo($id_externo,$titulo,$sitio_web,$estatus){
        global $conexion;
        $estatus="Alta";
        $sql="INSERT INTO material_externo (id_externo, titulo, sitio_web, estatus) VALUES ('$id_externo', '$titulo','$sitio_web','$estatus')";
        $ejecucion=@mysqli_query($conexion,$sql);
        $material_externo=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM material_externo WHERE estatus='Alta'";  //cambiar a la s k estan en alta
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($menu = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $material_externo[]=$menu;
            }
        }
        mysqli_close($conexion);
        return $material_externo;
    }

    function modificar($id_externo,$titulo,$sitio_web){
        global $conexion;
        $sql="UPDATE material_externo SET titulo='$titulo' sitio_web='$sitio_web'  WHERE id_externo ='$id_externo'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $material_externo=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM material_externo WHERE estatus='Alta'";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($valor= mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $material_externo[]=$valor;
            }
        }
        mysqli_close($conexion);
        return $material_externo;
    }


    function listar(){
        global $conexion;
        $material_externo=array();//RELACION ES EL NOMBRE DE LA TABLA
        $sql2="SELECT * FROM material_externo WHERE estatus='Alta'";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($valor = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
            $material_externo[]=$valor;
            }
              mysqli_close($conexion);
            return $material_externo;
        }


        function baja($id_externo){ 
            $estatus='baja';
            global $conexion;
            $sql="UPDATE material_externo SET estatus='$estatus' WHERE id_externo='$id_externo'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM material_externo WHERE estatus='Alta'";
                $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($valor = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                    $relacion[]=$valor;
                }
            mysqli_close($conexion);
            return $relacion;
            }
        } 
    
        function alta($id_externo){ 
            $estatus='Alta';
            global $conexion;
            $sql="UPDATE material_externo SET estatus='$estatus' WHERE id_externo='$id_externo'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM material_externo WHERE estatus='Alta'";
                $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($valor = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                    $relacion[]=$valor;
                }
            mysqli_close($conexion);
            return $relacion;
            }
        }

    /*
    function elimina($id,$titulo,$estatus){  //ojo papi lo kambie, pero es baja
        global $conexion;
        $sql="UPDATE relacion SET estatus=$estatus WHERE id_externo ='$id'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $relacion=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM material_externo";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($registro_que_sea = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $relacion[]=$registro_que_sea;
            }
        }
    }*/
    

?>
