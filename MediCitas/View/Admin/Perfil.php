<?php
include ("C:/xampp/htdocs/MediCitas/Config_db.php");

session_start();
if(!isset($_SESSION['username'])){
   header('Location: log_ad.php');
   exit();
}

$user_id = $_SESSION['username'];

$query = "SELECT * FROM admins WHERE usuario = '$user_id'";
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
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="../../Assets/Css/profile.css">
   <style>
      .image-container {
         max-width: 200px;
         margin: auto;
      }
      .inputBox {
         margin-top: 20px;
      }
   </style>
</head>
<body>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="update-profile">
            <form action="" method="post" enctype="multipart/form-data">
               <?php if (isset($fetch)): ?>
                  <div class="image-container">
                     <img src="<?php echo empty($fetch['image']) ? 'images/default-avatar.png' : 'uploaded_img/'.$fetch['image']; ?>" class="img-fluid" alt="Avatar">
                  </div>
                  <div class="inputBox">
                     <span>Email:</span>
                     <input type="email" name="update_email" value="<?php echo htmlspecialchars($fetch['gmail']); ?>" class="form-control" disabled>
                     <span>Nombre de usuario:</span>
                     <input type="text" name="update_user" value="<?php echo htmlspecialchars($fetch['usuario']); ?>" class="form-control" disabled>
                  </div>
                  <div class="text-center mt-3">
                     <a href="Actualizar_pf.php" class="btn btn-primary">Actualizar mi perfil</a>
                     <a href="Index_admin.php" class="btn btn-secondary">Volver</a>
                  </div>
               <?php endif; ?>
            </form>
         </div>
      </div>
   </div>
</div>
</body>
</html>
