<?php include "./header.php"?>
<?php include "./scripts.php" ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <h2 align="center">AGREGAR PLANTA</h2>
                    <a onclick="irAtras()" class="btn btn-success"> <i class="fa-solid fa-backward"></i> REGRESAR </a>
                    <hr>

                    <form action="controlinsertar.php" method="post" enctype="multipart/form-data">
                        <label>Planta</label>
                        <input type="text" class="form-control" required name="nombre"  placeholder="Ingrese el nombre de la planta"/>
                        <hr>

                        <label>Descripción/Cuidado</label>
                        <input type="text" class="form-control" required name="descripcion" placeholder="Ingrese la descripción de la planta" />
                        <hr>

                        <label>Precio</label>
                        
                        <input type="number"  class="form-control"  name="precio" step="0.10" placeholder="Ingrese el precio" oninput="formatoMoneda(this)" required>
                        <hr>

                        <label>Imagen Planta</label> 
                        <input type="file" class="form-control" required name="imagen" />
                        <hr>

                        <label>Tipo Planta</label>
                        <select name="id_tipo">
                            <?php
                            include('../conexion.php');
                            $sql = "SELECT * FROM tipo";
                            $esql = mysqli_query($conexion, $sql);
                            while ($fila = mysqli_fetch_assoc($esql)) {
                                ?>
                                <option value="<?php echo $fila['id_tipo']; ?>">
                                    <?php echo $fila['Tipo_planta']; ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                        <hr>
                        <input type="submit" class="btn btn-primary mt-3" value="AGREGAR" style="background-color: yellow; border-color:black; color: black;" />
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

</body>
</html>

