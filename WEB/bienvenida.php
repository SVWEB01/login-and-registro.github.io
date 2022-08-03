<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo'
        <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.html";
        </script>
        ';
        header("location: index.html");
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos wapos :3</h1>
    <a href="../php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>