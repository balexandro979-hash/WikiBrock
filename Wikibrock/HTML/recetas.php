<!DOCTYPE html>
<html lang="es">
    <head>
        <title>WikiBrock | Recetas</title>
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
                    <li><a href="recetas.php" class="activo">Recetas</a></li>
                    <li><a href="categorias.php">Categorías</a></li>
                    <li><a href="sobrenosotros.php">Sobre nosotros</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        
        </header>
        <section class="hero">
            <div class="hero-content">
                <h2>¿Algo en mente?</h2>
                <p>Encuentra recetas,variantes y sustituciones de ingredientes para 
                        cocinar de forma facil y practica
                </p>
            </div>
        </section>
        
    <div style="display: flex; flex-direction: column; align-items: center; width: 100%">
        <h2>Filtros</h2>
        <div class="filtros">
            <button onclick="aviso()">Tipo de comida</button>
            <button onclick="aviso()">Dificultad</button>
            <button onclick="aviso()">Tiempo</button>
        </div>
    </div>

        <div class="seccion-recetas">

            <div class="columna">
                <h2>Recetas Destacadas</h2>

                <div class="contenedor-recetas">

                    <div class="card">
                        <img src="tacos_al_pastor.webp" alt="Tacos al Pastor">
                        <h3>Tacos al Pastor</h3>
                        <p>35 min | Intermedio</p>
                        <a href="detallestacos.php"> <button>Ver receta completa</button> </a>
                    </div>

                    <div class="card">
                        <img src="chilaquiles_verdes.webp" alt="Chilaquiles verdes">
                        <h3>Chilaquiles Verdes</h3>
                        <p>20 min | Fácil</p>
                        <a href="detalleschilaquiles.php"> <button>Ver receta completa</button> </a>
                    </div>

                    <div class="card">
                        <img src="sincronizadas.webp" alt="Sincronizadas">
                        <h3>Sincronizadas</h3>
                        <p>15 min | Fácil</p>
                        <a href="detallespozole.php"> <button>Ver receta completa</button> </a>
                    </div>

                    <div class="card">
                        <img src="pozole.webp" alt="Pozole">
                        <h3>Pozole</h3>
                        <p>90 min | Avanzado</p>
                        <button onclick="atrapada()">Ver receta</button>
                    </div>

                </div>

            </div>

            <div class="columna">
                <h2>Recetas Populares</h2>

                <div class="contenedor-recetas">

                    <div class="card">
                        <img src="https://st4.depositphotos.com/15238356/23748/i/600/depositphotos_237482554-stock-photo-tamales-mexicanos-mexican-tamale-spicy.jpg" alt="Tamales">
                        <h3>Tamales</h3>
                        <p>60 min | Avanzado</p>
                        <button onclick="atrapada()">Ver receta</button>
                    </div>

                    <div class="card">
                        <img src="https://st3.depositphotos.com/15238356/35400/i/600/depositphotos_354002610-stock-photo-red-enchiladas-mexican-food-tomato.jpg" alt="Enchiladas">
                        <h3>Enchiladas</h3>
                        <p>45 min | Intermedio</p>
                        <button onclick="atrapada()">Ver receta</button>
                    </div>

                    <div class="card">
                        <img src="https://st5.depositphotos.com/15238356/66779/i/600/depositphotos_667793920-stock-photo-mole-poblano-sauce-chicken-mexican.jpg" alt="Mole poblano">
                        <h3>Mole Poblano</h3>
                        <p>90 min | Avanzado</p>
                        <button onclick="atrapada()">Ver receta</button>
                    </div>

                    <div class="card">
                        <img src="https://st3.depositphotos.com/29816174/36683/i/600/depositphotos_366836230-stock-photo-traditional-beef-birria-stew-mexican.jpg" alt="Birria">
                        <h3>Birria</h3>
                        <p>90 min | Avanzado</p>
                        <button onclick="atrapada()">Ver receta</button>
                    </div>


                </div>

            </div>

        </div>

        <div>
            <a href="../index.php"><button class="volver">Volver</button></a>
        </div>
        
        <footer>
            <p>
                © 2026 WikiBrock | Proyecto Académico
            </p>
        </footer>
    <script src="../js/categorias.js"></script>
    </body>
</html>