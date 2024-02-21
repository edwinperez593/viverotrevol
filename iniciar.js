function loginUser() {
    // Obtiene los valores de usuario y contraseña
    var username = document.getElementById("usernameInput").value;
    var password = document.getElementById("passwordInput").value;

    // Verifica si el usuario es "edwin" y la contraseña es "123"
    if (username === "edwin" && password === "123") {
        // Redirecciona a la página deseada
        window.location.href = "ornamental.php";
        return false; // Evita que el formulario se envíe
    } else {
        // En caso contrario, puedes mostrar un mensaje de error o realizar otras acciones
        alert("Credenciales incorrectas. Intenta de nuevo.");
        return false; // Evita que el formulario se envíe
    }
}

function closeLoginForm() {
    // Oculta la ventana flotante y el fondo oscurecido
    document.getElementById("loginFormContainer").style.display = "none";
    document.getElementById("overlay").style.display = "none";
}

function openLoginForm() {
    // Muestra la ventana flotante y el fondo oscurecido
    document.getElementById("loginFormContainer").style.display = "block";
    document.getElementById("overlay").style.display = "block";
}