<?php
include('../conexion.php');

$id = $_GET['id'];

$SQL = "DELETE FROM tipo WHERE id_tipo = $id";
//echo $SQL;
$esql = mysqli_query($conexion, $SQL);
 
//echo $esql;

if($esql){
    ?>
    <script>
        alert("ELIMINADO CORRECTAMENTE");
        window.location = "../galeria/galeriaadmin.php";
</script>
    <?php
    //echo 'ingresado correctamente';
}

?>