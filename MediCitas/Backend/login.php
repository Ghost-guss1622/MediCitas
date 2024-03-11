<?php
include("conne.php");

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['Usuario'];
    $password = $_POST['Pass'];

    $sql = "SELECT * FROM users WHERE Usuario = '$usuario' AND Pass = '$password'";
    $resultado = mysqli_query($conexion, $sql);
    $numero_registros = mysqli_num_rows($resultado);
    if ($numero_registros > 0) {
        $row = mysqli_fetch_assoc($resultado);
        echo '<script>
		alert("¡Bienvenido, '. $row['Usuario'] . '!");
		window.location.href="Index.html";
		</script>';
    } else {
        echo '<script type="text/javascript">
		alert("Hubo un error en las credenciales.");
		window.location.href="sesion.html";
	  </script>';
    }
}
?>