<!DOCTYPE html>
  <head>
		<title>Inicio</title>
    <link rel="shortcut icon" href="imag/Lo.jpeg">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Barrio&family=Bubblegum+Sans&family=Bungee+Shade&family=Cabin+Sketch&family=Codystar:wght@300&family=Fascinate+Inline&family=Faster+One&family=Fredericka+the+Great&family=Gochi+Hand&family=Hi+Melody&family=Monoton&family=Nanum+Pen+Script&family=Nothing+You+Could+Do&family=Pacifico&family=Rubik+Glitch&family=Rubik+Microbe&display=swap" rel="stylesheet">
	</head>
<body id="cuerpo">
<div class="body">
  <div class="pfalsa2" id="pfalsa2">Fraxi<div class="frax" ></div></div>    
  <div class="bo b1" onclick="rr()">Unetenos</div>
  <div class="bo b2" onclick="co()">Conocenos</div>
  <div class="bo b3" onclick="op()">Opiniones</div>
  <div class="ani am1"><img src="imgs/leon.png " class="amm1"></div>
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
      $imagen = addslashes(file_get_contents($_FILES['im']['tmp_name']));
      $sqlx = "SELECT * FROM usuario";
      $ejecutar1=mysqli_query($conexion, $sqlx);
      while($datoo=$ejecutar1->fetch_assoc()){
        if ($name==$datoo['nombre']) {
          ?><script>alert("ese nombre ya está registrado");</script><?php 
          break;
      }}
      if($name!=$datoo['nombre']){
        $sqly="INSERT INTO usuario(nombre,clave,imagen) VALUES ('$name','$cla','$imagen')"; 
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
<div class="cel" id="cel">
  <div class="bt regis" onclick="regs()">Ya tengo cuenta</div>
  <div class="bt ingre" onclick="ingre()">Quiero Comenzar</div>
  <div class="bt ingre" onclick="op()">Ver opiniones</div>
  <div class="bt ingre" onclick="inyy()">Ver Info</div>
  <div class="reg" id="reg">
    Entonces Entra <br>
    <form method="post">
      Ingresa tu Usuario
      <input class="input" type="text" name="nmbre" placeholder="Nombre"><br>
      Ingresa tu Clave
      <input class="input" type="password" name="clave" placeholder="Clave"><br>
      <input class="cajon1" type="submit" name="enviar">
    </form>
  </div>
  <div class="ing" id="ing">
    Registremonos entonces :) <br>
    <form action="index.php" method="POST" enctype="multipart/form-data"><br>
      <input required class="input" type="text" name="nombrae" placeholder="Nombre"><br>
      <input required class="input" type="number" name="clav" placeholder="Clave">
      imagen: <br><br>
      <input required id="img" style="font-size:100%; display:flex;width:65%;" type="file" name="im" value="usuario.png"><br>
      <input class="cajon1" type="submit" name="log">
    </form>
  </div>
