<?php
include ("C:/xampp/htdocs/MediCitas/Config_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $especialidad = $_POST['special'];
    $nombre = $_POST['name'];
    $apellido = $_POST['second'];
    $edad = $_POST['age'];
    $gmail = $_POST['email'];
    $telefono = $_POST['phone'];
    $usuario = $_POST['user'];
    $pass = $_POST['clave'];

    $crear = "INSERT INTO doctor (especialidad, nombre, apellido, edad, telefono, gmail, usuario, pass) VALUES ('$especialidad', '$nombre', '$apellido', '$edad', '$telefono', '$gmail', '$usuario', '$pass')";
    if (mysqli_query($conexion, $crear)) {
        echo '<script type="text/javascript">
                alert("El usuario se registro exitosamente");
                window.location.href="Crud.php";
              </script>';
    } else {
        echo '<script type="text/javascript">
                alert("¡Error al insertar el registro de usuario! ' . mysqli_error($conexion) . '");
              </script>';
    }
}
mysqli_close($conexion);
?>