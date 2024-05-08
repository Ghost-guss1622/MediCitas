<?php
include ("C:/xampp/htdocs/MediCitas/Config_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $apellido = $_POST['second'];
    $usuario = $_POST['user'];
    $edad = $_POST['age'];
    $gmail = $_POST['email'];
    $pass = $_POST['clave'];

    $crear = "INSERT INTO users (nombre, apellido, usuario, edad, gmail, pass) VALUES ('$nombre', '$apellido', '$usuario', '$edad', '$gmail', '$pass')";
    if (mysqli_query($conexion, $crear)) {
        echo '<script type="text/javascript">
                alert("Tu registro ha sido completado");
                window.location.href="index.php";
              </script>';
    } else {
        echo '<script type="text/javascript">
                alert("Error al insertar el registro: ' . mysqli_error($conexion) . '");
                window.location.href="Sesion.php";
                </script>';
    }
}
mysqli_close($conexion);
?>