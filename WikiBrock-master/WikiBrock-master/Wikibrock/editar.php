<?php
 
include("config/conexion.php");
 
$id = $_GET["id"];
 
$sql = "SELECT * FROM usuarios WHERE id='$id'";
 
$resultado = mysqli_query($conexion,$sql);
 
$fila = mysqli_fetch_assoc($resultado);
 
?>

<!DOCTYPEhtml>

<html lang="es">

  <head>

  <meta charset="UTF-8">

  <title>Editar usuario</title>

  <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

  <h2>Editar usuario</h2>
    <form action="actualizar.php"method="POST">
    <input type="hidden" name="id" value="<?php echo $fila["id"]; ?>">
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre"value="<?php echo $fila["nombre"]; ?>"required>
    <br><br>
    <label for="correo">Correo electrónico</label>
    <input type="email" id="correo" name="correo"value="<?php echo $fila["correo"]; ?>" required>
    <br><br>
    <label for="numero">Numero de telefono</label>
    <input type="text" id="numero" name="numero"value="<?php echo $fila["numero"]; ?>" required>
    <br><br>
    <button type="submit">
    Actualizar
    </button>
    </form>

  </body>

</html>