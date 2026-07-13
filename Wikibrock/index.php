<!DOCTYPE html>
<html lang="es">
    <head>
        <title>WikiBrock</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="CSS/global.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <nav class="navbar">
                <h1 class="logo">WikiBrock</h1>
                <ul class="menu">
                    <li><a href="index.php" class="activo">Inicio</a></li>
                    <li><a href="HTML/recetas.php">Recetas</a></li>
                    <li><a href="HTML/categorias.php">Categorías</a></li>
                    <li><a href="HTML/sobrenosotros.php">Sobre nosotros</a></li>
                    <li><a href="HTML/contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <section class="hero">
            <div class="hero-content">
                <h2>Recetas Mexicanas para Todos</h2>
                <p>Cocinar nunca fue tan sencillo. 
                    Encuentra tus recetas favoritas y aprende a adaptar cualquier ingrediente con estilo.
                </p>

                <form>
                    <label for="campo-de-búsqueda">🔎</label>
                    <input type="search" name="" id="campo-de-busqueda" name="consulta" placeholder="¿Qué comeremos hoy?">
                </form>

            </div>
        </section>

        <section class="categorias">
            <h2>Categorias</h2>
            <div class="botones-categorias">
                <button onclick="aviso()">Platillos Mexicanos</button>
                <button onclick="aviso()">Desayunos</button>
                <button onclick="aviso()">Comidas</button>
                <button onclick="aviso()">Cenas</button>
                <button onclick="aviso()">Postres</button>
                <button onclick="aviso()">Bebidas</button>

            </div>
        </section>

        <main>
            <h2 class="titulo-recetas">
                Recetas Mexicanas para Todos
            </h2>
            <div class="contenedor-recetas">
                <div class="card">
                    <img src="imagenes/tacos_al_pastor.webp" alt="Tacos al Pastor">
                    <h3>Tacos al pastor</h3>
                    <p>35 min | Intermedio</p>
                    <a href="HTML/detallestacos.php"> <button>Ver receta completa</button> </a>
                </div>
                <div class="card">
                    <img src="imagenes/chilaquiles_verdes.webp" alt="Chilaquiles verdes">
                    <h3>Chilaquiles verdes</h3>
                    <p>20 minutos | Fácil</p>
                    <a href="HTML/detalleschilaquiles.php"> <button>Ver receta completa</button> </a>
                </div>
                <div class="card">
                    <img src="imagenes/pozole.webp" alt="Pozole" width="600" height="425">
                    <h3>Pozole</h3>
                    <p>90 min | Avanzado</p>
                    <a href="HTML/detallespozole.php"> <button>Ver receta completa</button> </a>

                </div>
            </div>
        </main>

        <footer>
            <p>
                © 2026 WikiBrock | Proyecto Académico
            </p>
        </footer>
    <script src="../js/categorias.js"></script>
    </body>


</html>