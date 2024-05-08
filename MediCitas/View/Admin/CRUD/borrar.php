<?php
include ("C:/xampp/htdocs/MediCitas/Config_db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM doctor WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo '<script>
        alert("Registro eliminado con éxito.");
        window.location.href = "Crud.php";
        </script>';
        exit(); 
    } else {
        echo '<script>
        alert("Error al eliminar registro: ' . addslashes($conn->error) . '");
        window.location.href = "Crud.php";
        </script>';
        exit(); 
    }
    $stmt->close();
    $conn->close();
} else {
    echo '<script>
        alert("No se proporcionó un ID válido.");
        window.location.href = "Crud.php";
        </script>';
    exit(); 
}
?>
