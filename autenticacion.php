<?php
include('../conexion.php');

// Iniciar sesión
session_start();

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $us = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    // Consulta para verificar las credenciales del usuario
    $sql = "SELECT id, usuario, contraseña, nombre FROM administrador WHERE usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $us);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Usuario encontrado
        $row = $result->fetch_assoc();
        $id = $row["id"];
        $usuario = $row["usuario"];
        $contraseña = $row["contraseña"];
        $nom = $row["nombre"];

        // Verificar si la contraseña es correcta
        if (password_verify($contraseña, $contraseña)) {
            // Contraseña correcta, iniciar sesión
            $_SESSION["id"] = $id;
            $_SESSION["nombre"] = $nom;
            
            // Redireccionar a la página principal
            header("Location: ../galeria/galeriaadmin.php");
            exit();
        } else {
            // Contraseña incorrecta, establecer mensaje de error en la sesión
            $_SESSION["error_message"] = "Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado, establecer mensaje de error en la sesión
        $_SESSION["error_message"] = "Usuario o contraseña incorrectos.";
    }
    
    // Redireccionar de regreso al formulario de inicio de sesión en caso de error
    header("Location: ../galeria/galeriaadmin.php");
    exit();
}
?>
