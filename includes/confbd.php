<?php
$conexion=@mysqli_connect("localhost","root","","Biblio_ICO");
if (!$conexion) {
    die(" no se puede conectar a la base de datos");
}/*else {
    echo "conexion establecida";
}*/
?>

