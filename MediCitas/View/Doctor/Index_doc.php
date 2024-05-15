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
    <script src="https://kit.fontawesome.com/4c18fef4cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../Assets/Css/stylehome.css">
</head>
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
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="../../Assets/Img/logo.png" height="50" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Solicitudes.php">Extras citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Administrar.php">Mi Agenda</a>
                    </li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-item">
                            <span class="navbar-text">Doc. <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Perfil.php">Mi perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Logout.php">Cerrar Sesión</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">¡Bienvenido a MediCitasPlus!</h1>
            <p class="lead">MediCitasPlus es una plataforma integral diseñada para simplificar la gestión de citas médicas y mejorar la experiencia tanto para los pacientes como para los profesionales de la salud.</p>
            <hr class="my-4">
            <p>MediCitasPlus es la solución completa para la gestión de citas médicas que ofrece una amplia gama de funcionalidades diseñadas para mejorar la eficiencia, la accesibilidad y la calidad de la atención médica.</p>
        </div>
    </div>

    <div class="container feature">
        <div class="row">
            <div class="col-md-4">
            <h2>Administra Pacientes</h2>
                <p>Herramienta de administración de pacientes, la columna vertebral de nuestra plataforma de citas médicas! Con nuestra intuitiva y poderosa función de administración de pacientes, tomar el control nunca ha sido tan fácil</p>
                    En resumen, la herramienta de administración de pacientes es una parte esencial de tu plataforma de citas médicas, que te ayuda a organizar, gestionar y optimizar la atención médica que brindas a tus pacientes. Con funcionalidades intuitivas y poderosas, puedes tomar el control de tu práctica médica y ofrecer una experiencia excepcional a tus pacientes.</p>
            </div>
            <div class="col-md-4">
            <h2>Administra Doctores</h2>
                <p>"¡Optimiza la gestión de tus doctores con nuestra potente herramienta de administración! En nuestra plataforma, puedes controlar y organizar fácilmente tu equipo médico, asegurando una atención óptima para tus pacientes en todo momento.</p>
                En resumen, en nuestra plataforma de citas médicas, nos tomamos muy en serio la seguridad y la privacidad de tus datos y los de tus pacientes. Implementamos medidas de seguridad de vanguardia y cumplimos con las regulaciones de privacidad de datos para garantizar que tus datos estén protegidos en todo momento.</p>
            </div>
            <div class="col-md-4">
            <h2>Seguridad y Privacidad</h2>
                <p>En nuestra plataforma, la seguridad y la privacidad de tus datos son nuestras principales prioridades. Sabemos lo importante que es para ti proteger la información confidencial de tus pacientes y mantener la integridad de tu negocio médico. Es por eso que hemos implementado medidas de seguridad de vanguardia para garantizar que tus datos estén protegidos en todo momento.</p>
                En resumen, en nuestra plataforma de citas médicas, nos tomamos muy en serio la seguridad y la privacidad de tus datos y los de tus pacientes. Implementamos medidas de seguridad de vanguardia y cumplimos con las regulaciones de privacidad de datos para garantizar que tus datos estén protegidos en todo momento.
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-4">
    <ul>
        <li> <b>Acerca de:</b>
        <p>Somos una pequeña empresa de emprendedores <br>
            que buscan mejorar el bien común. </p></li>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

