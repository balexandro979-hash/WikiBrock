<!DOCTYPE html>
<html lang="es">

<head>
    <title>Contacto | WikiBrock</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../CSS/global.css" rel="stylesheet">
</head>

<body>

    <header>

        <nav class="navbar">
        

            <h1 class="logo">WikiBrock</h1>

            <ul class="menu">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="recetas.php">Recetas</a></li>
                <li><a href="categorias.php">Categorias</a></li>
                <li><a href="sobrenosotros.php">Sobre nosotros</a></li>
                <li><a href="contacto.php" class="activo">Contacto</a></li>
            </ul>

        </nav>

    </header>

    <section class="hero">

        <div class="hero-content">

            <h2>CONTÁCTANOS</h2>

            <p>
                Nos encantaría saber de ti.
                ¡Estamos para servirte!
            </p>

        </div>

    </section>

    <main>

        <section class="contacto">

            <div class="info-contacto">
                <h2>INFORMACIÓN DE CONTACTO</h2>
                <h3>Dirección</h3>
                <p>
                    Av. Cocina Mexicana #125,
                    Cancún, Quintana Roo
                </p>
                <h3>Teléfono</h3>
                <p>
                    555 555 5555
                </p>
                <h3>Correo electrónico</h3>
                <p>
                    contacto@wikibrock.com
                </p>

                <h3>Horario de atención</h3>
                <p>
                    Lunes a Viernes <br>
                    9:00 AM - 11:00 PM
                </p>

            </div>

            <div class="formulario">

                <h2>ENVÍANOS UN MENSAJE</h2>

                
                <div class="fila">
                    <form id="formContacto" action="../guardar.php" method="POST">  
                        
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre completo" required>
                        <p id="aviso"></p>  
                        
                        <input type="text" id="celular" name="numero" placeholder="Teléfono" required>
                        <p id="cellphone"></p>

                        <input type="email" id="correo" name="correo" placeholder="Correo electrónico" required>
                        <p id="m_correo"></p>

                        <textarea id="mensajeTexto" name="mensaje" placeholder="Escribe algo..." required></textarea>
                        <p id="avisoMensaje"></p>
                        
                        <button type="button" class="boton" onclick="validarFormulario()">
                            Enviar mensaje
                        </button>
                        <p id="mensaje"></p>
                    </form>    
                </div>
            </div>    

        </section>

        <div class="contenedor">
            <a href="../index.php"><button class="volver">Volver</button>
            </a>
        </div>

        

    </main>

    <footer>

        <p>
            © 2026 WikiBrock | Proyecto Académico
        </p>

    </footer>

    <script src="../JS/contacto.js"></script>

</body>

</html>