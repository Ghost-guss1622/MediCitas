<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/4c18fef4cd.js" crossorigin="anonymous"></script>

    <title>CRUD Operations</title>

    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    

    <section class="p-3">

    <div class="row">
    <div class="col-12">
        <a href="agregar.php" class="btn btn-primary">
            New User <i class="bi bi-people"></i>
        </a>
    </div>
</div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-hover mt-3 text-center table-bordered">
                    <thead>
                        <tr>
                            <th>Especialidad</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th>Telefono</th>
                            <th>Gmail</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Acciones:</th>
                        </tr>
                    </thead>
                    
                    <tbody id="data">
                    <?php 
                $conn = new mysqli("localhost", "root", "", "usuarios");
                if ($conn->connect_error) {
                    die("conexion fallida: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM doctor";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["especialidad"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["nombre"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["apellido"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["edad"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["telefono"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["gmail"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["usuario"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["pass"]) . "</td>";
                        echo "<td>
                            <a href='Form_editar.php?id=" . htmlspecialchars($row["ID"]) . "' class='btn btn-warning'>Editar</a>
                            <a href='borrar.php?id=" . htmlspecialchars($row["ID"]) . "' class='btn btn-danger' onclick='return confirm(\"¿Estás seguro de eliminar este registro?\");'>Eliminar</a>
                        </td>";
                        echo "</tr>";
                    }
                    $conn->close();
                } else {
                    echo "<tr><td colspan='9'>No hay datos para mostrar</td></tr>";
                }
                ?>  
                    </tbody>
                </table>
            </div>
        </div>

    </section>
    <div class="modal fade" id="userForm">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>

  </body>
</html>