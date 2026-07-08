function validarFormulario() {

    let nombre = document.getElementById("nombre").value;
    let texto = document.getElementById("mensajeTexto").value;
    let correo = document.getElementById("correo").value;
    let celular = document.getElementById("celular").value;

    if (nombre == "") {
        document.getElementById("aviso").textContent = "Campo obligatorio";
        document.getElementById("aviso").style.color = "red";
    } else {
        document.getElementById("aviso").textContent = "";
    }

    if (texto == "") {
        document.getElementById("avisoMensaje").textContent = "Campo obligatorio";
        document.getElementById("avisoMensaje").style.color = "red";
    } else {
        document.getElementById("avisoMensaje").textContent = "";
    }

    if (correo.includes("@") && correo.includes(".")) {
        document.getElementById("m_correo").textContent = "Correo válido";
        document.getElementById("m_correo").style.color = "green";
    } else {
        document.getElementById("m_correo").textContent = "Correo inválido";
        document.getElementById("m_correo").style.color = "red";
    }

    if (celular.length == 10) {
        document.getElementById("cellphone").textContent = "Número válido";
        document.getElementById("cellphone").style.color = "green";
    } else {
        document.getElementById("cellphone").textContent = "Número inválido (deben ser 10 dígitos)";
        document.getElementById("cellphone").style.color = "red";
    }

    if  (nombre != "" && texto != "" && correo.includes("@") && correo.includes(".") && celular.length == 10) {

        document.getElementById("mensaje").textContent = "Mensaje enviado correctamente";
        document.getElementById("mensaje").style.color = "green";

        document.getElementById("formContacto").submit();

    } else {

        document.getElementById("mensaje").textContent = "Revise los datos ingresados";
        document.getElementById("mensaje").style.color = "red";
        
    }
}