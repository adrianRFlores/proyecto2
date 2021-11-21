 <!DOCTYPE html>
<html>
<head>
	<title>La invitación de la señora araña</title>
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
	margin: 270px auto 0;
	width: 700px;
	background: #191919;
	transform: translate(-50%,-50%);
	padding: 40px;
	top: 30%;
	left: 50%;
	text-align: center;
	color: white;">

<h1 align="center">Reglas de uso de tílde</h1>	
<p>
	1. Las palabras agudas llevan tilde cuando terminan en -n, en -s o en vocal: balón, compás, café, colibrí, bonsái; pero si terminan en -s precedida de otra consonante, se escriben sin tilde: zigzags, robots, tictacs. Tampoco llevan tilde las palabras agudas que terminan en -y, pues esta letra se considera consonante a efectos de acentuación: guirigay, virrey, convoy, estoy.
</p>
<p>
	2. Las palabras llanas (graves) llevan tilde cuando no terminan en -n, en -s o en vocal: clímax, hábil, tándem. También se acentúan cuando terminan en -s precedida de otra consonante: bíceps, cómics, fórceps; y cuando terminan en -y, pues esta letra se considera consonante a efectos de acentuación: póney, yóquey.
</p>
<p>
	3. Las palabras esdrújulas y sobresdrújulas siempre llevan tilde: cántaro, mecánica, cómetelo, llévesemelo.
</p>

<a href="tildep.php">
	<button type="input" class="form-control btn btn-primary submit px-3" name="btn" >Comprobación</button>

</a>
</nav>


</body>

</html>