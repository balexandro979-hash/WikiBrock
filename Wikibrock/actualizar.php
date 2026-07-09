<?php
include("config/conexion.php");
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$numero = $_POST["numero"];
$mensaje = $_POST["mensaje"];
$sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo', numero='$numero', mensaje='$mensaje'WHERE id='$id'";
mysqli_query($conexion,$sql);
header("Location: mostrar.php");
?>