</div>
<div class="iny" id="iny">  <!---->
  <div class="salr" onclick="inyy()">x</div>
 <div class="p  a0"><h1>Qué es una fracción?</h1> <br>
 Esta pregunta no es fácil de contestar, a pesar de ser un elemento tan familiar para todos, las fracciones tienen múltiples significados que hacen difícil su definición y, por tanto, su didáctica y su comprensión. Esos dos números que colocamos uno sobre el otro y separamos con una línea horizontal se pueden interpretar de hasta cinco formas diferentes, las cuales veremos en este post, junto con algunas de sus vinculaciones didácticas. </div>
 <div class="p  a1"><h1>1. Relación entre la Parte y el Todo</h1>
 la interpretación más sencilla y evidente para los niños, es el uso de la fracción para referirnos a una parte de la unidad, del todo: <br>
 <img style="width:99%; height:260px;" src="imgs/ej1.jpg"><br>
 Problema .He cenado una pizza con mis tres amigos y, para que todos comiésemos la misma cantidad, la hemos cortado en 4 trozos iguales. Yo me he comido 1 trozo. Expresa en forma de fracción la cantidad de pizza que me he comido: Solución Te has comido 1/4 de la pizza.<br><br>
 Es una interpretación muy común y por la cual se suelen empezar las secuencias didácticas pero plantea un problema a la hora de introducir las fracciones impropias; “¿cómo voy a coger más partes de las que hay?”. Pero, al mismo tiempo es muy representativa, se relaciona mucho con elementos y situaciones de la vida real, cercanas a los niños, lo cual permite una fácil modelización, muy importante en los primeros niveles de una secuencia didáctica para la comprensión de lo que se está haciendo y representando.
 </div>
 <div class="p  a2"><h1>2. Puntos en la Recta Numérica</h1>
 En relación a la didáctica de las fracciones impropias, la continuidad de la recta numérica se presenta como un recurso muy útil; “ahora sí que puedo coger más, porque después del 1 viene el 2, luego el 3… y así ¡hasta el infinito!”.<br>
 Veamos un ejemplo, ¿qué esto de una fracción como un punto en la recta numérica?<br>
 <img style="width:99%; height:260px;" src="imgs/ej2.jpg"><br> 
 Problema¿Qué fracción marca el punto morado en la recta numérica? Pantalla Recta numérica con sectores que dividen la unidad en tercios; el punto morado se sitúa en la primera marca después de la unidad. Solución: Pues como las líneas finitas dividen en 3 a la unidad. El punto morado marca… 1, 2, 3 y 4; cuatro tercios
 </div>
 <div class="p  a3"><h1>3. Operador </h1>
 Cuando comenzamos a operar con fracciones, sobre todo al multiplicar (operación de muy difícil didáctica, ya que “veces más” hace el número “más pequeño”), se entiende como un operador, elemento que, al aplicarlo sobre el número, afecta a su valor; de tal modo, “si yo aplico ½ a 6, 6 pasa a ser 3”. Esto ocurre en niveles muy básicos de comprensión, cuando aún no se logra comprender ½ de 6 como ½ X 6 y, menos todavía, la fracción como una división. Es, en cierto modo, una comprensión de las mismas como lo que en el futuro los niños estudiarán como funciones:
 Al aplicar ½… 	…sobre 6… 	…me da<br><br>
 F(x)= ½ x 	x = 6 	F(x) = 3 
 </div>		
 <div class="p  a4"><h1>4. Razón</h1>
 Consiste en la comprensión de las fracciones como la expresión de una relación entre cantidades. Se refiere a la comprensión de la fracción como la expresión numérica de: “Por cada x hay y”. <br>
 <img style="width:99%; height:260px;" src="imgs/ej3.jpg"><br> 
 Un niño expresa la relación entre cantidades mediante una fracción: “por cada tienda hay 4 scouts, se puede expresar como 1/4.<br><br>
 Además, esta interpretación del concepto de fracción, permite la introducción al concepto de escalas: “Cada cm que mido en el plano hay 1000 cm en la realidad”
 </div>
 <div class="p  a5"><h1>5. Cociente</h1>
 La interpretación de la fracción como un cociente supone la mayor dificultad de comprensión y se trata de la analogía entre divisiones y fracciones. Dificultad que reside en el hecho de que las fracciones son concebidas como números, mientras que las divisiones son una operación.<br><br>
 Así, las diferentes interpretaciones han sido presentadas en orden de dificultad, lo cual es importante tener en cuenta a la hora de introducirlas; teniendo en cuenta que la tendencia general en la dificultad de los contenidos matemáticos es de lo contextualizado a lo abstracto, de lo concreto a lo general: <br><br>
 Número contextualizado 	Número como entidad abstracta <br><br>
 1/3 de pizza 	1/3 
 </div>
 <div class="p  a6"><h1>6.Clasificación de fracciones </h1>
 <h2>Fracciones propias </h2><br>
 Se llaman fracciones propias a aquellas que representan números menores que la unidad. Y ¿cómo son estas fracciones? Todas las fracciones que representan un número menor que la unidad se caracterizan por tener el numerador menor que el denominador. Por ejemplo: <br><br>
 <img style="width:99%; height:200px;" src="imgs/ej4.jpg">
 </div>
 <div class="p  a7"><h2>Fracciones impropias </h2>
 Se llaman fracciones impropias a las que representan números mayores que la unidad. Y ¿cómo son estas fracciones? Todas las fracciones que representan un número mayor que la unidad se caracterizan por tener el numerador mayor que el denominador. Por ejemplo: <br>
 <img style="width:99%; height:260px;" src="imgs/ej5.jpg">
 </div>
 <div class="p  a8"><h2>Fracciones iguales a la unidad </h2>
 Son las que representan números iguales a la unidad. Es decir, son las fracciones que representan el 1 y se caracterizan por tener el numerador y el denominador iguales. <br>
 <img style="width:99%; height:260px;" src="imgs/ej6.jpg">
 </div>
 <div class="p  a9"><h1> 7. Ejemplos de clasificación de fracciones</h1> 
 <p>Vamos a ver ejemplos clasificando estas fracciones: <br><br>
 2527; 12; 54 ; 180180 ;  363 ; 66 ; 42 ; 1010; 200279 <br><br>
 2527 < 1 ya que el numerador es menor que el denominador: Es una fracción propia <br><br>
 12 < 1 ya que el numerador es menor que el denominador: Es una fracción propia <br><br>
 54 > 1 ya que el numerador es mayor que el denominador: Es una fracción impropia <br><br>
 180180 = 1 ya que el numerador es igual al denominador: Es una fracción igual a la unidad <br><br>
 363 > 1 ya que el numerador es mayor que el denominador: Es una fracción impropia <br><br>
 66 = 1 ya que el numerador es igual al denominador: Es una fracción igual a la unidad <br><br>
 42 > 1 ya que el numerador es mayor que el denominador: Es una fracción impropia <br><br>
 1010 = 1 ya que el numerador es igual al denominador: Es una fracción igual a la unidad <br><br>
 200279 < 1 ya que el numerador es menor que el denominador: Es una fracción propia </p>
 </div>
 <div class="p a10"><h2>Fracción impropia como número mixto </h2>
 <p>Recordemos que un número mixto es una manera numérica de representar una fracción mayor que la unidad (fracción impropia), o lo que es lo mismo, de representar fracciones en las que el numerador es mayor que el denominador. </p>
 <p>Pongamos un ejemplo para que los entiendas mejor, verás qué fácil: </p>
 <p>Si observas la fracción impropia 6713, quizá no te resulte fácil visualizar el número que representa, más allá de que es mayor que la unidad (porque el numerador es mayor que el denominador, es decir, 67 > 13). Pero si la conviertes en un número mixto, podrás interpretar mucho mejor el número que representa. </p><br>
 <p>Para ello, lo primero que debes hacer es dividir el numerador de la fracción entre el denominador, para saber cuantas unidades enteras contiene el número. </p><br>
 <img style="width:70%; height:200px;" src="imgs/ej7.jpg">
 <p>Como 65 = 13 x 5, podemos separar el 67 en 65 y 2, y una de las partes será divisible entre 13 y la otra no: </p><br>
 <img style="width:99%; height:130px;" src="imgs/ej8.jpg">
 <p>Ahora, es muy fácil escribir el número mixto: primero se escribe la parte entera y a continuación la parte menor que la unidad: </p><br>
 <img style="width:100px; height:100px;" src="imgs/ej9.jpg">
 <p>Con esta representación es fácil observar que el número tiene 5 unidades enteras y 2 treceavos de otra unidad. </p><br>
 <p>Veamos ahora unos ejemplos de ejercicios y problemas que existen en Smartick para trabajar los números mixtos. </p>
 </div>
 <div class="p a11"><h2>Ejemplo 1 de ejercicio de números mixtos </h2>
 <p>En el primer tipo de ejercicios podemos practicar la escritura del número mixto a partir de su representación con gráficos circulares. Como ves en el ejemplo, aparece pintado un círculo completo y 3 partes iguales de 6 de otro. </p>
 <img style="width:99%; height:250px;" src="imgs/ej10.jpg"> 
 <img style="width:99%; height:250px;" src="imgs/ej11.jpg"><br> 
 <p>Por lo tanto, es fácil ver que el número representado gráficamente es 136: </p></div> 
 <div class="p a12"><h2>Ejemplo 2 de ejercicio de números mixtos </h2>
 <p>En el segundo tipo de ejercicios podemos practicar el paso de la fracción impropia al número mixto a partir de su representación con pizzas. Como ves en el ejemplo, aparecen 2 pizzas enteras y media pizza. </p> 
 <img style="width:99%; height:250px;" src="imgs/ej12.jpg"><br> 
 <p> Se puede ver fácilmente que 52 de pizza son 2 pizzas enteras y 12 de pizza. 
 Es decir, el número mixto que corresponde a la fracción impropia 52 es 212 . </p>
 <img style="width:99%; height:250px;" src="imgs/ej13.jpg"><br> 
 <p>¿A que es mucho más fácil de interpretar? </p>
 </div>
 <div class="p a13"><h2>Ejemplo 3 de ejercicio de números mixtos </h2>
 <p>En el tercer tipo de ejercicios, podemos practicar la escritura de la fracción impropia y del número mixto a partir de su representación con gráficos circulares. Como ves en el ejemplo, aparecen pintados 3 círculos completos y 2 partes iguales de 4 de otro. </p>
 <img style="width:99%; height:250px;" src="imgs/ej14.jpg"><br> <br>
 <img style="width:99%; height:250px;" src="imgs/ej15.jpg"><br> 
 <p>Ahora el número mixto representado es 324 y la fracción impropia que representa es 144 : </p>
 </div>
 <div class="p a14"><h2>Ejemplo 4 de problema de números mixtos </h2>
 <p>Por último, veamos una actividad de Smartick donde se trabajan los números mixtos dentro de la resolución de problemas. </p>
 <img style="width:99%; height:250px;" src="imgs/ej16.jpg"><br> 
 <p>Para calcular las vueltas que tiene que dar Toc a su planeta, como tiene que dar 5 más que Tic, y Tic tiene que dar 49 de vuelta, no hay más que sumar 5 y 49. </p><br>
 <p>Representar este resultado como un número mixto es muy fácil, porque no hay que hacer esa suma de 5 y 49, sino que basta con escribir la parte entera seguida de la fracción:  549. </p>
 <img style="width:99%; height:250px;" src="imgs/ej17.jpg"><br> 
 <p>Podemos responder entonces que Toc tiene que dar 549 vueltas a su planeta. </p>
 </div> 
</div>
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
    <script src="fun.js"></script>    
  </div>        
          <?php  	}} ?><?php ?>
</div>
</div>
<div class="p4" id="p4"><div class="pfalsa2"> 
  <img src="imgs/chat.png" class="per">
  <img src="imgs/chat.png" class="per">
  <img src="imgs/chat.png" class="per"> Conocenos</div>
  <div onclick="co()" class="salr">x</div></div>
<script src="javas.js"></script>
</body>
</html>
