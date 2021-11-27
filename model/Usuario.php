<?php
    require("../includes/confbd.php");

    //Solo se usa si se trabaja con base de datos

    function nuevo($id_usuario,$nombre, $apellidos, $contra, $id_tipo_usuario, $id_licenciatura, $estatus){
        global $conexion;
        $estatus="Alta";
        //sha1(string $str, bool $raw_output = true ): string
         //md5(string $str, bool $raw_output = false): string
         //crypt(string $str, string $salt = ?): string
        $contras=sha1($contra);
        $sql="INSERT INTO usuarios(id_usuario, nombre, apellidos, contra, id_tipo_usuario, id_licenciatura, estatus) VALUES ('$id_usuario','$nombre', '$apellidos', '$contras', '$id_tipo_usuario', '$id_licenciatura', '$estatus')";
        $ejecucion=@mysqli_query($conexion,$sql);
        $usuarios=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM usuarios WHERE estatus='Alta'";  //cambiar a la s k estan en alta
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($menu = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $usuarios[]=$menu;
            }
        }
        mysqli_close($conexion);
        return $usuarios;
    }

    function modificar($id_usuario,$nombre,$apellidos,$contra){
        global $conexion;
        $sql="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', contra='$contra' WHERE id_usuario ='$id_usuario'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $usuarios=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM usuarios WHERE estatus='Alta'";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($valor= mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $usuarios[]=$valor;
            }
        }
        mysqli_close($conexion);
        return $usuarios;
    }


    function listar(){
        global $conexion;
        $usuarios=array();//RELACION ES EL NOMBRE DE LA TABLA
        $sql2="SELECT * FROM usuarios WHERE estatus='Alta'";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($valor = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
            $usuarios[]=$valor;
            }
              mysqli_close($conexion);
            return $usuarios;
        }


        function baja($id_usuario){ 
            $estatus='baja';
            global $conexion;
            $sql="UPDATE usuarios SET estatus='$estatus' WHERE id_usuario='$id_usuario'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM usuarios WHERE estatus='Alta'";
                $ejecucionConsulta=@mysqli_query($conexion,$sql2);
                while ($valor = mysqli_fetch_array($ejecucionConsulta,MYSQLI_ASSOC)) {
                    $relacion[]=$valor;
                }
            mysqli_close($conexion);
            return $relacion;
            }
        } 
    
        function alta($id_usuario){ 
            $estatus='Alta';
            global $conexion;
            $sql="UPDATE usuarios SET estatus='$estatus' WHERE id_usuario='$id_usuario'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM usuarios WHERE estatus='Alta'";
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
        $sql="UPDATE relacion SET estatus=$estatus WHERE id_usuario ='$id'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $relacion=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM usuarios";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($registro_que_sea = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $relacion[]=$registro_que_sea;
            }
        }
    }*/
    

?>
