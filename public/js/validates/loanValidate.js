function validateLoanForm() {
    var idPrest = document.getElementById("id_prest").value;
    var idContractor = document.getElementById("id_contractor").value;
    var idEquipment = document.getElementById("id_equipment").value;
    var dateDevolution = document.getElementById("date_devolution").value;
    var dateLoan = document.getElementById("date_loan").value;

    // Verificar si los campos están vacíos
    if (idPrest === "" || idContractor === "" || idEquipment === "" || dateDevolution === "" || dateLoan === "") {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    // Validar que los campos numéricos tengan valores válidos
    if (isNaN(idContractor) || isNaN(idEquipment)) {
        alert("Los campos de ID del Contratista y del Equipo deben ser valores numéricos.");
        return false;
    }

    // Validar el formato de fecha DD-MM-YYYY
    var dateRegex = /^\d{2}-\d{2}-\d{4}$/;
    if (!dateRegex.test(dateDevolution) || !dateRegex.test(dateLoan)) {
        alert("Formato de fecha inválido. Utiliza el formato DD-MM-YYYY.");
        return false;
    }

    alert("Préstamo registrado correctamente!");

    // Devolver true para permitir el envío del formulario
    return true;
}
