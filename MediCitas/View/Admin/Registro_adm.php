<?php
include ("C:/xampp/htdocs/Medi/Config_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gmail = $_POST['email'];
    $usuario = $_POST['user'];
    $pass = $_POST['clave'];

    $crear = "INSERT INTO admins (gmail, usuario, pass) VALUES ('$gmail', '$usuario', '$pass')";
    if (mysqli_query($conexion, $crear)) {
        echo '<script type="text/javascript">
                alert("Tu registro ha sido completado");
                window.location.href="log_ad.php";
              </script>';
    } else {
        echo '<script type="text/javascript">
                alert("Error al insertar el registro: ' . mysqli_error($conexion) . '");
              </script>';
    }
}
mysqli_close($conexion);
?>