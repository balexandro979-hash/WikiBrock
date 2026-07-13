<?php
include("config/conexion.php");

$sql = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $sql);

?>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Usuarios registrados</title>
        <link rel="stylesheet" href="CSS/global.css">
    </head>

    <header>
        <nav class="navbar">
            <h1 class="logo">WikiBrock</h1>
            <ul class="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="HTML/recetas.php">Recetas</a></li>
                <li><a href="HTML/categorias.php">Categorías</a></li>
                <li><a href="HTML/sobrenosotros.php">Sobre nosotros</a></li>
                <li><a href="HTML/contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

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
                <th>Eliminar</th>

            </tr>

            <?php while($fila = mysqli_fetch_assoc($resultado)) {?>
                <tr>
                    <td><?php echo$fila["id"];?></td>
                    <td><?php echo$fila["nombre"];?></td>
                    <td><?php echo$fila["correo"];?></td>
                    <td><?php echo$fila["numero"];?></td>
                    <td><?php echo$fila["mensaje"];?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $fila["id"];?>" class="btn-editar">
                            Editar
                        </a>
                    </td>

                    <td>
                        <a href="eliminar.php?id=<?php echo $fila["id"];?>" class="btn-guardar">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>