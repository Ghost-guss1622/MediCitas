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
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mi Perfil</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
   <div class="update-profile">
      <form action="" method="post" enctype="multipart/form-data">
         <?php if (isset($fetch)): ?>
            <div class="row">
               <div class="col-md-4">
                  <img src="<?php echo empty($fetch['image']) ? 'images/default-avatar.png' : 'uploaded_img/'.$fetch['image']; ?>" class="img-fluid">
               </div>
               <div class="col-md-8">
                  <div class="inputBox">
                     <label>Nombre:</label>
                     <input type="text" name="update_name" value="<?php echo htmlspecialchars($fetch['nombre']); ?>" class="form-control" disabled>
                     <label>Apellido:</label>
                     <input type="text" name="update_second" value="<?php echo htmlspecialchars($fetch['apellido']); ?>" class="form-control" disabled>
                     <label>Especialidad:</label>
                     <input type="text" name="update_specialty" value="<?php echo htmlspecialchars($fetch['especialidad']); ?>" class="form-control" disabled>
                     <label>Telefono:</label>
                     <input type="number" name="update_phone" value="<?php echo htmlspecialchars($fetch['telefono']); ?>" class="form-control" disabled>
                     <label>Email:</label>
                     <input type="email" name="update_email" value="<?php echo htmlspecialchars($fetch['gmail']); ?>" class="form-control" disabled>
                     <label>Nombre de usuario:</label>
                     <input type="text" name="update_user" value="<?php echo htmlspecialchars($fetch['usuario']); ?>" class="form-control" disabled>
                  </div>
               </div>
            </div>
            <div class="mt-3">
               <a href="Actualizar_pf.php" class="btn btn-primary">Actualizar mi perfil</a>
               <a href="Index_doc.php" class="btn btn-danger">Volver</a>
            </div>
         <?php endif; ?>
      </form>
   </div>
</div>
</body>
</html>
