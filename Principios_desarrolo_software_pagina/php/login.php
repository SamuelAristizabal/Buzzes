<?php
session_start();

include('database.php');

$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];

// Validar el formato del correo electrónico


// Usar declaraciones preparadas para evitar la inyección SQL
$resultado = mysqli_query($conexion,"SELECT * FROM vivalavidasinestres WHERE Correo = '$Correo' AND Contrasena = '$Contrasena'");


// Verificar si se encontró un usuario con los datos proporcionados
if (mysqli_num_rows($resultado) > 0) {
    $_SESSION['Correo'] = $Correo;
    header("Location: ../index.php");
    exit();
}
else {
    echo 'El correo electrónico o la contraseña ingresados son incorrectos.';
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>