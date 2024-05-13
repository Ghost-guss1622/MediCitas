<?php
include ("C:/xampp/htdocs/MediCitas/Config_db.php");

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: log_doc.php');
    exit();
}

$user_id = $_SESSION['username'];
$stmt = $conexion->prepare("SELECT * FROM doctor WHERE usuario = ?");
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $fetch = $result->fetch_assoc();
} else {
    echo 'Usuario no encontrado';
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $especialidad = $_POST['update_specialty'];
    $nombre = $_POST['update_name'];
    $apellido = $_POST['update_second'];
    $telefono = $_POST['update_phone'];
    $usuario = $_POST['update_user'];
    $email = $_POST['update_email'];
    $new_pass = $_POST['update_pass']; 
    
    if(empty($new_pass)){
      $new_pass = $fetch['pass'];
    }
    $stmt = $conexion->prepare("UPDATE doctor SET especialidad= ?, nombre = ?, apellido = ?, telefono=?, gmail = ?, usuario=?, pass = ? WHERE usuario = ?");
    $stmt->bind_param("ssssssss", $especialidad, $nombre, $apellido, $telefono, $email, $usuario, $new_pass, $user_id);

    if ($stmt->execute()) {
        echo '<script>
        alert("Datos modificados exitosamente."); 
        window.location.href = "Perfil.php";
        </script>';
    } else {
        echo '<script>
        alert("Error al modificar los datos: ' . addslashes($conexion->error) . '");
         window.location.href = "Actualizar_pf.php";
         </script>';
    }
    
    $stmt->close();
}

$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Assets/Css/profile.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="update-profile">
                    <form action="" method="post" enctype="multipart/form-data">
                        <?php if (isset($fetch)): ?>
                            <img src="<?php echo empty($fetch['image']) ? 'images/default-avatar.png' : 'uploaded_img/'.$fetch['image']; ?>" class="img-fluid mb-3" alt="Avatar">
                            <div class="inputBox">
                                <label for="update_name">Nombre:</label>
                                <input type="text" name="update_name" value="<?php echo htmlspecialchars($fetch['nombre']); ?>" class="form-control mb-3">
                                <label for="update_second">Apellido:</label>
                                <input type="text" name="update_second" value="<?php echo htmlspecialchars($fetch['apellido']); ?>" class="form-control mb-3">
                                <label for="update_specialty">Especialidad:</label>
                                <input type="text" name="update_specialty" value="<?php echo htmlspecialchars($fetch['especialidad']); ?>" class="form-control mb-3">
                                <label for="update_phone">Telefono:</label>
                                <input type="number" name="update_phone" value="<?php echo htmlspecialchars($fetch['telefono']); ?>" class="form-control mb-3">
                                <label for="update_email">Email:</label>
                                <input type="email" name="update_email" value="<?php echo htmlspecialchars($fetch['gmail']); ?>" class="form-control mb-3">
                                <label for="update_user">Nombre de usuario:</label>
                                <input type="text" name="update_user" value="<?php echo htmlspecialchars($fetch['usuario']); ?>" class="form-control mb-3">
                                <label for="update_pass">Nueva contraseña:</label>
                                <input type="password" name="update_pass" class="form-control mb-3">
                                <label for="update_image">Elegir imagen:</label>
                                <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="form-control mb-3">
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Guardar Cambios" name="update_profile" class="btn btn-primary mr-2">
                                <a href="Perfil.php" class="btn btn-secondary">Volver</a>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
