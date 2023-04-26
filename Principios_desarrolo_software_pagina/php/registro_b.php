<?php

    $NombreCompleto = $_POST['NombreCompleto'];
    $Correo = $_POST['Correo']; 
    $Contrasena = $_POST['Contrasena'];
    $ConfContrasena = $_POST['ConfContrasena'];


    $query="INSERT INTO usuarios(NombreCompleto, Correo, Contraseña, ConfContrasena) VALUES('$NombreCompleto','$Contrasena', '$Correo','$ConfContrasena')";
    $Verificar_Correo= mysqli_query($conexion,"SELECT * FROM usuarios WHERE CorreoElectronico='$Correo'");

    /*Verificación para no repetir correo*/

    if(mysqli_num_rows($Verificar_Correo)>0){
        echo '
            <script>
                alert("Este correo ya esta en uso, Intenta otro diferente");
                window.location="../index.html";
            </script>
        ';
        exit();
    }

    else{
        $Ejecutar=mysqli_query($conexion, $query);
            if($Ejecutar){
                
                echo '
                <script>
                    alert("El usuario ha sido registrado correctamente");
                    window.location="../index.html";
                    </script>
                ';
                

            }
            else{
                echo '
                <script>
                    alert("Error, no se ha almacenado correctamente el Usuario");
                    window.location="../index.html";
                    </script>
                ';
            }
    mysqli_close($conexion);
    }
?>