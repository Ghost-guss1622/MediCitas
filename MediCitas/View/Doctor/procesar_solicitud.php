<?php
include ("C:/xampp/htdocs/MediCitas/Config_db.php");

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
    
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    

    $sql = "UPDATE citas_medicas SET estado='$estado', fecha_cambio='$fecha' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Solicitud actualizada exitosamente.";
    } else {
        echo "Error al actualizar la solicitud: " . $conn->error;
    }
    
    $conn->close();
}
?>
