function validateAdminForm() {
    var dni = document.getElementById("dni").value;
    var name = document.getElementById("name").value;
    var numberPhone = document.getElementById("number_phone").value;
    var address = document.getElementById("address").value;
    var email = document.getElementById("email").value;

    // Verificar si los campos están vacíos
    if (dni === "" || name === "" || numberPhone === "" || address === "" || email === "") {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    // Validar el formato del número de teléfono (solo números y mínimo 10 dígitos)
    var phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(numberPhone)) {
        alert("Número de teléfono inválido. Debe contener solo números y tener 10 dígitos.");
        return false;
    }

    // Validar el formato del correo electrónico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Correo electrónico inválido.");
        return false;
    }

    alert("Jefe administrativo creado correctamente!");

    return true;
}
