function validateContractorForm() {
    var idContractor = document.getElementById("id_contractor").value;
    var nameContractor = document.getElementById("name_contractor").value;
    var phoneNumber = document.getElementById("number_phone").value;
    var addressContractor = document.getElementById("address_contractor").value;
    var dniContractor = document.getElementById("dni_contractor").value;
    var emailContractor = document.getElementById("email_contractor").value;

    // Verificar si los campos están vacíos
    if (idContractor === "" || nameContractor === "" || phoneNumber === "" || addressContractor === "" || dniContractor === "" || emailContractor === "") {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    // Validar el formato del número de teléfono (solo números y mínimo 10 dígitos)
    var phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(phoneNumber)) {
        alert("Número de teléfono inválido. Debe contener solo números y tener 10 dígitos.");
        return false;
    }

    // Validar el formato del correo electrónico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailContractor)) {
        alert("Correo electrónico inválido.");
        return false;
    }

    // Validar el formato del número de documento (DNI) (solo números y longitud 8 dígitos)
    var dniRegex = /^\d{8}$/;
    if (!dniRegex.test(dniContractor)) {
        alert("Número de documento inválido. Debe contener solo números y tener 8 dígitos.");
        return false;
    }

    alert("Contratista creado correctamente!");

    // Devolver true para permitir el envío del formulario
    return true;
}
