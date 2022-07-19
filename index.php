<!DOCTYPE html>
  <head>
		<title>Inicio</title>
    <link rel="shortcut icon" href="imag/Lo.jpeg">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="llaves/estilos.css">
<script src="llaves/javas.js"></script>
  </head>
<body id="cuerpo">
<div class="body">
  <div class="pfalsa2" id="pfalsa2">Fraxi<div class="frax" ></div></div>    
  <div class="bo b1" onclick="rr()">Unetenos</div>
  <div class="bo b2" onclick="co()">Conocenos</div>
  <div class="bo b3" onclick="op()">Opiniones</div>
  <div class="ani am1"><img src="imag/chat.png " class="amm1"></div>
  <div class="carrusel">Carrusel</div>
</div>
<div class="p2" id="p2"><div class="pfalsa2">Acceso</div>
  <div onclick="rr()" class="salr">x</div>
<div class="rg" id="rg">
  <?php  $conexion = new mysqli("localhost","root","","pg");  ?>
  <div id="kj2" class="cajaa cj12">
    <div class="x">log in</div>
    <form style="display:flex; flex-direction:column;align-items:center;" action="index.php" method="POST" enctype="multipart/form-data">
      <input class="input" type="text" name="nombrae" placeholder="Nombre">
      <input class="input" type="number" name="clav" placeholder="Clave">
      <input class="cajon1" type="submit" name="log">
    </form>
    <?php 
    if (isset($_POST['log'])){
      $name=$_POST['nombrae'];
      $cla=$_POST['clav'];
      $sqlx = "SELECT * FROM usuario";
      $ejecutar1=mysqli_query($conexion, $sqlx);
      while($datoo=$ejecutar1->fetch_assoc()){
        if ($name==$datoo['nombre']) {
          ?><script>alert("ese nombre ya está registrado");</script><?php 
          break;
      }}
      if($name!=$datoo['nombre']){
        $sqly="INSERT INTO usuario(nombre,clave) VALUES ('$name','$cla')"; 
        $ejecutar=mysqli_query($conexion, $sqly); 
    }} ?>
  </div>
  <div id="kj3" class="cajaa cj13">
    <div class="x">sign in</div>
    <form  method="POST">
      <input class="input" type="text" name="nmbre" placeholder="Nombre">
      <input class="input" type="password" name="clave" placeholder="Clave">
      <input class="cajon1" type="submit" name="enviar">
    </form>
  </div><?php 
  if($conexion){
  if(isset($_POST['enviar'])){
  $nombre=$_POST['nmbre'];
  $sql = "SELECT clave,id FROM usuario WHERE nombre='$nombre'";
  $resultado=$conexion->query($sql);
  $clave=$_POST['clave'];
  $dato=$resultado->fetch_assoc();
  if ($clave==$dato['clave']){
  session_start();
  $_SESSION['id'] = $dato['id'];
  header("Location:pagina.php");
  }}}else{echo " conexion f";}
  ?>
</div>
<div class="center" id="center">
  <div class="a coso" onclick="ingresar()">Entrar con Mi cuenta</div>
  <div class="a coso1" onclick="registrar()">Comenzar</div>
</div></div>
<div id="p3" class="p3"><div class="pfalsa2">Comentarios</div>
<div onclick="op()" class="salr"></div>
<div id="cit" class="cit">
  <?php
  $sqlx = "SELECT * FROM opin ORDER BY id DESC";
  $ejecutar1=mysqli_query($conexion, $sqlx);
  $num=0;
  while ($da=$ejecutar1->fetch_assoc()){  if($num!=5){   $num=$num + 1;  ?>
  <div class="coment" id="coment"><div class="img"></div>
    Usuario:<?php echo $da['nombre']?> <br>
    Opinión:<?php echo $da['mensaje']?><br>
    <input style="opacity:0; display:none;" id="nm" type="number" value="<?php echo $da['puntaje1']?>">
    <input style="opacity:0; display:none;" id="nm" type="number" value="<?php echo $da['puntaje2']?>">
    <input style="opacity:0; display:none;" id="nm" type="number" value="<?php echo $da['puntaje3']?>">
    <input style="opacity:0; display:none;" id="nm" type="number" value="<?php echo $da['puntaje4']?>">
    <input style="opacity:0; display:none;" id="nm" type="number" value="<?php echo $da['puntaje5']?>">
    <div class="kga">
    	<div style="opacity:<?php echo $da['puntaje1'] ?> ;" id="o1" class="est"></div>
    	<div style="opacity:<?php echo $da['puntaje2'] ?> ;" id="o2" class="est"></div>
    	<div style="opacity:<?php echo $da['puntaje3'] ?> ;" id="o3" class="est"></div>
    	<div style="opacity:<?php echo $da['puntaje4'] ?> ;" id="o4" class="est"></div>
    	<div style="opacity:<?php echo $da['puntaje5'] ?> ;" id="o5" class="est"></div>
    </div>
    <script src="llaves/fun.js"></script>    
  </div>        
          <?php  	}} ?><?php ?>
</div>
</div>
<div class="p4" id="p4"><div class="pfalsa2"> 
  <img src="imag/chat.png" class="per">
  <img src="imag/chat.png" class="per">
  <img src="imag/chat.png" class="per"> Conocenos</div>
  <div onclick="co()" class="salr">x</div></div>
</body>
</html>
