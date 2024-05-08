<?php
include ("C:/xampp/htdocs/MediCitas/Config_db.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fecha = $_POST['fecha'];
    $mensaje = $_POST['mensaje'] ?? ''; 

    if ($conexion->connect_error) {
        die("Connection failed: " . $conexion->connect_error);
    }

    $stmt = $conexion->prepare("INSERT INTO citas (nombre, email, telefono, fecha, mensaje) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $email, $telefono, $fecha, $mensaje);

    if ($stmt->execute()) {
        echo '<script>
        alert("Cita enviada con éxito. Será revisada por el personal médico.");
        window.location.href = "index.php";
        </script>';
    } else {
      echo '<script>
      alert("Error al agendar cita: ' . addslashes($conexion->error) . '");
       window.location.href = "Redcita.php";
       </script>';
    }

    $stmt->close();
    $conexion->close();
}
?>