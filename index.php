 <html>
	<head>
		<title>Blog</title>
        <link rel="stylesheet" href="estilos.css">
	</head>
	<body id="body">
        <div class="pfalsa" id="pfalsa">
        <div class="dbarra">
        <div class="con te4" id="conte4">Registrarme</div>
        <div class="con te5" id="conte5">Cómo funcionamos?</div>
    </div>
        <div class="blateral" id="blat">
        <div class="casa" onclick="barra()">:)</div>
            <div class="b t2" id="bt2" onclick="rr()">Registrarme</div>
            <div class="b t1" id="bt1">Información</div>
            <div class="b t3" id="bt3">Teoría</div>
            <div class="b t4" id="bt4">Acerca de Nosotros</div>
            <div class="b t5" id="bt5">Evaluate</div>
        </div>
<div class="rg" id="rg">
<div id="kj2" class="cajaa cj12">
			
    <center>
      <div class="x">log in</div>
    </center>
	<center><form action="index.php" method="POST" enctype="multipart/form-data">
<input class="cajon" type="text" name="nombrae" placeholder="nombre" >
<input class="cajon" type="number" name="clav" placeholder="clave" >
<input class="cajon1" type="submit" name="log">
	</form></center>
	<div class="nombreb">
	</div>
		</div>

		<div id="kj3" class="cajaa cj13">
    <center>
      <div class="x">sign in</div>
    </center>
    <form  method="POST">

	<center><input class="cajon" type="text" name="nmbre" placeholder="nombre"></center>
  <center><input class="cajon" type="password" name="clave" placeholder="clave"></center>
  <center><input class="cajon1" type="submit" name="enviar"></center>
    </form>
</div></div>
<div class="a coso" onclick="ingresar()">Ingresar</div>
<div class="a coso1" onclick="registrar()">Registrarme</div></div> </div>
<div class="pfalsa2">
   <center><div class="frax" ><img class="imag" src="logog.gif" ><br>
   <div class="subt">arreglamos tus problemas</div></div></center>
<div class="a" onclick="ingresar()">Ingresar</div>
<div class="a" onclick="registrar()">Registrarme</div> 


    </div>
<script>   
    if(body.style.width<="600px"){

    }
                blat.style.left="-200px"; 
        function barra(){  
            if (blat.style.left!="-200px") {
                blat.style.left="-200px";            
            }else{
                blat.style.left="0px";
            }
        }
        function rr(){
            barra();
            rg.style.opacity="1";
            rg.style.display="block";
        }
        function registrar(){
	kj2.style.opacity="1";
	kj3.style.opacity="0";
	kj2.style.zIndex=20;
	kj3.style.zIndex=10;
}
function ingresar(){
	kj2.style.opacity="0";
	kj3.style.opacity="1";
	kj2.style.zIndex=10;
	kj3.style.zIndex=20;
}</script>
</body>
</html>
