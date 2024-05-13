<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap">
    <script src="https://kit.fontawesome.com/4c18fef4cd.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="Registro_adm.php" method="post" class="mt-5">
          <div class="text-center">
            <img src="../../Assets/Img/logo.png" height="90" alt="Logo">
          </div>
          <hr class="my-4">
          <div class="form-group">
            <label for="gmail">Correo electrónico:</label>
            <input type="email" id="Gmail" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" id="Nombre" name="user" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="gmail">Contraseña:</label>
            <div class="input-group">
              <input type="password" id="Pass" name="clave" class="form-control" required>
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="fas fa-eye" id="eye-icon"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="submit" value="Enviar" name="subir" class="btn btn-primary btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="../../Assets/Js/password.js"></script>
</body>
</html>
