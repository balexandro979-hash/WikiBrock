function aviso(){
    alert("Esta funcion aún no está disponible. Seguimos trabajando para que tengas la mejor experiencia de usuario. Lamentamos los inconvenientes. Click en aceptar.")
}

function atrapada(){
    alert("Oops! Nos descubriste, aun no tenemos esta receta.")
}

document.addEventListener("DOMContentLoaded", () => {
    
    fetch('../JSON/sustituciones.json')
        .then(respuesta => respuesta.json()) 
        .then(datos => {
            // 2. Repartimos la información a cada tarjeta usando su ID
            document.getElementById('texto-clasicos').textContent = datos.clasicos;
            document.getElementById('texto-comidas').textContent = datos.comidas;
            document.getElementById('texto-postres').textContent = datos.postres;
            document.getElementById('texto-desayunos').textContent = datos.desayunos;
            document.getElementById('texto-cenas').textContent = datos.cenas;
            document.getElementById('texto-bebidas').textContent = datos.bebidas;
        })
        .catch(error => {
            console.error("Hubo un error cargando los textos:", error);
        });
        
});