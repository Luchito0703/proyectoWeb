function validateCustomerForm() {
    var nitCustomer = document.getElementById("nit_customer").value;
    var dniCustomer = document.getElementById("dni_customer").value;
    var nameCustomer = document.getElementById("name_customer").value;
    var numberCustomer = document.getElementById("number_customer").value;
    var addressCustomer = document.getElementById("address_customer").value;
    var emailCustomer = document.getElementById("email_customer").value;

    // Verificar si los campos están vacíos
    if (nitCustomer === "" || dniCustomer === "" || nameCustomer === "" || numberCustomer === "" || addressCustomer === "" || emailCustomer === "") {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    // Validar el formato del número de teléfono (solo números y mínimo 10 dígitos)
    var phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(numberCustomer)) {
        alert("Número de teléfono inválido. Debe contener solo números y tener 10 dígitos.");
        return false;
    }

    // Validar el formato del correo electrónico
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(emailCustomer)) {
        alert("Correo electrónico inválido.");
        return false;
    }

    // Validar el formato del NIT (solo números y caracteres especiales)
    var nitRegex = /^[0-9\-]+$/;
    if (!nitRegex.test(nitCustomer)) {
        alert("NIT inválido. Debe contener solo números y guiones (-).");
        return false;
    }

    // Validar el formato del DNI (solo números y longitud 8 dígitos)
    var dniRegex = /^\d{8}$/;
    if (!dniRegex.test(dniCustomer)) {
        alert("DNI inválido. Debe contener solo 8 dígitos.");
        return false;
    }

    alert("Cliente creado correctamente!");

    // Devolver true para permitir el envío del formulario
    return true;
}
