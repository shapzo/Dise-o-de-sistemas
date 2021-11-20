<?php
if ($_POST["usuario"]=="SoyAdmin" && $_POST["contra"]=="uhss")
{ 
   	session_start(); 
    $_SESSION["autentificado"]= true; 
   	header ("Location: ../Admin.php");	
}
elseif (($_POST["usuario"]=="SoyUsuario" && $_POST["contra"]=="pedros")) 
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