<?php
    
include('db.php');

$NombreCompleto = $_POST['NombreCompleto'];
$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];
$ConfContrasena = $_POST['ConfContrasena'];

$consulta = "SELECT* FROM Buzzesbien where NombreCompleto ='$NombreCompleto' and Correo = '$Correo' and Contrasena = '$Contrasena' and ConfContrasena = '$ConfContrasena'";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.html");
}
else {
    include("registro.html");
    ?>
    <h1>ERROR AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);


?>