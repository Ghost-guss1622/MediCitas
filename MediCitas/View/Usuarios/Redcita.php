<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de doctores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Citas Médicas Asignadas</h2>
    <div class="table-responsive">
        <table class="table table-striped table-hover mt-3 text-center table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Telefono(s)</th>
                    <th>Agendar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $conexion = new mysqli("localhost", "root", "", "db_mcitas");
                if ($conexion->connect_error) {
                    die("Conexión fallida: " . $conexion->connect_error);
                }
                $sql = "SELECT nombre, especialidad, telefono FROM doctor ";
                $result = $conexion->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["nombre"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["especialidad"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["telefono"]) . "</td>";
                        echo "<td>
                            <a href='Solicitud.php?id=' class='btn btn-warning btn-sm'>Cotizar Cita</a>
                        </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No hay citas para mostrar</td></tr>";
                }
                $conexion->close();
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
