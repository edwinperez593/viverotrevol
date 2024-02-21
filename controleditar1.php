<?php
include('../conexion.php');

// Verificar si se han recibido todos los datos necesarios del formulario
if(isset($_POST['editar']) && isset($_POST['id_tipo'])) {

    $id_tipo = $_POST['id_tipo'];
    $Tipo_planta = $_POST['Tipo_planta'];


    // Actualizar los datos en la base de datos
    $sql_actualizar = "UPDATE tipo SET Tipo_planta='$Tipo_planta' WHERE id_tipo=$id_tipo";
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
