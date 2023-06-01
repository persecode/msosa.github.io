
<?php
include ('connection.php');


$insertar_datos = "SELECT * FROM tabla t where t.id = (select max(x.id) from tabla x)";
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
  <div class="display_full">
<a href="show_data.php">Show Data</a>
<a href="inicio.php">HOME</a><br><br>
  <h1>Ultimo cliente Creado</h1>

<table class="table table-dark table-hover">


        <?php $resultado = mysqli_query($connection,$insertar_datos);
        while($row= mysqli_fetch_assoc($resultado)) {  ?>
       
           <tr>
              <th>Nombre:</th>
              <th>Apellido:</th>
              <th>Cedula:</th>
            </tr>

            <tr>
            <td><?php echo $row['nombre'];?></td>
              <td><?php echo $row['apellido'];?></td>
              <td><?php echo $row['cedula'];?></td>
              <td><a href="actualizar.php? id=<?php echo $row['id'];?>">Editar</a></td>
              <td><a href="procesar_eliminar.php? id=<?php echo $row['id'];?>">Eliminar</a></
            </tr>
            <?php }  mysqli_free_result($resultado);?>
            </table>
            </div>
</body>
</html>

