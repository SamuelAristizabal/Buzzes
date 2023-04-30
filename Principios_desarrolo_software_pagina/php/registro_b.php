<?php
include 'database.php';
    $NombreCompleto = $_POST['Nombres'];
    $Correo = $_POST['Correo']; 
    $Contrasena = $_POST['Contrasena'];
    


    $query="INSERT INTO vivalavidasinestres(NombreCompleto, Contrasena, Correo) VALUES('$NombreCompleto','$Contrasena', '$Correo')";
    $Verificar_Correo= mysqli_query($conexion,"SELECT * FROM vivalavidasinestres WHERE Correo='$Correo'");

    /*Verificación para no repetir correo*/

    if(mysqli_num_rows($Verificar_Correo)>0){
        echo '
            <script>
                alert("Este correo ya esta en uso, Intenta otro diferente");
                window.location="../registro.html";
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
                    window.location="../registro.html";
                    </script>
                ';
                

            }
            else{
                echo '
                <script>
                    alert("Error, no se ha almacenado correctamente el Usuario");
                    window.location="../registro.html";
                    </script>
                ';
            }
    mysqli_close($conexion);
    }
?>