<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud de Cita Médica</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="../../Assets/Img/logo.png" alt="Logo de tu clínica" width="150">
    </div>
    <h2 class="mb-4">Solicitud de Cita Médica</h2>
    <form method="post" action="procesarcita.php">
        <div class="form-group">
            <label for="nombre">Nombre completo:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre completo" required>
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono de contacto:</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su número de teléfono" required>
        </div>
        <div class="form-group">
            <label for="fecha">Fecha de la cita:</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje adicional (opcional):</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="3" placeholder="Ingrese cualquier mensaje adicional"></textarea>
        </div>
        <div class="form-group">
            <label for="doctor">Seleccione un Doctor:</label>
            <select class="form-control" id="doctor" name="doctor_id" required>
                <?php
                $conexion = new mysqli("localhost", "root", "", "db_mcitas");
                $query = "SELECT id, nombre FROM doctor";
                if ($resultado = $conexion->query($query)) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['nombre']) . '</option>';
                    }
                }
                $conexion->close();
                ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Solicitud</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
