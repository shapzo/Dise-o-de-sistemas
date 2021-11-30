<?php
    require("../includes/confbd.php");

    //Solo se usa si se trabaja con base de datos

    function nuevo($id_material,$titulo,$id_categoria,$id_editorial,$isbn_issn,$sitio_web,$archivo,$licencia,$estatus){
        global $conexion;
        $estatus="Alta";
        $sql="INSERT INTO material(id_material,titulo,id_categoria,id_editorial,isbn_issn,sitio_web,archivo,licencia,estatus) VALUES ('$id_material','$titulo','$id_categoria','$id_editorial','$id_editorial','$isbn_issn','$sitio_web','$archivo','$licencia','$estatus')";
        $ejecucion=@mysqli_query($conexion,$sql);
        $material=array();//RELACION ES EL titulo DE LA TABLA
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

    function modificar($id_material,$titulo,$isbn_issn,$licencia){
        global $conexion;
        $sql="UPDATE material SET titulo='$titulo', isbn_issn='$isbn_issn', licencia='$licencia' WHERE id_material ='$id_material'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $material=array();//RELACION ES EL titulo DE LA TABLA
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
        $material=array();//RELACION ES EL titulo DE LA TABLA
        $sql2="SELECT * FROM material WHERE estatus='Alta'";
        $ejecucionConsulta=@mysqli_query($conexion,$sql2);
        while ($valor = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
            $material[]=$valor;
            }
              mysqli_close($conexion);
            return $material;
        }


        function baja($id_material){ 
            $estatus='baja';
            global $conexion;
            $sql="UPDATE material SET estatus='$estatus' WHERE id_material='$id_material'";
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
    
        function alta($id_material){ 
            $estatus='Alta';
            global $conexion;
            $sql="UPDATE material SET estatus='$estatus' WHERE id_material='$id_material'";
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
        $sql="UPDATE relacion SET estatus=$estatus WHERE id_material ='$id'";
        $ejecucion=@mysqli_query($conexion,$sql);
        $relacion=array();//RELACION ES EL titulo DE LA TABLA
        if ($ejecucion) {
            $sql2="SELECT * FROM material";
            $ejecucionConsulta=@mysqli_query($conexion,$sql2);
            while ($registro_que_sea = mysqli_fetch_array($ejecucionConsulta, MYSQLI_ASSOC)) {//menu ES ES CUALQUIER CAMPO QUE SE QUIERA CONSULTAR
                $relacion[]=$registro_que_sea;
            }
        }
    }*/
    

?>
