<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Barra Superior e Inferior</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <link rel="stylesheet" href="mision.css">
<script src="iniciar.js"></script>
<script src="inicio.js"></script>
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
                    <li><a href="http://localhost/VIVERO/galeria/galeriaadmin.php">Galería</a></li>
                    <li><a href="http://localhost/VIVERO/galeria/informacion.php">Información</a></li>
                    
                    <div class="dropdown">
                    <li><a >Más</a></li>
        <div class="dropdown-content">
            <a href="mision.php">Misión</a>
            <a onclick="scroleToClass()"  >Visión</a>
            <a href="inicio.php" class="quienes" >¿Quiénes Somos?</a>
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

    <div class="slider-container"  >
        <div class="slider-wrapper" >
            <!-- Cada slide con imagen -->
            <div class="slide" >
                <img src="http://localhost/VIVERO/img/m2.jpeg" alt="Slide 1"></div>
            <div class="slide"><img src="http://localhost/VIVERO/img/m4.jpeg" alt="Slide 2"></div>
            <div class="slide"><img src="http://localhost/VIVERO/img/m5.jpeg" alt="Slide 3"></div>
            <div class="slide"><img src="http://localhost/VIVERO/img/m6" alt="Slide 4"></div>
            <!-- Agrega más slides según sea necesario -->
        </div>
        <div class="center">
                <br>
                <h4>"Transforma tu hogar con la frescura y belleza de nuestras plantas" </h4>
                <br>
    </div>
        <!-- Botones de navegación -->
        <div class="slider-nav">
            <button onclick="prevSlide()">&#10094;</button>
            <button onclick="nextSlide()">&#10095;</button>
        </div>
        
    </div>
    <br>
    

<div class="mision">
       <h2>Misión</h2>
    
        <p>Preservar la naturaleza con un amplio sentido de responsabilidad social, fomentando el cuidado de una planta dentro de nuestro entorno, buscando conservar las especies ornamentales mediante la producción y comercialización de las mismas.</p>
        <img src="../img/mision.jpg" alt="Imagen 1" width="300" height="200" align="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="../img/trabajos.jpg" alt="Imagen 1" width="300" height="200" align="middle">
    </div>
    


    <br><br>
    <div class="vision">
       <h2>Visión</h2>
    
        <p>Ser el vivero más productivo de Izamba. Nos posicionaremos en el mercado como el principal productor de plantas, implementando nuevas sucursales ampliando nuestra comercialización, con cumplimiento, responsabilidad y calidad humana</p>
        <img src="../img/vision.jpg" alt="Imagen 1" width="300" height="200" align="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="../img/visionn.png" alt="Imagen 1" width="300" height="200" align="middle">
    </div>



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

    
    
    <script>
        function scrollToClass() {
            
            // Aquí puedes incluir código adicional antes de redirigir a la otra página
            window.location.href = "inicio.php";  // Reemplaza "otra_pagina.html" con la URL de la otra página
        }

        function scroleToClass() {
            
           // Obtenemos la colección de elementos con la clase específica
           var elementosConClase = document.getElementsByClassName('vision');

            // Usamos el primer elemento de la colección (asumiendo que solo hay uno)
            if (elementosConClase.length > 0) {
                elementosConClase[0].scrollIntoView({ behavior: 'smooth' });
}
        }
    
    </script>
</body>

</html>
