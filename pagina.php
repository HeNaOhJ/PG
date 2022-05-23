<!DOCTYPE html>
	<head>
		<title> Pagina</title>
	</head>
	<body>
<style>
	body{
	background:silver;
	}
</style>
<?php 
session_start();
$id=$_SESSION['id'];
$conexion = new mysqli("localhost","root","","pg");
	$sql1 = "SELECT * FROM usuarios WHERE id = $id";
	$resultado = $conexion->query($sql1);
	$rx = $resultado->fetch_assoc();
	?> 
	<div>Hola,<?php echo $rx['nombre']; ?></div>
<form method="POST" id="xd">
			<input  type="submit" name="salir" value="salir">
		</form>
			<?php 
			if (isset($_POST['salir'])) {
				session_destroy();
	header("Location:index.php");
}
			 ?>
</body>
</html>