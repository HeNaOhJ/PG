<!DOCTYPE html>
	<head>
		<title> Pagina</title>
        <link rel="stylesheet" href="estilos2.css">
	</head>
	<body>
<div class="base">
<?php 
session_start();
$id=$_SESSION['id'];
$conexion = new mysqli("sql309.epizy.com","epiz_31923291","PN78r9HoagBpD","epiz_31923291_PG");

	$sql1 = "SELECT * FROM usuarios WHERE id = $id";
	$resultado = $conexion->query($sql1);
	$rx = $resultado->fetch_assoc();
	?>
	<div class="cu b1"><div class="inf o1"><div class="img"></div>
		<div class="i">Usuario:<?php echo $rx['nombre']; ?></div></div>
		<div class="inf o2">Nivel: <?php echo $rx['nivel']; ?></div>
		<div class="inf o3" onclick="teoria()">Acceder a Teoría</div>
	</div>
	<div class="cu b2"><div class="in fo1">Practicar</div>
		<div class="in fo2">Evaluarme</div>
    </div>
<div class="teoria" id="teo">
<div class="info">Acá hay información xd v </div>
<div class="info">Acá hay información xd v </div>
<div class="info">Acá hay información xd v </div>
<div class="volv" onclick="teoria()"> v </div>
</div>
</div>
<form method="POST" id="for">
<input style=" opacity:0;" type="text" name="sesion" value="<?php echo $rx['nombre']; ?>">			
		</form>	
<div id="chat" class="chat" onclick="chatting()"><img src="chat.png" class="chatt"></div>


<div id="cit" class="cit">
	<div class="titulo">Opinar</div>
Qué te pareció la aplicación?
<form method="POST" action="pagina.php">
	<input value="" class="op" type="text" name="texto" placeholder=""><br>
	<input style="opacity:0 ;" type="text" name="nombre" value="<?php echo $rx['nombre'] ?>">
	<input style="opacity:0 ;" type="number" id="puntaje1" name="puntaje1" placeholder="puntaje" value="0"><br>
	<input style="opacity:0 ;" type="number" id="puntaje2" name="puntaje2" placeholder="puntaje" value="0"><br>
	<input style="opacity:0 ;" type="number" id="puntaje3" name="puntaje3" placeholder="puntaje" value="0"><br>
	<input style="opacity:0 ;" type="number" id="puntaje4" name="puntaje4" placeholder="puntaje" value="0"><br>
	<input style="opacity:0 ;" type="number" id="puntaje5" name="puntaje5" placeholder="puntaje" value="0"><br>
<div class="kga">
	<div id="o1" onclick="oo1()" class="est o1"></div>
	<div id="o2" onclick="oo2()" class="est o2"></div>
	<div id="o3" onclick="oo3()" class="est o3"></div>
	<div id="o4" onclick="oo4()" class="est o4"></div>
	<div id="o5" onclick="oo5()" class="est o5"></div>
</div>
<input style="font-size: 30px; padding: 10px 20px; position: absolute; bottom: 1%;" type="submit" name="click" value="Opinar" href="#ancla" >
<?php 
	if (isset($_POST['click'])){
		$mensaje=$_POST['texto'];
		$nombre=$_POST['nombre'];
		$puntaje1=$_POST['puntaje1'];
		$puntaje2=$_POST['puntaje2'];
		$puntaje3=$_POST['puntaje3'];
		$puntaje4=$_POST['puntaje4'];
		$puntaje5=$_POST['puntaje5'];
	$sqll = "INSERT INTO opin(nombre,mensaje,puntaje1,puntaje2,puntaje3,puntaje4,puntaje5) VALUES('$nombre','$mensaje','$puntaje1','$puntaje2','$puntaje3','$puntaje4','$puntaje5')";
	$resultado = $conexion->query($sqll);
	if ($resultado) {
		echo "si dió";
		header("Location:pagina.php");
	}	}	 ?>
<div id="respuesta1"></div>
</div>






<form method="POST" id="xd">
			<input class="salir"  type="submit" name="salir" value="salir">
		</form>
<?php if (isset($_POST['salir'])){	session_destroy();header("Location:index.php");} ?>
<script src="javas2.js"></script>
</body>
</html>