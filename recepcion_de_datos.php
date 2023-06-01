<?php
include('connection.php');

$nombre_cli = $_POST['user'];
$apellido_cli = $_POST['pass'];

$verificar_usuario = mysqli_query($connection, "SELECT * FROM login WHERE user ='$nombre_cli'");
if (mysqli_num_rows($verificar_usuario) > 0) {
    // El usuario ya existe
    
    include("registrar_empleado.php");
    ?>
    <h3 class="ya_existe">EL USUARIO YA EXISTE</h3>;
    <?php
} else {
   
    // El usuario no existe, se guarda en la base de datos
   
    $insertar_datos = "INSERT INTO login (user, pass) VALUES ('$nombre_cli', '$apellido_cli')";
    $resultado = mysqli_query($connection, $insertar_datos);

    if (!$resultado) {
        echo 'Error al registrarse';
    } else {
        include("registrar_empleado.php");
        ?>
        <h3 class="registro_exitoso">USTED SE REGISTRO CON ÉXITO</h3>;
        <?php
       
        };
    }

?>