<?php
$conn = mysqli_connect('db', 'user', 'test', 'myDb', 3306);
mysqli_set_charset($conn, "utf8");
$query = 'SELECT * From Alumno';
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Demo</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>body{font-family:Nunito,sans-serif;min-height:90vh;align-items:center;justify-content:center;display:flex}</style>
</head>

<body>
<table class="table">
<thead class="thread-dark">
<tr>
<th scope="col">ID</th>
<th scope="col">Nombre</th>
<th scope="col">Apellido1</th>
<th scope="col">Apellido2</th>
<th scope="col">Candidato</th>
</tr>
</thead>
<tbody>
 <?php
    //querys
    $query=mysqli_query($conn,"select * from Alumno");
    while($row=mysqli_fetch_array($query)){



    ?>
<tr>
<td><?=$row['ID']; ?></th>
<td><?=$row['Nombre']; ?> </td>
<td><?=$row['Apellido1']; ?> </td>
<td><?=$row['Apellido2']; ?> </td>
<td><?=$row['Delegado']; ?> </td>
</tr>
<?php } ?>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td><a href="voto.php">Votacion a delegado</a></td>
</tr>
</tbody>
</table>
</body>

</html>
