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
            background-image: url('https://img.freepik.com/foto-gratis/vista-lateral-paciente-sometido-evaluacion-fisica_23-2150165486.jpg?w=1060&t=st=1715708679~exp=1715709279~hmac=124ba966580fd5e6a6afde5f5bdac64227a968b1ad974b8615f611b97cc68ba4');
            background-size: cover;
            color: white;
            text-align: center;
            padding: 100px 0;
        }
        .feature {
            padding: 50px 0;
            text-align: center;
        }
        .developer {
    font-size: 14px; /* Tamaño de fuente más pequeño */
    margin-bottom: 5px; /* Espaciado entre nombres */
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
                    <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'user_view.php' ? 'active' : ''; ?>">
                        <a class="nav-link" href="views/user_view.php">Usuarios</a>
                    </li>
                    <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'product_view.php' ? 'active' : ''; ?>">
                        <a class="nav-link" href="views/product_view.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="View/Usuarios/Form.php">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="View/Usuarios/Sesion.php">Iniciar Sesión</a>
                    </li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-item">
                            <span class="navbar-text">Ad. <?php echo htmlspecialchars($_SESSION['username']); ?></span>
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

    <div class="jumbotron" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url('https://img.freepik.com/foto-gratis/vista-lateral-paciente-sometido-evaluacion-fisica_23-2150165486.jpg?w=1060&t=st=1715708679~exp=1715709279~hmac=124ba966580fd5e6a6afde5f5bdac64227a968b1ad974b8615f611b97cc68ba4'); background-size: cover; color: white; text-align: center; padding: 100px 0;">
        <h1 class="display-4"><b>¡Bienvenido a MediCitas!</b></h1>
        <p class="lead"><b>Una plataforma increíble para administrar usuarios y productos.</b></p>
        <p><b>Descubre todas las funcionalidades que tenemos para ofrecerte.</b></p>
        <hr class="my-4">
    </div>

    <div class="container feature">
        <div class="row">
            <div class="col-lg-4">
            <i class="fas fa-user fa-3x"></i> <!-- Icono de usuario -->
            <h2>Gestión de Usuarios Simplificada</h2>
            <p>Nuestra plataforma te ofrece una experiencia sin complicaciones en la gestión de usuarios. Desde la incorporación de nuevos perfiles hasta la personalización de información existente y la gestión de permisos, tienes el control total sobre quién forma parte de tu comunidad. Simplifica tus tareas administrativas y garantiza una experiencia fluida para tus usuarios con nuestra herramienta intuitiva.</p>
            </div>
            <div class="col-lg-4">
            <i class="fas fa-box fa-3x"></i> <!-- Icono de inventario -->
            <h2>Control Eficiente del Inventario</h2>
            <p>Mantén una gestión impecable de tus productos con nuestra solución de administración de inventario. Ya sea que administres una amplia gama de artículos o un catálogo selecto, nuestras funciones te permiten supervisar cada aspecto de tu stock de manera eficiente. Desde la introducción de nuevos productos hasta la actualización de detalles y la gestión de existencias, te proporcionamos las herramientas necesarias para optimizar tus operaciones.</p>
            </div>
            <div class="col-lg-4">
            <i class="fas fa-shield-alt fa-3x"></i> <!-- Icono de seguridad -->
            <h2>Protección de Datos de Vanguardia</h2>
            <p>En un entorno digital cada vez más complejo, nos comprometemos a salvaguardar tus datos con las medidas de seguridad más avanzadas. Con encriptación de extremo a extremo y protocolos de seguridad robustos, tu información está protegida contra cualquier amenaza potencial. Confía en nosotros para mantener tus datos seguros mientras te concentras en hacer crecer tu negocio sin preocupaciones.</p>
            </div>
        </div>
    </div>

    <!--Seccion de indicaciones-->
    <section class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Cómo realizar una cita</h2>
        <p class="lead text-center">Sigue estos simples pasos para realizar una cita en MediCitas:</p>
        <ol>
            <li><i class="fas fa-user"></i> Ingresa a tu cuenta de usuario o regístrate si aún no tienes una.</li>
            <li><i class="fas fa-calendar-alt"></i> Selecciona la opción "Agendar cita" en el menú principal.</li>
            <li><i class="fas fa-clock"></i> Elige la fecha y hora disponibles que mejor se adapten a tus necesidades.</li>
            <li><i class="fas fa-user-edit"></i> Completa el formulario con tus datos personales y de contacto.</li>
            <li><i class="far fa-envelope"></i> Confirma la cita y recibirás una confirmación por correo electrónico.</li>
        </ol>
    </div>
</section>

<!--Historia-->

<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://img.freepik.com/foto-gratis/joven-doctora-o-medico-cabecera-uniforme-medico-blanco-consulta-paciente-masculino-hospital-privado-terapeuta-femenina-habla-cliente-masculino-consulta-clinica_657921-863.jpg?t=st=1715712003~exp=1715715603~hmac=f832c1f4cf4079e311bc7bc93b20b9c73906850744785f72c13e442e659ab2c0&w=1060" class="img-fluid" alt="Imagen de la historia de MediCitas">
            </div>
            <div class="col-md-6">
                <h2 class="text-center mb-4">Nuestra Historia</h2>
                <p class="lead">Descubre cómo comenzamos nuestra trayectoria en el mundo de las citas médicas:</p>
                <p>Nuestra empresa, MediCitas, nació de la necesidad de proporcionar una solución innovadora y eficiente para la gestión de citas médicas. Fundada en el año 2024 por varios representantes, nuestro objetivo desde el principio ha sido facilitar el proceso de programación de citas para pacientes y profesionales de la salud.</p>
                <p>A lo largo de los años, hemos trabajado incansablemente para mejorar y expandir nuestros servicios, incorporando tecnología de vanguardia y escuchando las necesidades de nuestros usuarios. Hoy en día, MediCitas se ha convertido en una plataforma líder en su campo, reconocida por su accesibilidad, fiabilidad y compromiso con la calidad.</p>
                <p>Desde nuestra humilde fundación hasta el presente, hemos mantenido nuestro compromiso de brindar a nuestros usuarios una experiencia excepcional en la gestión de citas médicas. Continuaremos innovando y mejorando para asegurarnos de que cada paso que den con nosotros sea seguro, eficiente y satisfactorio.</p>
            </div>
        </div>
    </div>
</section>

    <footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <ul class="list-unstyled d-flex justify-content-around">
            <li class="text-center">
                <i class="fas fa-bullseye"></i> <!-- Icono para "Misión" -->
                <b>Misión:</b>
                <p>Trabajamos para ofrecer soluciones innovadoras que contribuyan al desarrollo sostenible y mejoren la calidad de vida de las personas.</p>
            </li>
            <li class="text-center">
                <i class="fas fa-eye"></i> <!-- Icono para "Visión" -->
                <b>Visión:</b>
                <p>Ser líderes en nuestro sector, reconocidos por nuestra excelencia en el servicio y nuestro compromiso con la innovación y la responsabilidad social.</p>
            </li>
            <li class="text-center">
                <i class="fas fa-code"></i> <!-- Icono para "Desarrolladores" -->
                <b>Desarrolladores:</b>
                <div class="d-flex flex-column">
                    <p class="developer">RA232736</p>
                    <p class="developer">LL231775</p>
                    <p class="developer">VR221500</p>
                    <p class="developer">SH202426</p>
                    <p class="developer">ML232728</p>
                </div>
            </li>
        </ul>

        <h1 style="color: #007EFC;"><b>Redes Sociales:</b></h1>

        <hr color="#007EFC" width="90%">

        <div class="footer-social-icons">
            <a href="https://www.facebook.com/tucuenta" target="_blank"><i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i></a>
            <a href="https://www.twitter.com/tucuenta" target="_blank"><i class="fab fa-twitter fa-2x" style="color: #1da1f2;"></i></a>
            <a href="https://www.instagram.com/tucuenta" target="_blank"><i class="fab fa-instagram fa-2x" style="color: #c13584;"></i></a>
        </div>
    </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
