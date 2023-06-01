<?php
include ('connection.php');
$id = $_POST['id'];
$nombre_cli = $_POST['nombre'];
$apellido_cli = $_POST['apellido'];
$cedula_cli = $_POST['cedula'];



$actualizar="UPDATE tabla SET nombre='$nombre_cli',apellido='$apellido_cli',cedula='$cedula_cli' WHERE id='$id'";


$resultado = mysqli_query($connection,$actualizar);
if ($resultado){
    header("location:show_data.php");
}else {
    echo "error de insercion";
}


?>