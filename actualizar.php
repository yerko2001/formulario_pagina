<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM registro WHERE rut='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>formulario</title>
  </head>
  <body>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container" style=" justify-content: center; align-items: center;">
		  <div class="row">

  			<div class="formulario">
            <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10" style="padding: 20px; align-content: center; margin: 20px;" met>
            	<form action="update.php" method="POST">
            		
            		<input type="hidden" name="rut" value="<?php echo $row['rut'] ?>">

            			<input type="text" class="form-control mb-3" name="rut" placeholder="RUT" value="<?php echo $row['rut'] ?>">
            			<input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre'] ?>">
            			<input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos'] ?>">
                  <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion'] ?>">
                  <input type="text" class="form-control mb-3" name="sexo" placeholder="Sexo" value="<?php echo $row['sexo'] ?>">
                  <input type="text" class="form-control mb-3" name="edad" placeholder="Edad" value="<?php echo $row['edad'] ?>">
                  <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha'] ?>">

            		<input type="submit" class="btn btn-primary btn-block" value="Actualizar">

            	</form>
            </div>
        </div>



  		</div>
	   </div>
  	
  </body>
</html>