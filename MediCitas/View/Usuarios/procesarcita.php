<?php
include ("C:/xampp/htdocs/Medi/Config_db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $mensaje = $_POST['mensaje'];

    $stmt = $conexion->prepare("INSERT INTO solicitud  (nombre, email, telefono, fecha, mensaje) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $nombre, $email, $telefono, $fecha, $mensaje);

    if ($stmt->execute()) {
        echo '<script type="text/javascript">
        alert("Se ha solicitado su cita médica");
        window.location.href="index.php";
      </script>';
    } else {
        echo '<script type="text/javascript">
        alert("Su solicitud no se envio correctamente ' . mysqli_error($conexion) . '");
      </script>';
    }

    $stmt->close();
    $conexion->close();
} 
?>
