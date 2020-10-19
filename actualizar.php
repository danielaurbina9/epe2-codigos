<?php
include('Conexion.php');//incluye el archivo php que contiene la conexion
$con=conectar();//variable que almacena la conexión ala base de datos
if(isset($_REQUEST['Modificar'])){

$password=$_REQUEST['password'];
$usuario=$_REQUEST['usuario'];

$queryi="UPDATE ingr SET password='$password' where usuario='$usuario'";//consulta sql

$val=mysql_query($queryi,$con);//ejecutando consulta

if(!$val){
echo "No se ha podido Modificar";
echo "<a href='modifica.html'>Regresar</a>";
}
else {
echo "Datos Modificados Correctamente<br><br>";
echo "<a href='modifica.html'>Regresar</a>";
}

?>