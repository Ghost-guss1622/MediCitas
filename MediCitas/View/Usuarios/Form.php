<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/Css/registros.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap">
    <script src="https://kit.fontawesome.com/4c18fef4cd.js" crossorigin="anonymous"></script>

    <title>Formulario de Registro</title>
</head>
<body>
  <div class="cont">
    <form action="registro.php" method="post">
     <center><img src="../../Assets/Img/logo.png" height="190"></center>
      <hr class="divider">
      <br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="Nombre" name="name">
           <br><br>
        <label for="second-name">Apellido:</label>
        <input type="text" id="Apellido" name="second">
          <br><br>
          <label for="usuario">Usuario:</label>
        <input type="text" id="Apellido" name="user">
          <br><br>
        <label for="age">Edad: </label>
        <input type="number" id="Edad" name="age">
          <br><br>
        <label for="gmail">Correo electrónico:</label>
        <input type="email" id="Gmail" name="email">
        <br><br>
        <label for="gmail">Contraseña:</label>
        <input type="password" id="Pass" name="clave"><i class="fa-solid fa-eye" id="eye-icon"></i>
        <br><br>
        <input type="submit" value="Enviar" name="subir">
      </form>
      <script src="../../Assets/Js/password.js"></script>
  </div>
</body>
</html>