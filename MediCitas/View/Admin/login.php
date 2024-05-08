<?php
include ("C:/xampp/htdocs/MediCitas/Config_db.php");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['Usuario'];
    $password = $_POST['Clave'];

    $stmt = $conexion->prepare("SELECT * FROM admins WHERE usuario = ? AND pass = ?");
    $stmt->bind_param("ss", $usuario, $password); 
    $stmt->execute();
    $resultado = $stmt->get_result();
    $numero_registros = $resultado->num_rows;

    if ($numero_registros > 0) {
        $row = $resultado->fetch_assoc();
        $_SESSION['username'] = $row['usuario'];
        header("Location: Index_admin.php");
        exit();
    } else {
        echo '<script type="text/javascript">
        alert("Hubo un error en las credenciales.");
        window.location.href="log_ad.php";
        </script>';
        exit();
    }
}
?>