<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4c18fef4cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Assets/Css/login.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <div class="block">
                    <form action="login.php" method="post">
                        <div class="text-center mb-4">
                            <img src="../../Assets/Img/logo.png" height="100" alt="Logo">
                            <hr color="red">
                        </div>
                        <h3 class="text-center mb-4">Inicio de sesión</h3>
                        <div class="form-group">
                            <label for="nombre">Nombre de usuario:</label>
                            <input type="text" class="form-control" name="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña:</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="Pass" name="Clave">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="eye-icon"><i class="fa-solid fa-eye"></i></button>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../Assets/Js/password.js"></script>
</body>
</html>
