<?php
require_once 'connection.php';
$user=$_POST['username'] ?? null;
$password=$_POST['password']?? null;


$consulta="SELECT * FROM login WHERE user = '$user' and pass = '$password'";

$resultado = mysqli_query($connection,$consulta);

$filas = mysqli_num_rows($resultado);

if ($filas >0){
    header("location:inicio.php");
}
else {
    include("index.php");
    ?>
    <h3 class="login_wrong">User or password wrong</h3>;
    <?php
   

}
mysqli_free_result($resultado);
mysqli_close($connection);
?>