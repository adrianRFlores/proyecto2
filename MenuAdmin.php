<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>Inicio Admin</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="img" style="background-image: url(images/bg.jpg);">
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
		        		<a class="nav-link active" aria-current="page" href="MenuAdmin.php">Inicio</a>
		        	</li>
		           	<li class="nav-item">
		           		<a class="nav-link" href="Nosotros.php">Ingresar Maestro</a>
		           	</li>
		           	<li class="nav-item">
		           		<a class="nav-link" href="MenuPronunciacion.php">Ingresar Instituto</a>
		          	</li>
		          	<li class="nav-item dropdown">
		           		<a class="nav-link" href="#"></a>
		          	</li>
		           	<li class="nav-item">
		           		<a class="nav-link" href="#"></a>
		           	</li>
		        </ul>
		        <form action="CerrarSesion.php" method="POST">
		          	<button class="btn btn-outline-success" type="submit">Cerrar Sesión</button>
		        </form>
	    	</div>
      	</div>
    </nav>
<section class="ftco-section">
	<div align="center">
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-4">
				<div class="login-wrap p-0">
		      		<br><br><font size="10" color="white">Inicio</font><br>
		      	</div>
		      </div>
		</div>
	</div>
	<table style="margin: 0 auto;">
		<tr>
			<td>
				<table>
					<tr>
						<td>
							<br><br><br><br>
						</td>
					</tr>
					<tr>
						<td align="center" width="400">
							<a href="Administrador.php">
							<img src="images/Maestro.jpg" style="border-radius: 15px;" height="150"/></a>
							<br><font size="5" color="white">Ingresar Maestros</font>
						</td>
						<td  align="center" width="400">
							<a href="Institutos.php">
							<img src="images/instituto.jpg" style="border-radius: 15px;" height="150"/></a>
							<br><font size="5" color="white">Ingresar Institutos</font>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</section>	 
</body>
</html>