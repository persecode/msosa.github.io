
<?php
include ('connection.php');
$id = $_GET['id'];
$insertar_datos = "SELECT * FROM tabla WHERE id='$id'";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar_actualizar.php" method="POST" >
<table class="default" >
        <?php $resultado = mysqli_query($connection,$insertar_datos);
       while($row= mysqli_fetch_assoc($resultado)) {  ?>
    

            <tr>
              <td><input type="hidden" name="id"  value="<?php echo $row['id'];?>"></td>
            </tr>


           <tr>
              <th>Nombre</th>
              <td><input type="text" name="nombre" id="" value="<?php echo $row['nombre'];?>"></td>
            </tr>

            <tr>
              <th>Apellido</th>
              <td><input type="text" name="apellido" id="" value="<?php echo $row['apellido'];?>"></td>
            </tr>

            <tr>
              <th>Cedula</th>
              <td><input type="text" name="cedula" id="" value="<?php echo $row['cedula'];?>"></td>
            </tr>

          
            <tr>
              <td><input type="submit"   value="Actualizar"></td>
            </tr>

            <?php }  mysqli_free_result($resultado);?>

</table>
</form>
<a href="index.php">home</a>
</body>
</html>

