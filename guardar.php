<?php

include("abre.php");

$Nombre     = $_POST['Nombre'];
$Apellido     = $_POST['Apellido'];
$Usuario     = $_POST['Usuario'];
$Correo     = $_POST['Correo'];
$Contrasena     = $_POST['Contrasena'];

$consulta = "INSERT INTO clientes(Nombre, Apellido, Usuario, Correo, Contrasena) VALUES ($Nombre, $Apellido, $Usuario, $Correo, $Contrasena)";

if($conexion->query($consulta) === TRUE){
    header("Location: index.html");
}
else
{
    echo "Error: " . $consulta . "<br>" . $conexion->error
}

$conexion -> close();


?>