<?php
include ("C:/xampp/htdocs/MediCitas/Config_db.php");

session_start();
if(!isset($_SESSION['username'])){
   header('Location: Sesion.php');
   exit();
}
$user_id = $_SESSION['username'];

$query = "SELECT * FROM doctor WHERE usuario = '$user_id'";
$result = $conexion->query($query);

if($result && $result->num_rows > 0){
   $fetch = $result->fetch_assoc();
}else{
   echo 'Usuario no encontrado';
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
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
            <span>Nombre:</span>
               <input type="text" name="update_name" value="<?php echo htmlspecialchars($fetch['nombre']); ?>" class="box" disabled>
               <span>Apellido:</span>
               <input type="text" name="update_second" value="<?php echo htmlspecialchars($fetch['apellido']); ?>" class="box" disabled>
               <span>Especialidad:</span>
               <input type="text" name="update_specialty" value="<?php echo htmlspecialchars($fetch['especialidad']); ?>" class="box" disabled>
               <span>Telefono:</span>
               <input type="number" name="update_phone" value="<?php echo htmlspecialchars($fetch['telefono']); ?>" class="box" disabled>
               <span>Email:</span>
               <input type="email" name="update_email" value="<?php echo htmlspecialchars($fetch['gmail']); ?>" class="box" disabled>
               <span>Nombre de usuario:</span>
               <input type="text" name="update_user" value="<?php echo htmlspecialchars($fetch['usuario']); ?>" class="box" disabled>
            </div>
         </div>
         <a href="Actualizar_pf.php" class="btn">Actualizar mi perfil</a>
         <a href="Index_doc.php" class="delete-btn">Volver</a>
      <?php endif; ?>
   </form>
</div>
</body>
</html>