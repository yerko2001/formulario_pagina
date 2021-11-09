<?php

include("conexion.php");
$con=conectar();

$rut=$_GET['id'];

$sql="DELETE FROM registro WHERE rut='$rut'";
$query=mysqli_query($con,$sql);

	if($query){
		Header("Location: formu.php");
	}
?>