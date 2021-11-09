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


$sql="UPDATE registro SET nombre='$nombre',apellidos='$apellidos',direccion='$direccion',sexo='$sexo',edad='$edad', fecha='$fecha' WHERE rut='$rut' ";
$query=mysqli_query($con,$sql);

	if($query){
		Header("Location: formu.php");
	}
?>