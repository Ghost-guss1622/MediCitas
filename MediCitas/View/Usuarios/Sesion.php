<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4c18fef4cd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../Assets/Css/login.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="block">
        <form action="Login.php" method="post">
        <img src="../../Assets/Img/logo.png" height="190">
             <hr color="red">
             <br><br>
    <h3>Inicio de sesión</h3>
    <br><br>
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" name="Usuario" required>
           <br><br>
        <label for="pass">Contraseña:</label>
        <input type="password" id="Pass" name="Clave" required><i class="fa-solid fa-eye" id="eye-icon"></i>
        <br><br>
      <input type="submit" value="Enviar">
    </form>
    <script src="../../Assets/Js/password.js"></script>
</div>
</body>
</html>