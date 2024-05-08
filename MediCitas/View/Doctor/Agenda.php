<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprobar/Rechazar Solicitud</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .logo img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo text-center mb-4">
            <img src="../../Assets/Img/logo.png" alt="Logo de tu clínica" width="150">
        </div>
        <h2 class="mt-4">Aprobar/Rechazar Solicitud de Cita Médica</h2>
        <form method="post" action="procesar_solicitud.php">
            <div class="form-group">
                <label for="id">ID de la solicitud:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del paciente:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado de la solicitud:</label>
                <select class="form-control" id="estado" name="estado" required>
                    <option value="Aprobada">Aprobada</option>
                    <option value="Rechazada">Rechazada</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de cambio de solicitud:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        function obtenerFechaActual() {
            let fecha = new Date();
            let mes = fecha.getMonth() + 1; 
            let dia = fecha.getDate();
            if (mes < 10) mes = '0' + mes; 
            if (dia < 10) dia = '0' + dia;
            return fecha.getFullYear() + '-' + mes + '-' + dia;
        }

        document.getElementById('fecha').value = obtenerFechaActual();
    </script>
</body>
</html>
