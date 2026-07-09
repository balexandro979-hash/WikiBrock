function validarCorreo(){
    let correo = document.getElementById("correo").value;

    if(correo.includes("@")){
        document.getElementById("m_correo").textContent = "Correo Válido"
        m_correo.style.color = "green"
    } else {
        document.getElementById("m_correo").textContent = "Correo Inválido"
        m_correo.style.color = "red"
    }
}