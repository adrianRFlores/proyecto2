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

<h1 align="center">Reglas de uso de signos de puntuación</h1>	
<p>
	1. 1. Se utiliza el punto y coma para separar las oraciones de un periodo, cuando en medio de ellas ya se han utilizado comas.
</p>
<p>
	2. Se utiliza el punto y coma para separar oraciones sintácticamente (ordenadamente, estructuralmente) independientes, entre las que existe una estrecha relación semántica (de significado), por ejemplo, de causa y efecto o de hecho y consecuencia (Diccionario panhispánico de dudas, 2005), así como también, en medio de aquellas oraciones en las que la segunda explica, amplía, justifica y aclara, la primera.
</p>
<p>
	3. Se escribe punto y coma antes de los conectores adversativos, concesivos o consecutivos, como: pero, mas, aunque, sin embargo, por tanto, por consiguiente, es decir, por lo tanto…, cuando las oraciones que comienzan tienen cierta longitud.
</p>

<a href="spp.php">
	<button type="input" class="form-control btn btn-primary submit px-3" name="btn" >Comprobación</button>

</a>
</nav>


</body>

</html>