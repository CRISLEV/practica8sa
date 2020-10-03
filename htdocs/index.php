<?php 

	$conexion=mysqli_connect('db','root','root','sa');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Datos de Contactos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>Nombre</td>
			<td>Carnet</td>
		</tr>

		<?php 
		$sql="SELECT * from contacto";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['carnet'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>