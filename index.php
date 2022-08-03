<?php
    
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: WEB/bienvenida.php");
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagenes/INA.png">
    <title>Instituto Nacional De Apopa</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Diseño/InicioyRegistro.css">
</head>

<body>

    <div id="INA">
        <h1>Instituto Nacional De Apopa</h1>
        <h2>INA</h2> <img src="Imagenes/INA.png">
        <h3>Sistema de Notas</h3>
    </div>

    <br>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate paraque puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>
            <!--Formulario de Login y Regístro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                <!--Regístro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Apellido Completo" name="apellido_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type= "password" placeholder="Contraseña" name="contrasena">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>    
    </main>
    <script src="Java/script.js"></script>
</body>
</html>