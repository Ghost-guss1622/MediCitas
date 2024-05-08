<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "usuarios";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn -> connect_error){
    die("Conexión fallida" . $conn->connect_error);
}
$id = isset($_GET['id']) ? $_GET['id'] : (isset($_POST['id']) ? $_POST['id'] : null);
if (!$id) {
    echo '<script>
        alert("No se proporcionó un ID válido.");
        window.location.href = "Form_editar.php";
        </script>';
    exit();
}
 $stmt = $conn->prepare("SELECT * FROM doctor WHERE ID = ?");
 $stmt->bind_param("i", $id);
 $stmt->execute();
 $result = $stmt->get_result();
 if($row = $result->fetch_assoc()){
 }else{
    echo "No hay ningun usuario registrado en el sistema.";
 }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Modificar Datos</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Perfil del Doctor</h2>
        <form action="modificar.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

            <div class="form-group">
                <label for="especialidad">Especialidad:</label>
                <input type="text" class="form-control" id="especialidad" name="especialidad" value="<?php echo htmlspecialchars($row['especialidad']); ?>">
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($row['nombre']); ?>">
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo htmlspecialchars($row['apellido']); ?>">
            </div>

            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" value="<?php echo htmlspecialchars($row['edad']); ?>">
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo htmlspecialchars($row['telefono']); ?>">
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($row['gmail']); ?>">
            </div>

            <a href="Crud.php" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
</body>
</html>