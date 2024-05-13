<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/4c18fef4cd.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <img src="../../Assets/Img/logo.png" class="mx-auto d-block mb-4" height="90" alt="Logo">
                        <hr color="red">
                        <h3 class="text-center">Inicio de sesión</h3>
                        <form action="Login.php" method="post">
                            <div class="form-group">
                                <label for="nombre">Nombre de usuario:</label>
                                <input type="text" name="Usuario" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="pass">Contraseña:</label>
                                <div class="input-group">
                                    <input type="password" id="Pass" name="Clave" class="form-control" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-eye" id="eye-icon"></i></span>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" value="Enviar" class="btn btn-primary btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../../Assets/Js/password.js"></script>
</body>
</html>
