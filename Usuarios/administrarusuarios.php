<?php
     session_start();
     if(isset($_SESSION['correoUsuario'])){
        $usuarioSesion= $_SESSION['correoUsuario'];
        $tipoUsuario= $_SESSION['tipoUsuario'];
     }
     else{
        $usuarioSesion= '';
        $tipoUsuario= '';
     }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi portafolio</title>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <!--Menu-->
        <nav id="navbar">
            <div class="contenedor">
                <img src="../img/logo.png" alt="Logo" class="logotipo"/>
                <ul class="textoBoton" >
                <li><a href="../index.php">Inicio</a></li>
                    <li><a href="../quien.php">Quien soy</a></li>
                    <li><a href="../Administracion/portafolio.php">PortaFolio</a></li>
                    <li><a href="../Administracion/pedidos.php">Pedidos</a></li>
                    <li><a href="../blog.php">blog</a></li>
                    <li><a href="../contacto.php">Contactos</a></li>
                    <li><?php
                            if($usuarioSesion==''){
                               echo '<a class="sesion" href="login.php">Iniciar sesion</a>';
                            }
                            else{
                                echo '<p>'.$usuarioSesion.'</p>';
                                echo '<a class="sesion" href="logout.php">Cerrar sesion</a>';
                            }
                        ?></li>
                </ul>          
            </div>
        </nav> 
       <div id="mostrarSlider">
        <div class="Slider-banner">
            <h1>Administrar Usuarios</h1> 
            <p class="large">Rigoberto Pérez Ovando</p>
        </div>
       </div>
   </header>
  <a href="nuevousuario.php">Nuevo</a>
   <section id="Portafolio">
    <table>
        <thead>
            <th>Nombre</th>
            <th>Correo</th>

        </thead>
       <?php
            include_once '../Core/Admin_usuario.php';
            $usuario=new Usuario();
            $resultado=$usuario->ObtenerUsuario();
            foreach ($resultado as $registro) {
                echo '<tr>';
                echo '<td>'. $registro['NombreCompleto']. '<td>';
                echo '<td>'. $registro['CorreoElectronico']. '<td>';
                echo '</tr>';
            }
       ?>
    </table>
   </section>
  
  <footer>
      <p>universidad</p>
  </footer>
</body>
</html>