<?php
include ("C:/xampp/htdocs/MediCitas/Config_db.php");

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: log_doc.php');
    exit();
}
$user_id = $_SESSION['username'];

$stmt = $conexion->prepare("SELECT * FROM admins WHERE usuario = ?");
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
    $email = $_POST['update_email'];
    $usuario = $_POST['update_user'];
    $new_pass = $_POST['update_pass']; 
    
    if(empty($new_pass)){
      $new_pass = $fetch['pass'];
    }
    $stmt = $conexion->prepare("UPDATE admins SET gmail = ?, usuario=?, pass = ? WHERE usuario = ?");
    $stmt->bind_param("ssss", $email, $usuario, $new_pass, $user_id);

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
   <link rel="stylesheet" href="../../Assets/Css/profile.css">
</head>
<body>
<div class="update-profile">
   <form action="" method="post" enctype="multipart/form-data">
      <?php if (isset($fetch)): ?>
         <img src="<?php echo empty($fetch['image']) ? 'images/default-avatar.png' : 'uploaded_img/'.$fetch['image']; ?>">
         <div class="flex">
            <div class="inputBox">
               <span>Email:</span>
               <input type="email" name="update_email" value="<?php echo htmlspecialchars($fetch['gmail']); ?>" class="box">
               <span>Nombre de usuario:</span>
               <input type="text" name="update_user" value="<?php echo htmlspecialchars($fetch['usuario']); ?>" class="box">
               <span>Nueva contraseña:</span>
               <input type="password" name="update_pass" class="box">
               <span>Elegir imagen:</span>
               <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
            </div>
         </div>
         <input type="submit" value="Guardar Cambios" name="update_profile" class="btn">
         <a href="Perfil.php" class="delete-btn">Volver</a>
      <?php endif; ?>
   </form>
</div>
</body>
</html>