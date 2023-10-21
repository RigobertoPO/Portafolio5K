<?php
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    if(isset($correo)&& isset($password)){
        require_once '../Core/Admin_usuario.php';
        $usuario=new Usuario();
        $resultado=$usuario->AutentificarUsuario($correo,$password);
        if(count($resultado)>0){
            foreach ($resultado as $item) {
                session_start();
                $_SESSION['idUsuario']=$item['Id'];
                $_SESSION['correoUsuario']=$item['CorreoElectronico'];    
                $_SESSION['tipoUsuario']=$item['Tipo'];    
                header("Location: ../index.php");   # code...
            }
        }
        else{
            header("Location: ../login.php"); 
        }
    }
    else{
        header("Location: ../login.php");
        exit();
    }
?>