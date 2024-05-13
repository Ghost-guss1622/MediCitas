<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap">
    <script src="https://kit.fontawesome.com/4c18fef4cd.js" crossorigin="anonymous"></script>
    <title>Formulario de Registro</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="cont">
                <form action="registro.php" method="post">
                    <center><img src="../../Assets/Img/logo.png" height="190"></center>
                    <hr class="divider">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="Nombre" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="second-name">Apellido:</label>
                        <input type="text" id="Apellido" name="second" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input type="text" id="Usuario" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Edad: </label>
                        <input type="number" id="Edad" name="age" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="gmail">Correo electrónico:</label>
                        <input type="email" id="Gmail" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="gmail">Contraseña:</label>
                        <div class="input-group">
                            <input type="password" id="Pass" name="clave" class="form-control" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-eye" id="eye-icon"></i></span>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Enviar" name="subir" class="btn btn-primary btn-block">
                </form>
                <script src="../../Assets/Js/password.js"></script>
            </div>
        </div>
    </div>
</div>
</body>
</html>
