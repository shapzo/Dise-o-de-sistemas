<?php
    require("../includes/confbd.php");

    //Solo se usa si se trabaja con base de datos

    function nuevo($id_material,$titulo,$autor,$id_categorias,$id_editorial,$isbn_issn,$sitio_web,$archivo,$estatus,$licencia){
        global $conexion;
        $estatus="Alta";
        $sql="INSERT INTO material(id_material,titulo,autor,id_categorias,id_editorial,isbn_issn,sitio_web,archivo,estatus,licencia) VALUES ('$id_material','$titulo','$autor','$id_categorias','$id_editorial','$isbn_issn','$sitio_web','$archivo','$estatus','$licencia')";
        $ejecucion=@mysqli_query($conexion,$sql);
        $material=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM material WHERE estatus='Alta'";  //cambiar a la s k estan en alta
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($menu = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $material[]=$menu;
            }
        }
        mysqli_close($conexion);
        return $material;
    }

    function modificar($id_usuario,$nombre,$apellido,$contra){
        global $conexion;
        $sql="UPDATE material SET nombre='$nombre', apellido='$apellido', contra='$contra' WHERE id_usuario ='$id_usuario'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $material=array();//RELACION ES EL NOMBRE DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM material WHERE estatus='Alta'";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($valor= mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $material[]=$valor;
            }
        }
        mysqli_close($conexion);
        return $material;
    }


    function listar(){
        global $conexion;
        $material=array();//RELACION ES EL NOMBRE DE LA TABLA
        $sql2="SELECT * FROM material WHERE estatus='Alta'";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($valor = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
            $material[]=$valor;
            }
              mysqli_close($conexion);
            return $material;
        }


        function baja($id_usuario){ 
            $estatus='baja';
            global $conexion;
            $sql="UPDATE material SET estatus='$estatus' WHERE id_usuario='$id_usuario'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM material WHERE estatus='Alta'";
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
            $sql="UPDATE material SET estatus='$estatus' WHERE id_usuario='$id_usuario'";
            $ejecucion=@mysqli_query($conexion,$sql);
            $relacion=array(); //variable arreglo para la tabla
            if ($ejecucion) {
                $sql2="SELECT * FROM material WHERE estatus='Alta'";
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
            $sql2="SELECT * FROM material";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($registro_que_sea = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $relacion[]=$registro_que_sea;
            }
        }
    }*/
    

?>
