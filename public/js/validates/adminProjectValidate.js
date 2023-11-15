function validateAdminProjectForm() {
    var dniAdmin = document.getElementById("dni_admin").value;
    var nameAdmin = document.getElementById("name_admin").value;
    var numberPhoneAdmin = document.getElementById("number_phone_admin").value;
    var addressAdmin = document.getElementById("address_admin").value;
    var emailAdmin = document.getElementById("email_admin").value;

    // Verificar si los campos están vacíos
    if (dniAdmin === "" || nameAdmin === "" || numberPhoneAdmin === "" || addressAdmin === "" || emailAdmin === "") {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    // Validar el formato del número de teléfono (solo números y mínimo 10 dígitos)
    var phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(numberPhoneAdmin)) {
        alert("Número de teléfono inválido. Debe contener solo números y tener 10 dígitos.");
        return false;
    }

    // Validar el formato del correo electrónico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailAdmin)) {
        alert("Correo electrónico inválido.");
        return false;
    }

    alert("Administrador del proyecto creado correctamente!");

    // Devolver true para permitir el envío del formulario
    return true;
}
