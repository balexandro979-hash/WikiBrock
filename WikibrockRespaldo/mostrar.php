<?php
include("config/conexion.php");

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuarios registrados</title>
        <link rel="stylsheet" href="css/style.css">
    </head>
    <body>
        <h2>Usuarios registrados</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Numero</th>
                <th>Mensaje</th>
                <th>Editar</th>

            </tr>
            <?php while($fila = mysqli_fetch_assoc($resultado)) {?>
                <tr>
                    <td><?php echo$fila["id"];?></td>
                    <td><?php echo$fila["nombre"];?></td>
                    <td><?php echo$fila["correo"];?></td>
                    <td><?php echo$fila["numero"];?></td>
                    <td><?php echo$fila["mensaje"];?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $fila["id"]"></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>