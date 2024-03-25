<?php
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

        $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

        if(mysqli_num_rows($validar_login) > 0){
            echo '
                <script>
                    alert("Sesion iniciada con exito")
                    window.location = "../index.php"
                    </script>
            ';
        }else{
            echo '
            <script>
                alert("Ususario no encontrado")
                window.location = "../index.php"
                </script>
            ';
        }
?>