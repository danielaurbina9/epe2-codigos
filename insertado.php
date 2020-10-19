<?php
require ("conexion.php");
$status = "";
$con=conectar();//variable que almacena la conexión ala base de datos
$password=$_REQUEST['password'];//capturar datos del formulario
$usuario=$_REQUEST['usuario'];



$query="insert into ingr values ('$password','$usuario')";// cambiar tabla

$cierto=mysql_query($query,$con);//insertar

//preguntar si se insertó el dato
if(!$cierto){
echo "No se ha podido guardar";
}
else {
echo "Datos Guardados Correctamente<br>";
echo "<a href='new.html'>Regresar</a>";
}
?>