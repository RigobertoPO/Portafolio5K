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
   <section id="Portafolio">
      <form action="crearusuario.php" method="post">
      <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Crear nuevo usuario</p>           
          </div>
          <!-- Nombre input -->
          <div class="form-outline mb-4">
            <input type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="Introduce tu nombre" name="nombre" />
            <label class="form-label" for="form3Example3">Nombre completo</label>
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Introduce tu correo" name="correo" />
            <label class="form-label" for="form3Example3">Correo electrónico</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Introduce tu contraseña" name="password" />
            <label class="form-label" for="form3Example4">Password</label>
          </div>
          <div class="form-outline mb-3">
            <select name="tipo" class="form-control form-control-lg" >
                <option value="1">Administrador</option>
                <option value="2">Cliente</option>
            </select>
            <label class="form-label" for="form3Example4">Tipo</label>
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Guardar usuario">           
          </div>
      </form>
   </section>
  
  <footer>
      <p>universidad</p>
  </footer>
</body>
</html>