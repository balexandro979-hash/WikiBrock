<?php
include("config/conexion.php");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$numero = $_POST["numero"];
$mensaje = $_POST["mensaje"];

$sql = "INSERT INTO usuarios(nombre, correo, numero, mensaje)
    VALUES('$nombre', '$correo', '$numero', '$mensaje')";
    
    
if(mysqli_query($conexion, $sql)){
    echo "Usuario registrado exitosamente";
} else { 
    echo "Error al registrar el usuario";
}
?>