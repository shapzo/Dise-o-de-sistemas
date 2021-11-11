<?php
function listarArchivos( $path ){
    //Abrimos la carpeta que nos pasan como parametro
    $dir = opendir($path);
    //Leo todos los ficheros de la carpeta
    while($elemento = readdir($dir)){
        //Tratamos los elementos y que tienen todas las carpetas
        if( $elemento !="." && $elemento !=".."){
            // Si es una carpeta
            if( is_dir($path.$elemento) ){
            // Muestro la carpeta
            echo "<p><strong>CARPETA: ". $elemento ."</strong></p>";
            //si es un archivo    
            } else{
                // Muestro el archivo
                echo "<br />". $elemento;
            }
        }
    }
}
?>