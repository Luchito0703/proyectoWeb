function validateCertificateForm() {
    var idCertificate = document.getElementById("id_certificate").value;
    var idContra = document.getElementById("id_contra").value;
    var nitCustomer = document.getElementById("nit_customer").value;
    var idContract = document.getElementById("id_contract").value;
    var dateExpedition = document.getElementById("date_expedition").value;
    var issue = document.getElementById("issue").value;

    // Verificar si los campos están vacíos
    if (idCertificate === "" || idContra === "" || nitCustomer === "" || idContract === "" || dateExpedition === "" || issue === "") {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    // Validar que los campos numéricos tengan valores válidos
    if (isNaN(idContra) || isNaN(nitCustomer) || isNaN(idContract)) {
        alert("Los campos de ID del Contratista, Nit de la Empresa y ID del Contrato deben ser valores numéricos.");
        return false;
    }

    // Validar el formato del ID del Certificado (puedes ajustar según tus necesidades específicas)
    var idCertificateRegex = /^[A-Za-z0-9]+$/;
    if (!idCertificateRegex.test(idCertificate)) {
        alert("Formato de ID del certificado inválido. Solo se permiten letras y números.");
        return false;
    }

    // Validar el formato de la fecha de expedición
    var dateRegex = /^\d{4}-\d{2}-\d{2}$/;
    if (!dateRegex.test(dateExpedition)) {
        alert("Formato de fecha de expedición inválido. Utiliza el formato YYYY-MM-DD.");
        return false;
    }

    alert("Certificado registrado correctamente!");

    // Devolver true para permitir el envío del formulario
    return true;
}
