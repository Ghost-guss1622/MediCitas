<?php
include ("conne.php");

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = $_POST['name'];
$apellido = $_POST['second'];
$usuario = $_POST['user'];
$edad = $_POST['age'];
$gmail = $_POST['email'];
$pass = $_POST['clave'];

$crear = "INSERT INTO users (Nombre, Apellido, Usuario, Edad, Gmail, Pass) VALUES ('$nombre', '$apellido', '$usuario', '$edad', '$gmail', '$pass')";
if (mysqli_query($conexion, $crear)) {
    echo '<script type="javasccript/text>
     alert("Tu registro ha sido completado");
    </script>';
    header("Location: sesion.html");
} else {
    echo '<script type="javasccript/text">
    alert("Error al insertar el registro:")
    </script>' . mysqli_error($conexion);
}
}
mysqli_close($conexion);
?>