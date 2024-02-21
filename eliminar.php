<?php
include('../conexion.php');

$id = $_GET['id_planta'];

$SQL = "DELETE FROM plantas WHERE id_planta = $id";
//echo $SQL;
$esql = mysqli_query($conexion, $SQL);
 
//echo $esql;

if($esql){
    ?>
    <script>
        alert("ELIMINADO CORRECTAMENTE");
        window.location = "javascript:history.back()"; // Utilizar javascript:history.back()
</script>
    <?php
    //echo 'ingresado correctamente';
}

?>