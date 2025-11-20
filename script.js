// Validación básica de formulario con JavaScript
function validarFormulario() {
    let nombre = document.getElementById("nombre").value.trim();
    let correo = document.getElementById("correo").value.trim();
    let clave = document.getElementById("clave").value.trim();

    if (nombre === "" || correo === "" || clave === "") {
        alert("Todos los campos son obligatorios.");
        return false; // No permite enviar
    }

    return true; // Envía el formulario
}
