function obtenerUrlSegunTipo($idTipo) {
    // Define la lógica para asignar URL según el tipo
    switch ($idTipo) {
        case 1:
            return 'pagina_tipo_1.php';
        case 2:
            return 'pagina_tipo_2.php';
        // Agrega más casos según los tipos que tengas en tu base de datos
        default:
            return 'pagina_predeterminada.php';
    }
}