<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Barra Superior e Inferior</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <link rel="stylesheet" href="galeriaadmin.css">

</head>

<body>

    <!-- Barra Inferior -->
    <div class="header-bottom">
        <div class="logo">
            <a href="http://localhost/VIVERO/inicio/inicio.php">
                <img src="http://localhost/VIVERO/img/imagenes/logo1.jpg" height="90">
            </a>
        </div>
        <div class="text-content">
            <h1> </h1>
        </div>
        <div class="top-nav">
        <i class="fab fa-yahoo"></i>: &nbsp;&nbsp;ing_irene_elizabeth_777@yahooo.com<br><br>
         <i class="fas fa-user"></i>:&nbsp;&nbsp;+593 96 791 0393

             
        </div>
    </div>

    <!-- Barra Superior -->
    <div class="header-top">
        <div class="container">
            <div class="top-nav">
                <ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="http://localhost/VIVERO/inicio/inicio.php">Inicio</a></li>
                    <li><a href="http://localhost/VIVERO/galeria/galeriausu.php">Galería</a></li>
                    <li><a href="http://localhost/VIVERO/galeria/informacion1.php">Información</a></li>
                    
                    <div class="dropdown">
                    <li><a >Más</a></li>
        <div class="dropdown-content">
            <a href="http://localhost/VIVERO/inicio/mision1.php">Misión</a>
            <a href="http://localhost/VIVERO/inicio/mision1.php">Visión</a>
            <a href="http://localhost/VIVERO/inicio/inicio.php">¿Quiénes Somos?</a>
        </div>
    </div>
                     <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contactanos:</h4>
                    <li><a href="https://wa.me/message/ZGNMM5D2UPKEO1"> </a><a href="https://wa.me/message/ZGNMM5D2UPKEO1"><button class="button whatsapp">
                                <i class="fab fa-whatsapp"></i>
                            </button></a></li>

                    <li><a href="https://www.facebook.com/profile.php?id=100093658118083&mibextid=vk8aRt"></a><a href="https://www.facebook.com/profile.php?id=100093658118083&mibextid=vk8aRt"><button class="button facebook">
                                <i class="fab fa-facebook"></i>
                            </button></a></li>

                    <li><a href="https://maps.app.goo.gl/XbvRgm1hSpkgEK4j7"></a><a href="https://maps.app.goo.gl/XbvRgm1hSpkgEK4j7"><button class="button location">
                                <i class="fas fa-map-marker-alt"></i>
                            </button></a></li>

                </ul>
            </div>
        </div>
    </div><br>

    <div class="titulo">
            <h2> Galería </h2><h3 align="center"> Sección Tipos </h3>
            
       </div>





    <?php
    include('../conexion.php');

    $id_tipo_deseado = 2;
    $sql = "SELECT * FROM tipo ";

    $esql = mysqli_query($conexion, $sql);

    if ($esql === false) {
        echo "Error en la consulta: " . mysqli_error($conexion);
    } else {
        if(mysqli_num_rows($esql) == 0) {
            echo "No hay datos";
        } else {
            ?>
            <div class="divcontent">
                <?php while($mostrar = mysqli_fetch_assoc($esql)) { ?>
                    <div class="product">
                      <!-- /////////////////////////////////////////////-->
                    <a href="../plantas/plantasusu.php?id_planta=<?php echo $mostrar['id_tipo']; ?>">    
                    <div class="divcard">
                            <img src='data:image/jpeg;base64,<?= base64_encode($mostrar['imagen_url']) ?>' alt=''>
                        </div>
                </a>
                        <div class="divinfo">
                            <div class="divnombre"><?php echo $mostrar['Tipo_planta'] ?></div>
                            
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php
        }
    }
    ?>
    





    <br><br> 
    <!-- Pie de Página -->
    <div class="footer">
        <div class="container">
            <div class="contact-info">
                <h3>Contacto</h3>
                <p>Dirección: Av.Pedro Vásconez y Manizales, Izamba,Ambato,Ecuador</p>
                <p>Teléfono: +593967910393</p>
                <p>Correo: ingireneelizabeth777@gmail.com</p>
            </div>
        </div>
    </div>

    
    
</body>

</html>
