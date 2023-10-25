<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    $tipo=$_POST['tipo'];
    if(isset($tipo)){
        $tipo=$tipo;
    }else{
        $tipo=2;
    }
    if(isset($nombre) && isset($correo) && isset($password)){
        include_once '../Core/Admin_usuario.php';
        $usuario=new Usuario();
        $resultado=$usuario->InsertarUsuario($nombre,
        $correo,MD5($password),$tipo);
        if($resultado==1){
            header("Location: ../login.php");
        }
        else{
            header("Location: registrarusuario.php");
        }
    }
    else{
        header("Location: registrarusuario.php");
    }
?>