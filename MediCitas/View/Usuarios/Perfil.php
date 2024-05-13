<?php
include ("C:/xampp/htdocs/MediCitas/Config_db.php");

session_start();
if(!isset($_SESSION['username'])){
   header('Location: Sesion.php');
   exit();
}
$user_id = $_SESSION['username'];

$query = "SELECT * FROM users WHERE usuario = '$user_id'";
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
</head>
<body>
<div class="container mt-5">
   <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="card">
            <div class="card-header text-center">
               <h5>Mi Perfil</h5>
            </div>
            <div class="card-body">
               <form action="" method="post" enctype="multipart/form-data">
                  <?php if (isset($fetch)): ?>
                     <div class="text-center">
                        <img src="<?php echo empty($fetch['image']) ? 'images/default-avatar.png' : 'uploaded_img/'.$fetch['image']; ?>" class="img-fluid rounded-circle mb-3" alt="Avatar">
                     </div>
                     <div class="form-group">
                        <label for="update_name">Nombre:</label>
                        <input type="text" name="update_name" value="<?php echo htmlspecialchars($fetch['nombre']); ?>" class="form-control" disabled>
                     </div>
                     <div class="form-group">
                        <label for="update_second">Apellido:</label>
                        <input type="text" name="update_second" value="<?php echo htmlspecialchars($fetch['apellido']); ?>" class="form-control" disabled>
                     </div>
                     <div class="form-group">
                        <label for="update_email">Email:</label>
                        <input type="email" name="update_email" value="<?php echo htmlspecialchars($fetch['gmail']); ?>" class="form-control" disabled>
                     </div>
                     <div class="form-group">
                        <label for="update_user">Nombre de usuario:</label>
                        <input type="text" name="update_user" value="<?php echo htmlspecialchars($fetch['usuario']); ?>" class="form-control" disabled>
                     </div>
                     <div class="text-center">
                        <a href="Actualizar_pf.php" class="btn btn-primary">Actualizar mi perfil</a>
                        <a href="index.php" class="btn btn-secondary">Volver</a>
                     </div>
                  <?php endif; ?>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
