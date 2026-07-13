<!DOCTYPE html>
<html lang="es">

    <head>
        <title> WikiBrock | Categorías</title>
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
                    <li><a href="categorias.php" class="activo">Categorías</a></li>
                    <li><a href="sobrenosotros.php">Sobre nosotros</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <section class="hero">
            <div class="contenido_hero">
                <h2> ¿Que se te antoja hoy? </h2>
                <p> Esplora nuestras distintas categorias </p>

            </div>
        </section>

        <!-- Esta seccion sirve para hacer cartas de productos -->
        <section class="productos">
            <article class="tarjeta">
                <div class="contenido_frontal">
                    <img src="platillos_clasicos.webp" alt="platillos clásicos">
                    <h2>Platillos mexicanos clasicos</h2> 
                    <p> Recetas populares 100% mexicanas</p>
                    <a href="" class="btn-recetas" onclick="aviso()"> VER TODAS LAS RECETAS </a> 
                </div>
                <div class="contenido_oculto">
                    <p id="texto-clasicos"></p>
                </div>
            </article>

            <article class="tarjeta"> 
                <div class="contenido_frontal">
                    <img src="comidas.webp" alt="Comidas">
                    <h2>Comidas </h2> 
                    <p>Disfruta de almuerzos tradicionales </p>
                    <a href="" class="btn-recetas" onclick="aviso()"> VER TODAS LAS RECETAS </a>
                </div>
                <div class="contenido_oculto">
                    <p id="texto-comidas"></p>
                </div>
            </article>

            <article class="tarjeta">
                <div class="contenido_frontal">
                    <img src="postres.webp" alt="Postres">
                    <h2> Postres </h2>
                    <p> Sobrecomidas dulces y saladas </p>
                    <a href="" 
                    class="btn-recetas" onclick="aviso()"> VER TODAS LAS RECETAS </a>
                </div>
                <div class="contenido_oculto">
                    <p id="texto-postres"></p>
                </div>
            </article>

            <article class="tarjeta">
                <div class="contenido_frontal">
                    <img src="desayuno.webp" alt="Desayunos"> 
                    <h2> Desayunos </h2>
                    <p> Desayunos mexicanos y algo mas </p>
                    <a href="" 
                    class="btn-recetas" onclick="aviso()"> VER TODAS LAS RECETAS </a>
                </div>
                <div class="contenido_oculto">
                    <p id="texto-desayunos"></p>
                </div>
            </article>

            <article class="tarjeta"> 
                <div class="contenido_frontal">
                    <img src="cenas.webp" alt="Cenas">
                    <h2> Cenas </h2>
                    <p> Platillos mas ligeros para la hora nocturna </p>
                    <a href="" 
                    class="btn-recetas" onclick="aviso()"> VER TODAS LAS RECETAS </a>
                </div>
                <div class="contenido_oculto">
                    <p id="texto-cenas"></p>
                </div>
            </article>

            <article class="tarjeta">
                <div class="contenido_frontal">
                    <img src="bebidas.webp" alt="Bebidas"> 
                    <h2> Bebidas </h2>
                    <p> Brebaje tradicional con y sin alcohol </p>
                    <a href="" 
                    class="btn-recetas" onclick="aviso()"> VER TODAS LAS RECETAS </a>
                </div>
                <div class="contenido_oculto">
                    <p id="texto-bebidas"></p>
                </div>
            </article>

        </section>

        <div class="contenedor">
            <a href="../index.html" class="volver"> Volver </a>
        </div>
        <script src="../JS/categorias.js"></script>
    </body>

    <footer>

        <p>
            © 2026 WikiBrock | Proyecto Académico
        </p>

    </footer>
</html>