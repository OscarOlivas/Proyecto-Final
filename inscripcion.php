<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/inscripcion.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Inscribete</title>
</head>

<body>
    <!-- MENU -->
    <div class="contenedor-header">
        <header>
            <h1><a href="index.html">THE <span class="txtRojo">ELITE GYM</span></a></h1>
            <nav id="nav">
                <a href="index.html" onclick="seleccionar()">inicio</a>
                <a href="nosotros.html" onclick="seleccionar()">Nosotros</a>
                <a href="servicios.html" onclick="seleccionar()">Servicios</a>
                <a href="prestaciones.html" onclick="seleccionar()">Prestaciones</a>
                <a href="galeria.html" onclick="seleccionar()">Galería</a>
                <a href="contacto.html" onclick="seleccionar()">Contacto</a>
                <a href="inscripcion.php" onclick="seleccionar()">Inscripcion</a>
                <a href="paleta.html" onclick="seleccionar()">Paleta</a>
            </nav>
            <div id="icono-nav" class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    </div>
    <!--FORMULARIO DE INSCRIPCION-->

    <form method="POST" autocomplete="off" action="guardar.php" runat="server" enctype="multipart/form-data">
        <h2>Inscribete</h2>
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="password" name="password" placeholder="Contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="input-container">
                <input type="email" name="email" placeholder="Correo Electronico">
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-container">
                <input type="tel" name="phone" placeholder="Telefono">
                <i class="fa-solid fa-phone"></i>
            </div>

            <a href="#">Terminos y Condiciones</a>
            <input type="submit" name="send" class="btn" value="Enviar">
        </div>
    </form>
    <!-- FOOTER -->
    <footer>
        <div class="info">
            <p>2024 - <span class="txtRojo">THE ELITE GYM</span> Todos los derechos reservados</p>
            <div class="redes">
                <a
                    href="https://www.facebook.com/Elitefitnessynutrition/?paipv=0&eav=AfaOHQQsA2EmCG8vY0Lmb-S-qIKlZ3T6SqnYMmsHjnDDw5CydTBGutkWWrnX9COy-4s&_rdr">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/elitefitnessynutrition/">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.youtube.com/@GymTopz/videos">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </footer>
    <script src="js/app.js"></script> 
</body>

</html>