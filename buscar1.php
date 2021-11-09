<?php

include("conexion.php");
$con=conectar();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>form_busqueda</title>
  </head>
  <body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="padding: 20px;" style="background-color: skyblue;">

                    <form  method="get" action="">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Busqueda</label>
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
        </div>
    </div>

  </body>
</html>
