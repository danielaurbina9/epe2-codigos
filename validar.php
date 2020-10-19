[9:24 p. m., 18/10/2020] M: a
[9:24 p. m., 18/10/2020] M: <?php
require ("conexion.php");
$status = "";
$con=conectar();//variable que almacena la conexión ala base de datos
$password=$_POST['password'];//capturar datos del formulario
$usuario=$_POST['usuario'];

//selecciono la BBDD
mysql_select_db("login",$con);

//Sentencia SQL para buscar un usuario con esos datos
$ssql = "SELECT * FROM usuario WHERE usuario='$usuario' and password='$password'";

//Ejecuto la sentencia
$rs = mysql_query($ssql,$conn);

//vemos si el usuario y contraseña es váildo
//si la ejecución de la sentencia SQL nos da algún resultado
//es que si que existe esa conbinación usuario/contraseña
if (mysql_num_rows($rs)!=0){
    //usuario y contraseña válidos
    //defino una sesion y guardo datos
    session_start();
    session_register("autentificado");
    $autentificado = "SI";
    header ("Location: bienvenido.html");
}else {
    //si no existe le mando otra vez a la portada
    header("Location: bien.html");
}
mysql_free_result($rs);
mysql_close($conn);
?>