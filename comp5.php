<!DOCTYPE html>
<html>
<head>
	<title>Comprobación lectora patito feo</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="img" style="background-image: url(images/cuentos.jpg);">
	
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #000000;">
      	<div class="container">
	        <a class="navbar-brand" href="MenuUsuario.php">
	          	<img src="images/logo.png" alt="" width="70" height="60" >
	        </a>
	        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	        	<span class="navbar-toggler-icon"></span>
	        </button>     
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	          	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        		<li class="nav-item">
	          			<a class="nav-link active" aria-current="page" href="MenuUsuario.php">Inicio</a>
	        		</li>
	            	<li class="nav-item">
	              		<a class="nav-link" href="Nosotros.php">¿Quienes somos?</a>
	            	</li>
	            	<li class="nav-item">
	              		<a class="nav-link" href="MenuPronunciacion.php">Pronunciación</a>
	            	</li>
	            	<li class="nav-item dropdown">
	              		<a class="nav-link" href="reglasort.php">Reglas</a>
	            	</li>
	            	<li class="nav-item">
	              		<a class="nav-link" href="MenuLeer.php">Lecturas</a>
	            	</li>
	          	</ul>
	            <form action="CerrarSesion.php" method="POST">
	            	<button class="btn btn-outline-success" type="submit">Cerrar Sesión</button>
	            </form>
    		</div>
      	</div>
    </nav>
<nav style="position: absolute;
	margin: 300px auto 0;
	width: 700px;
	background: #191919;
	transform: translate(-50%,-50%);
	padding: 40px;
	top: 30%;
	left: 50%;
	text-align: left;
	color: white;">
<h1 align="center">Responda las siguientes preguntas:</h1>
<form action="pr.php" method="POST">
<p>1. ¿Que característica era propia del patito?</p>
<input style = "width:5%" type="radio" id="cb1" name="cb1" value="0"><label>A. Belleza</label><br>
<input style = "width:5%" type="radio" id="cb1" name="cb1" value="0"><label>B. Fealdad</label><br>
<input style = "width:5%" type="radio" id="cb1" name="cb1" value="0"><label>C. Fuerza</label><br>
<input style = "width:5%" type="radio" id="cb1" name="cb1" value="1"><label>D. Personalidad</label><br>


<p>2. ¿Que era el patito feo en realidad?</p>
<input style = "width:5%" type="radio" id="cb2" name="cb2" value="0"><label>A. Un pato.</label><br>
<input style = "width:5%" type="radio" id="cb2" name="cb2" value="0"><label>B. Una paloma.</label><br>
<input style = "width:5%" type="radio" id="cb2" name="cb2" value="1"><label>C. Un cisne.</label><br>


<p>3. ¿El patito fue feliz al final? </p>
<input style = "width:5%" type="radio" id="cb3" name="cb3" value="1"><label>A. Verdadero</label><br>
<input style = "width:5%" type="radio" id="cb3" name="cb3" value="0"><label>B. Falso</label><br>

<a href="#"><button type="input" class="form-control btn btn-primary submit px-3" name="btn">Revisar</button></a>
 </form>
</nav>
</body>
</html>