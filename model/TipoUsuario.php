<?php
    require("../includes/confbd.php");

    //Solo se usa si se trabaja con base de datos

    function nuevo($id_tipo_usuario, $descripcion, $estatus){
        global $conexion;
        $estatus="Alta";
        $sql="INSERT INTO tipousuario(id_tipo_usuario, descripcion, estatus) VALUES ('$id_tipo_usuario','$descripcion', '$estatus')";
        $ejecucion=@mysqli_query($conexion,$sql);
        $tipousuario=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM tipousuario WHERE estatus='Alta'";  //cambiar a la s k estan en alta
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($menu = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $tipousuario[]=$menu;
            }
        }
        mysqli_close($conexion);
        return $tipousuario;
    }

    function modificar($id_tipo_usuario, $descripcion){
        global $conexion;
        $sql="UPDATE tipousuario SET id_tipo_usuario='$id_tipo_usuario' WHERE descripcion ='$descripcion'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $tipousuario=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM tipousuario WHERE estatus='Alta'";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($vale= mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $tipousuario[]=$vale;
            }
        }
        mysqli_close($conexion);
        return $tipousuario;
    }


    function listar(){
        global $conexion;
        $tipousuario=array();//RELACION ES EL NOMBRE DE LA TABLA
        $sql2="SELECT * FROM tipousuario WHERE estatus='Alta'";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($valor = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
            $tipousuario[]=$valor;
            }
              mysqli_close($conexion);
            return $tipousuario;
        }


        function baja($id_tipo_usuario){ 
            $estatus='baja';
            global $conexion;
            $sql="UPDATE tipousuario SET estatus='$estatus' WHERE id_tipo_usuario='$id_tipo_usuario'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM tipousuario WHERE estatus='Alta'";
                $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($valor = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                    $relacion[]=$valor;
                }
            mysqli_close($conexion);
            return $relacion;
            }
        } 
    
        function alta($id_tipo_usuario){ 
            $estatus='Alta';
            global $conexion;
            $sql="UPDATE tipousuario SET estatus='$estatus' WHERE id_tipo_usuario='$id_tipo_usuario'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM tipousuario WHERE estatus='Alta'";
                $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($valor = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                    $relacion[]=$valor;
                }
            mysqli_close($conexion);
            return $relacion;
            }
        }

    /*
    function elimina($id,$id_tipo_usuario,$estatus){  //ojo papi lo kambie, pero es baja
        global $conexion;
        $sql="UPDATE relacion SET estatus=$estatus WHERE id_tipo_usuario ='$id'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $relacion=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM tipousuario";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($registro_que_sea = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $relacion[]=$registro_que_sea;
            }
        }
    }*/
    

?>
