function validateEquipmentForm() {
    var idEquipment = document.getElementById("id_equipment").value;
    var nameEquipment = document.getElementById("name_equipment").value;

    // Verificar si los campos están vacíos
    if (idEquipment === "" || nameEquipment === "") {
        alert("Por favor, completa todos los campos.");
        return false;
    }

    alert("Equipo creado correctamente!");

    // Devolver true para permitir el envío del formulario
    return true;
}
