<?php
if ($_POST["usuario"]=="soyadmin" && $_POST["contra"]=="ico9-2021")
{ 
   	session_start(); 
    $_SESSION["autentificado"]= true; 
   	header ("Location: ../Admin.php");	
}
elseif (($_POST["usuario"]=="soyusuario" && $_POST["contra"]=="ico9-2021")) 
{ 
    session_start(); 
    $_SESSION["autentificado"]= true; 
   	header ("Location: ../User.php");
} 
else
{
    header("Location: ../index.php?error=si"); 
}
?>