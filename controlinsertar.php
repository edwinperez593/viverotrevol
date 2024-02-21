<?php
include('../conexion.php');

// Verificar si se han recibido todos los datos necesarios del formulario
if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_FILES['imagen']) && isset($_POST['id_tipo'])) {

    $nomp = $_POST['nombre'];
    $desp = $_POST['descripcion'];
    $precp = $_POST['precio'];
    $img = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $tip = $_POST['id_tipo'];

    $SQL = "INSERT INTO plantas (nombre,descripcion,precio,imagen,id_tipo) 
    VALUES ('".$nomp."', '".$desp."','".$precp."', '".$img."','".$tip."')";

    // Ejecutar la consulta SQL
    $esql = mysqli_query($conexion, $SQL);

    if($esql){
        ?>
        <script>
            alert("Ingresado correctamente");
            window.history.go(-2); // Regresar dos páginas atrás en el historial
        </script>
        <?php
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
} else {
    echo "No se han recibido todos los datos necesarios del formulario.";
}
?>
