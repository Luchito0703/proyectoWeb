function validateContractForm() {
    var idContract = document.getElementById("id_contract").value;
    var idContra = document.getElementById("id_contra").value;
    var dniAdminProj = document.getElementById("dni_admin_proj").value;
    var nitCustomer = document.getElementById("nit_customer").value;

    // Verificar si los campos están vacíos
    if (idContract === "" || idContra === "" || dniAdminProj === "" || nitCustomer === "") {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    // Validar que los campos numéricos tengan valores válidos
    if (isNaN(idContra) || isNaN(dniAdminProj) || isNaN(nitCustomer)) {
        alert("Los campos de ID del Contratista, Cédula del Administrador y Nit de la Empresa deben ser valores numéricos.");
        return false;
    }

    // Validar el formato del ID del Contrato (puedes ajustar según tus necesidades específicas)
    var idContractRegex = /^[A-Za-z0-9]+$/;
    if (!idContractRegex.test(idContract)) {
        alert("Formato de ID de contrato inválido. Solo se permiten letras y números.");
        return false;
    }

    alert("Contrato registrado correctamente!");

    // Devolver true para permitir el envío del formulario
    return true;
}
