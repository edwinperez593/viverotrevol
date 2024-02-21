<?php
include "./header.php";
include "../conexion.php";

// Verificar si se ha recibido el ID de la planta a editar
if(isset($_GET['id_planta_editar'])) {
    // Obtener el ID de la planta a editar
    $id_planta_editar = $_GET['id_planta_editar'];

    // Obtener los datos de la planta a editar
    $sql_editar = "SELECT * FROM tipo WHERE id_tipo=$id_planta_editar";
    $esql_editar = mysqli_query($conexion, $sql_editar);

    // Verificar si la consulta se ejecutó correctamente
    if($esql_editar) {
        // Obtener los datos de la planta
        $planta_editar = mysqli_fetch_assoc($esql_editar);

        // Verificar si se encontró la planta con el ID proporcionado
        if($planta_editar) {
?>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card mt-4">
                            <div class="card-body">
                                <h2 align="center">EDITAR EL TIPO DE PLANTA</h2>
                                <a onclick="irAtras()" class="btn btn-success"> <i class="fa-solid fa-backward"></i> REGRESAR </a>
                                <hr>

                                <form action="controleditar1.php" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_tipo" value="<?php echo $planta_editar['id_tipo']; ?>">

                                    <label>Imagen Planta</label> 
                                    <input type="file" class="form-control" name="imagen_url" />
                                    <hr>
                                    <label>Tipo </label>
                                    <input type="text" class="form-control" required name="Tipo_planta" value="<?php echo $planta_editar['Tipo_planta']; ?>" placeholder="Ingrese el tipo de planta" />
                                    <hr>
                                    <input type="submit" class="btn btn-primary mt-3" name="editar" value="EDITAR" style="background-color: green; border-color:black; color: #fff;" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function irAtras() {
                    window.history.back();
                }
            </script>

<?php
        } else {
            echo "No se encontró una planta con el ID proporcionado.";
        }
    } else {
        echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
    }
} else {
    echo "No se ha proporcionado el ID de la planta a editar.";
}

include "./scripts.php";
?>
</body>
</html>
