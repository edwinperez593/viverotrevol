<?php
// Iniciar la sesión
session_start();

// Destruir todas las variables de sesión.
$_SESSION = array();

// Finalmente, destruir la sesión.
session_destroy();

// Redirigir al usuario a la página de inicio de sesión u otra página deseada
header("Location: ../inicio/inicio.php");
exit();
?>
