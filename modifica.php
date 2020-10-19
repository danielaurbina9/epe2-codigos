<?php
include("conexion.php");
$con=conectar();


$password=$_POST['password'];
$usuario=$_POST['usuario'];

mysql_query("UPDATE ingr set password='$password',usuario='$usuario'
where usuario='$usuario'");
echo "modificado correctamente "
	
	?>
