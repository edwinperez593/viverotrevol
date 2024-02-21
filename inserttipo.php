<?php include "./header.php"?>
<?php include "./scripts.php" ?>

<div class="container">
  <div class="row">
    
  <div class="col">
  <div class="card mt-4">

  <div class="card-body">
  
  <h2 align="center"> AGREGAR TIPO DE PLANTA</h2>

  <a href="http://localhost/VIVERO/galeria/galeriaadmin.php" class="btn btn-success"> <i class="fa-solid fa-backward"></i> REGRESAR </a>
    <hr>

    
<form action="controlinserttipo.php" method="post" enctype="multipart/form-data"> 
    <input type="text" class="form-control" id="id_tipo" name="id_tipo" hidden/>
    
    <label>Imagen</label>
    <input type="file" class="form-control" id="imagen_url" required name="imagen_url"/>
    <hr>

    <label>Tipo</label>
    <input type="text" class="form-control" id="Tipo_planta" required name="Tipo_planta" placeholder="Ingrese el tipo de planta"  />
    <hr>
    <input type="submit" class="btn btn-primary mt-3" value="AGREGAR"  style="background-color: yellow; border-color:black; color: black;"/>
</form>
</div>
</div>
</div>
</div>
</div>


