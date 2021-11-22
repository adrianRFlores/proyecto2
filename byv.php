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

<h1 align="center">Reglas de B</h1>	
<p>
	1. Los sonidos br y bl. Delante de una r o de una l, el sonido siempre se escribe con b.
Ejemplo: bravo, blanco, equilibrio, niebla, tableta.
</p>
<p>
	2. Las terminaciones regulares de verbos en pretérito imperfecto son ba, bas, ba, bamos, bais, ban. Esta es una falta de ortografía frecuente en los niños.
Ejemplo: yo jugaba, tú estabas de vacaciones, mi abuela entraba, nosotros hablábamos, vosotros os amabais, ellos iban al mercado.
</p>
<p>
	3. Los verbos terminados en bir llevan una b, excepto hervir, servir y vivir y sus derivados –convivir, bienvivir, malvivir, sobrevivir...
</p>
<h1 align="center">Reglas de V</h1>
<p>
	1. Los nombres y adjetivos terminados en ivo o iva llevan una v.
Ejemplo: cultivo, abusivo, vomitivo, activo, conflictivo…
Excepciones: arriba, recibo, escriba, criba, diatriba, estiba, giba, jaiba, amibo, catibo, estribo y gálibo.
</p>
<p>
	2. Las palabras en dv se escriben con v.
Ejemplo: advertencia, adviento, advenir, adversario…
</p>
<p>
	3. Las palabras terminadas en vor o vora se escriben con v.
Ejemplo: carnívoro, herbívoro, pólvora….
</p>
<a href="byvp.php">
	<button type="input" class="form-control btn btn-primary submit px-3" name="btn" >Comprobación</button>

</a>
</nav>


</body>

</html>