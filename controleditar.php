<?php
include('../conexion.php');

// Verificar si se han recibido todos los datos necesarios del formulario
if(isset($_POST['editar']) && isset($_POST['id_planta'])) {

    $id_planta = $_POST['id_planta'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $id_tipo = $_POST['id_tipo'];

    // Actualizar los datos en la base de datos
    $sql_actualizar = "UPDATE plantas SET nombre='$nombre', descripcion='$descripcion', precio='$precio', id_tipo=$id_tipo WHERE id_planta=$id_planta";
    $resultado_actualizar = mysqli_query($conexion, $sql_actualizar);

    if($resultado_actualizar){
        ?>
        <script>
            alert("Planta actualizada correctamente");
            window.history.go(-2); // Regresar dos páginas atrás en el historial
        </script>
        <?php
    } else {
        echo "Error al actualizar planta: " . mysqli_error($conexion);
    }
} else {
    echo "No se han recibido todos los datos necesarios del formulario.";
}
?>
