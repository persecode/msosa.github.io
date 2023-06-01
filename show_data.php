
<?php
include ('connection.php');





$insertar_datos = "SELECT * FROM tabla ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="inicio.php">HOME</a><br><br>
<h1>Todos los datos</h1>
<table class="table table-dark table-hover">
       
       <tr>
              <th>Nombre:</th>
              <th>Apellido:</th>
              <th>Cedula:</th>
              <th>Acciones:</th>
              <th></th>

            </tr>
            <?php $resultado = mysqli_query($connection,$insertar_datos);
        while($row= mysqli_fetch_assoc($resultado)) {  ?>
       
            <tr>
            <td><?php echo $row['nombre'];?></td>
              <td><?php echo $row['apellido'];?></td>
              <td><?php echo $row['cedula'];?></td>
              <td><a href="actualizar.php? id=<?php echo $row['id'];?>">Editar</a></td>
              <td><a href="procesar_eliminar.php? id=<?php echo $row['id'];?>">Eliminar</a></
            </tr>

            

      
            <?php }  mysqli_free_result($resultado);?>
</table>

</body>
</html>

