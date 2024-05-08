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
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#"><img src="../../Assets/Img/logo.png" height="100"></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="CRUD/Crud.php">Doctores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/product_view.php">Productos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                </ul>
                <ul class="navbar-nav ml-auto">
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
                <?php else: ?>
                <?php endif; ?>
            </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <h1 class="display-4">¡Bienvenido a Mi Aplicación!</h1>
        <p class="lead">Una plataforma increíble para administrar usuarios y productos.</p>
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
</body>
</html>