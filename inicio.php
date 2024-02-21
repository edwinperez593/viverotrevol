<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Barra Superior e Inferior</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <link rel="stylesheet" href="inicio.css">
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
        
        <div class="top-nav">
            <a onclick="openLoginForm()" class="open-form-link"><button class="button facebook">
             <i class="fas fa-user"></i>+
                </button>
            </a>
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
                    <li><a>Más</a></li>
        <div class="dropdown-content">
            <a href="mision1.php">Misión</a>
            <a href="mision1.php">Visión</a>
            <a  onclick="scrollToClass()">¿Quiénes Somos?</a>
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





<!-- Ventana flotante de Login-->
<div id="overlay"></div>
<div id="loginFormContainer">
    <span id="closeBtn" onclick="closeLoginForm()">X</span>
    <form action="autenticacion.php" class="form" method="POST"> <!-- Añadido el método POST -->
        <h3 class="form-title">ADMINISTRAR</h3>
        <div class="input-container">
            <input placeholder="Ingrese Usuario" id="usuario" name="usuario" type="text" required> <!-- Cambiado name por id -->
        </div>
        <div class="input-container">
            <input placeholder="ingrese Clave" id="contraseña" name="contraseña" type="password" required> <!-- Cambiado name por id -->
        </div>
        <button type="submit" class="submit">Ingresar</button>
    </form>
</div>


    
    <div class="slider-container"  >
        <div class="slider-wrapper" >
            <!-- Cada slide con imagen -->
            <div class="slide" >
                <img src="http://localhost/VIVERO/img/puerta22.jpg" alt="Slide 1"></div>
            <div class="slide"><img src="http://localhost/VIVERO/img/img22.jpeg" alt="Slide 2"></div>
            <div class="slide"><img src="http://localhost/VIVERO/img/img3.jpeg" alt="Slide 3"></div>
            <div class="slide"><img src="http://localhost/VIVERO/img/puerta23.png" alt="Slide 4"></div>
            <!-- Agrega más slides según sea necesario -->
        </div>

        <!-- Botones de navegación -->
        <div class="slider-nav">
            <button onclick="prevSlide()">&#10094;</button>
            <button onclick="nextSlide()">&#10095;</button>
        </div>
    </div>

    
    <div class="center">
                <h1>Vivero "El Trévol"</h1>
            
                <button class="cboton" onclick="window.location.href='http://localhost/VIVERO/galeria/informacion1.php';">Más Información</button>
                <h4 align="center">"Transforma tu hogar con la  belleza de nuestras plantasy descubre tu rincón verde.<br> ¡Haz de tu vida un oasis!"</h4>
    </div><br><br>
        



    <div class="quienes">
       <h2>Quiénes somos</h2>
    
        <p>Somos un vivero artesanal con una amplia experiencia, especializados en comercialización de plantas ornamentales, frutales, medicinales, forestales, macetas, Etc..<br>

        Vivero Trévol cuenta con un local cautivador, espacioso y propicio para desarrollar sus actividades.

        La dedicación y el conocimiento con los que hemos abordado la desafiante tarea diaria nos han permitido un crecimiento justificado como emprendedores de éxito para asi forjarnos en el futuro.</p>
        
        <img src="../img/foto2.jpg" alt="Imagen 1" width="300" height="200" align="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="../img/foto3.jpg" alt="Imagen 1" width="300" height="200" align="middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="../img/foto.jpg" alt="Imagen 1" width="300" height="200" align="middle">
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
            // Obtenemos la colección de elementos con la clase específica
            var elementosConClase = document.getElementsByClassName('quienes');

            // Usamos el primer elemento de la colección (asumiendo que solo hay uno)
            if (elementosConClase.length > 0) {
                elementosConClase[0].scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
    
</body>

</html>
