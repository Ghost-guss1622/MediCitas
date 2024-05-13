<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="Assets/Css/stylehome.css">
    <style>
        .jumbotron {
            background-image: url('https://peruconstruye.net/wp-content/uploads/2021/03/mercados-2.jpg');
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 0;
        }
        .feature {
            padding: 50px 0;
            text-align: center;
        }
        .footer-social-icons a {
            color: white;
            margin: 0 10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="Assets/Img/logo.png" height="100" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="View/Usuarios/Sesion.php">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="View/Usuarios/Sesion.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="View/Usuarios/Form.php">Registrarse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="View/Usuarios/Sesion.php">Iniciar Sesión</a>
                </li>
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Perfil.php">Mi perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Logout.php">Cerrar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <span class="navbar-text">Don. <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <h1 class="display-4">¡Bienvenido a MediCitas!</h1>
    <p class="lead">Una plataforma increíble para gestionar tus citas médicas de manera fácil y rápida.</p>
    <hr class="my-4">
    <p>Descubre todas las funcionalidades que tenemos para ofrecerte.</p>
</div>

<div class="container feature">
    <div class="row">
        <div class="col-lg-4">
            <h2>Administra Usuarios</h2>
            <p>Con nuestra herramienta de administración de usuarios, puedes agregar, editar y eliminar usuarios fácilmente.</p>
        </div>
        <div class="col-lg-4">
            <h2>Administra Productos</h2>
            <p>Controla tu inventario de productos de manera eficiente con nuestras funciones de administración de productos.</p>
        </div>
        <div class="col-lg-4">
            <h2>Seguridad y Privacidad</h2>
            <p>Nos preocupamos por la seguridad de tus datos. Tu información está protegida en nuestra base de datos.</p>
        </div>
    </div>
</div>

<div class="container feature">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 text-center">
            <h2>Siempre mejorando</h2>
            <p>En la era digital actual, el tiempo es un recurso invaluable. Es por eso que en MediCitas, nos esforzamos por simplificar y optimizar la búsqueda y gestión de citas. Gracias a nuestra plataforma, ahora las personas pueden ahorrarse el tedioso trabajo de coordinar agendas, hacer llamadas interminables y enviar correos electrónicos sin fin.</p>
        </div>
    </div>
</div>

<footer class="bg-dark text-white text-center py-4">
    <ul>
        <li> <b>Acerca de:</b>
        <p>Somos una pequeña empresa de emprendedores <br>
            que buscan mejorar el bien común. </p></li>

        <li><b>Contacto:</b> <p>
            Example@gmail.com
        </p></li>

        <li><p><b>Desarrolladores:</b> <br>
            Angel Josue Rodriguez Aleman - RA232736<br>
            Douglas Johan Lopez landaverde - LL231775<br>
            Cristian Gerardo Ventura Rendón - VR221500<br>
            Gerardo Francisco Sanchez Hernandez - SH202426<br>
            Yngwie Marvin Morales Lozano - ML232728</p></li>
    </ul>
    <hr color="#a7a7a7" width="90%">
    <br>

    <div class="footer-social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
