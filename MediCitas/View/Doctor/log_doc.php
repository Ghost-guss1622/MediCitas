<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4c18fef4cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="block">
                    <form action="login.php" method="post">
                        <div class="text-center">
                            <img src="../../Assets/Img/logo.png" height="150">
                        </div>
                        <hr>
                        <h3 class="text-center">Inicio de sesión</h3>
                        <div class="form-group">
                            <label for="nombre">Nombre de usuario:</label>
                            <input type="text" id="User" name="Usuario" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña:</label>
                            <div class="input-group">
                                <input type="password" id="Pass" name="Clave" class="form-control" required>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-eye" id="eye-icon"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../Assets/Js/password.js"></script>
</body>
</html>
