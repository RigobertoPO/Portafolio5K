<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    if(isset($nombre) && isset($correo) && isset($password)){
        
    }
    else{
        header("Location: registrarusuario.php");
    }
?>