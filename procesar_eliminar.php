<?php
include ('connection.php');
$id = $_GET['id'];


$eliminar="DELETE FROM tabla WHERE id='$id'";


$resultado = mysqli_query($connection,$eliminar);
if ($resultado){
    header("location:show_data.php");
}else {
    echo "error de insercion";
}


?>