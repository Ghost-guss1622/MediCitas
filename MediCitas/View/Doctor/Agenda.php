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
            <div class="form-group row">
                <label for="id" class="col-sm-3 col-form-label">ID de la solicitud:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="id" name="id" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nombre" class="col-sm-3 col-form-label">Nombre del paciente:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="estado" class="col-sm-3 col-form-label">Estado de la solicitud:</label>
                <div class="col-sm-9">
                    <select class="form-control" id="estado" name="estado" required>
                        <option value="Aprobada">Aprobar</option>
                        <option value="Rechazada">Rechazar</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="fecha" class="col-sm-3 col-form-label">Fecha de cambio de solicitud:</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" id="fecha" name="fecha" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
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
