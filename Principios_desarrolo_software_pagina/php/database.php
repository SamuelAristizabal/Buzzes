<?php

    $conexion = mysqli_connect("localhost", "root", "", "usuarios");
    if ($conexion) {
        echo "conexion Exitosa";
    } else {
        echo "conexion Fallida";
    }
?>