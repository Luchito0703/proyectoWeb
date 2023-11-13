function validateLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Verificar si los campos están vacíos
    if (username === "" || password === "") {
        alert("Por favor, completa todos los campos.");
        return;
    }

    // Validar la longitud de la contraseña (mínimo 6 caracteres)
    if (password.length < 8) {
        alert("La contraseña debe tener al menos 6 caracteres.");
        return;
    }

    alert("Inicio de sesión exitoso!");
    
}
