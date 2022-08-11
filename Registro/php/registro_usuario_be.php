<?php 

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $apellido_completo = $_POST['apellido_completo'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    //Encriptarción de contraseña
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, apellido_completo, correo, contrasena)
                VALUES('$nombre_completo', '$apellido_completo', '$correo', '$contrasena')";

    //Verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");
            window.location = "../index.php"
        </script>';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location = "../index.php";
            </script>
        ';  
    }

    mysqli_close($conexion);
?>