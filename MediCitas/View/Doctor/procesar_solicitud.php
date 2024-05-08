<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $estado = $_POST["estado"];
    $fecha = $_POST["fecha"];
    
    $servername = "localhost";
    $username = "usuario";
    $password = "contraseña";
    $dbname = "tubasedatosxd";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    // Actualizar la solicitud en la base de datos
    $sql = "UPDATE citas_medicas SET estado='$estado', fecha_cambio='$fecha' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Solicitud actualizada exitosamente.";
    } else {
        echo "Error al actualizar la solicitud: " . $conn->error;
    }
    
    $conn->close();
}
?>
