<?php 

	$conexion=mysqli_connect('localhost','root','','login');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estiloss.css">
<br>

	<table style="margin: 0 auto;" border="1" > 
		<tr>
			<td>password</td>
			<td>usuario</td>
				
		</tr>

		<?php 
		$sql="SELECT * from ingr";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['password'] ?></td>
			<td><?php echo $mostrar['usuario'] ?></td>
			
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>