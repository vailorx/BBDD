<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>


        <div id="wrapper" class="container">
  
                
                 <center>

                    <h1>Votación</h1><hr>
                        <form  method="POST" name="form-work" action="guardar.php">
                    
                                <fieldset>
                                
                                  <div class="form-group">
                                    <div class="col-md-6">
                                      <label class="control-label" for="nome">Nombre</label>
                                      <input name="nombre" class="form-control" type="text">
                                      </div>
                                     </div>                            
                                    <div class="form-group">
                                      <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block info">Votar</button>
                                      </div>
</div>     
                                </fieldset> 
                              </form>

                 </center>
              </div> 
<?php
$conn = mysqli_connect('db', 'user', 'test', 'myDb', 3306);
mysqli_set_charset($conn, "utf8");
$query = 'SELECT * From Alumno';
$result = mysqli_query($conn, $query);
?>
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
    $query=mysqli_query($conn,"SELECT * FROM `Alumno` WHERE delegado = 'candidato'");
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
</tbody>
</table>




</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</html>
