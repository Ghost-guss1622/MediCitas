<?php 
$usuario = "root";
$passsword = "";
$bd ="db_mcitas";

$conexion = mysqli_connect("localhost", $usuario, $passsword, $bd);

/*/if($conexion){
    echo "Base de datos encontrada";
}else{
    echo "Base de datos no conectada" . mysqli_connect_error();
}/*/
?>