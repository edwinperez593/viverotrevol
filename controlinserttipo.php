<?php
include('../conexion.php');

// Verificar si se han recibido todos los datos necesarios del formulario

    $idt = $_POST['id_tipo'];
    $img = addslashes(file_get_contents($_FILES['imagen_url']['tmp_name']));
    $tip = $_POST['Tipo_planta'];

    $SQL = "INSERT INTO tipo (id_tipo,imagen_url,Tipo_planta) 
    VALUES ('".$idt."','".$img."','".$tip."')";

    // Ejecutar la consulta SQL
    $esql = mysqli_query($conexion, $SQL);

    if($esql){
        ?>
        <script>
            alert("Ingresado correctamente");
            window.location = "../galeria/galeriaadmin.php";
        </script>
        <?php
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }

?>
