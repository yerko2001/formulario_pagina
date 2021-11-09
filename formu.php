<?php
include("conexion.php");
$con=conectar();

$sql= "SELECT * FROM registro";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estindex4.css">
    <link rel="stylesheet" type="text/css" href="font.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  </head>
  <body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

            	<div class="container" style=" justify-content: center; align-items: center;">
            		<div class="row">

             <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="padding: 20px;" style="background-color: skyblue;">
                  <nav class="navbar navbar-dark bg-dark" style="font: oblique bold 120% cursive;">
                    <!-- Navbar content -->
                        <div class="container-fluid">
                          <a class="navbar-brand" href="#">Barra de navegacion</a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                              <li class="nav-item">
                                <a class="nav-link" href="inde.html">Home</a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" href="nosotros.html">Nosotros</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="login.html">Login</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="contactenos.html">Contactenos</a>
                              </li>
                            <form class="d-flex">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                          </ul>
                          </div>
                        </div>
                    </nav>
            </div>

            <div class="grid-container">
             <div class="formulario">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="padding: 20px; align-content: center; margin: 20px;" >
                  
                  <form class="row g-3" style="background-color:#3A3A3A; color: white; padding:10px;" action="insertar.php" method="POST">

                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="inputEmail4" name="nombre" >
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Apellido</label>
                      <input type="text" class="form-control" id="inputPassword4" name="apellidos">
                    </div>
                    <div class="col-md-6">
                      <label for="inputAddress" class="form-label">Rut</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="123456789" name="rut">
                    </div>
                    <div class="col-md-6">
                      <label for="inputAddress2" class="form-label">Direccion</label>
                      <input type="text" class="form-control" id="inputAddress2" name="direccion">
                    </div>

                    <!--<div class="col-md-6">
                      <label for="inputAddress3" class="form-label">Sexo</label>
                      <input type="text" class="form-control" id="inputAddress3" name="sexo">
                    </div>-->

                    <div class="col-md-6">
                      <label for="inputAddress4" class="form-label">Edad</label>
                      <input type="text" class="form-control" id="inputAddress4" name="edad">
                    </div>

                    <div class="col-md-6">
                      <label for="inputAddress5" class="form-label">Fecha</label>
                      <input type="date" class="form-control" id="inputAddress5" name="fecha">
                    </div>

                    <fieldset class="col-md-6">
                      <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sexo" id="gridRadios1" value="Masculino">
                          <label class="form-check-label" for="gridRadios1">
                            Masculino
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sexo" id="gridRadios2" value="Femenino">
                          <label class="form-check-label" for="gridRadios2">
                            Femenino
                          </label>
                        </div>
                        <div class="form-check disabled">
                          <input class="form-check-input" type="radio" name="sexo" id="gridRadios3" value="Otro">
                          <label class="form-check-label" for="gridRadios3">
                            Otro
                          </label>
                        </div>
                      </div>
                    </fieldset>

                    <div class="col-12">
                      <input type="submit" class="btn btn-primary"></input>
                    </div>

                  </form>

                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-11" style="padding: 20px;" style="background-color: skyblue;">

                    <form  method="get" action="">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"><h2 style="color: white; font: oblique bold 120% cursive; font-size: 25px;">Busqueda</h2></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name ="busqueda" required>

                      </div>

                      <input type="submit" class="btn btn-primary" name="enviar" value="buscar">
                    </form>

                    <?php

                        if (isset($_GET['enviar'])) {
                            $busqueda= $_GET['busqueda'];

                            $consulta= $con->query("SELECT * FROM registro WHERE rut LIKE '%$busqueda%' ");

                            while ($row = $consulta->fetch_array()) {
                            ?>

                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6" style="padding: 20px;" style="background-color: skyblue;">

                                <table class="table table-primary" style="margin: 10px;">
                                    
                                    <tr >
                                        
                                        <td>Nombre</td>
                                        <td><?php echo $row['nombre'].'<br>';?></td>

                                    </tr>
                                    <tr>
                                        
                                        <td>Apellidos</td>
                                        <td><?php echo $row['apellidos'].'<br>';?></td>

                                    </tr>
                                    <tr>
                                        
                                        <td>Rut</td>
                                        <td><?php echo $row['rut'].'<br>';?></td>

                                    </tr>
                                    <tr>
                                        
                                        <td>Direccion</td>
                                        <td><?php echo $row['direccion'].'<br>';?></td>

                                    </tr>
                                    <tr>
                                        
                                        <td>Sexo</td>
                                        <td><?php echo $row['sexo'].'<br>';?></td>

                                    </tr>
                                    <tr>
                                        
                                        <td>Edad</td>
                                        <td><?php echo $row['edad'].'<br>';?></td>

                                    </tr>
                                    <tr>
                                        
                                        <td>Fecha nacimiento</td>
                                        <td><?php echo $row['fecha'].'<br>';?></td>

                                    </tr>
                                </table>
                            </div>


                            <?php }
                        }
                    ?>


            </div>          

	         <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="padding: 20px; align-content: center; margin: 20px; color: white;" >
	         	<table class="table" style="color: white;">
						  <thead>
						    <tr>
						      <th scope="col">Rut</th>
						      <th scope="col">Nombre</th>
						      <th scope="col">Apellidos</th>
						      <th scope="col">Direccion</th>
						      <th scope="col">Sexo</th>
						      <th scope="col">Edad</th>
						      <th scope="col">Fecha</th>
						    </tr>
						  </thead>

						  <tbody>
							  	<?php 
							  		while($row=mysqli_fetch_array($query)){
							  	?>
								    <tr>
								      <th><?php echo $row['rut']?></th>
								      <th><?php echo $row['nombre']?></th>
								      <th><?php echo $row['apellidos']?></th>
								      <th><?php echo $row['direccion']?></th>
								      <th><?php echo $row['sexo']?></th>
								      <th><?php echo $row['edad']?></th>
								      <th><?php echo $row['fecha']?></th>
								      <th><a href="actualizar.php?id=<?php echo $row['rut']?>" class="btn btn-info">editar</a></th>
								      <th><a href="borrar.php?id=<?php echo $row['rut']?>" class="btn btn-danger">eliminar</a></th>
								    </tr>
							    <?php
									}
							    ?>
						  </tbody>
						</table>

	         </div>

          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="padding: 20px; ">
              <footer style="text-align: center; color: white; font-size: 20px;">
                <p >Yerko Abarza Leiva</p>      
              </footer>

              <div class="socia-bar" style="text-align: center;">
                <a href="" class="icon icon-twitter" target="_blank"></a>
                <a href="" class="icon icon-youtube" target="_blank"></a>
                <a href="" class="icon icon-instagram" target="_blank"></a>
              </div>

          </div>


		</div>
	</div>


  </body>
</html>