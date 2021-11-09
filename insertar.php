<?php

include("conexion.php");
$con=conectar();

$rut=$_POST['rut'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$sexo=$_POST['sexo'];
$edad=$_POST['edad'];
$fecha=$_POST['fecha'];

$sql="INSERT INTO registro VALUES('$rut','$nombre','$apellidos','$direccion','$sexo','$edad','$fecha')";
$query=mysqli_query($con,$sql);

if($query){
	Header("Location: formu.php");
}
else{
}
?>