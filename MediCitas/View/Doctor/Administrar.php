<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrar Citas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Citas Pendientes</h2>
        <div id="citasList" class="mt-3"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function() {
        function fetchCitas() {
            $.ajax({
                url: 'verificarCitas.php', 
                type: 'GET',
                dataType: 'json',
                success: function(citas) {
                    $('#citasList').empty();
                    citas.forEach(cita => {
                        $('#citasList').append(`
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">${cita.nombre}</h5>
                                    <p class="card-text">Email: ${cita.email}</p>
                                    <p class="card-text">Teléfono: ${cita.telefono}</p>
                                    <p class="card-text">Fecha: ${cita.fecha}</p>
                                    <p class="card-text">Mensaje: ${cita.mensaje}</p>
                                    <button onclick="modificarCita(${cita.id}, 'aceptada')" class="btn btn-success mr-2">Aceptar</button>
                                    <button onclick="modificarCita(${cita.id}, 'rechazada')" class="btn btn-danger">Rechazar</button>
                                </div>
                            </div>
                        `);
                    });
                }
            });
        }

        setInterval(fetchCitas, 5000); 

        window.modificarCita = function(idCita, estado) {
            $.ajax({
                url: 'modificarCita.php',
                type: 'POST',
                data: {id: idCita, estado: estado},
                success: function(response) {
                    alert("Cita " + estado);
                    fetchCitas(); // Recargar lista de citas
                }
            });
        };
    });
    </script>
</body>
</html>
