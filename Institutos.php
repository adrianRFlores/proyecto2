<!doctype html>
<html lang="en">
<head>
  <title>Ingresar Institutos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="img" style="background-image: url(images/bg.jpg);">
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #000000;">
      	<div class="container">
		      <a class="navbar-brand" href="Administrador.php">
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
		              		<a class="nav-link" href="Administrador.php">Crear Maestro</a>
		            	</li>
		            	<li class="nav-item">
		              		<a class="nav-link" href="Institutos.php">Pronunciación</a>
		            	</li>
		            	<li class="nav-item dropdown">
		              		<a class="nav-link" href="#"></a>
		            	</li>
		            	<li class="nav-item">
		              		<a class="nav-link" href="#"></a>
		            	</li>
		          	</ul>
		            <form style="align: right;" action="CerrarSesion.php" method="POST">
		            	<button class="btn btn-outline-success" type="submit">Cerrar Sesión</button>
		            </form>
	    		</div>
      	</div>
    </nav>
	<form action="GuardarInstituto.php" method="POST" class="signin-form">
		<section class="ftco-no-pt">
			<div align="center">
				<br><br><br><br><br><br><br>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="login-wrap p-0">
			      	<h3 class="mb-4 text-center">Ingresar Institutos</h3>
		      		<div class="form-group">
		      			<input type="text"  class="form-control" placeholder="Ingrese el nombre del instituto" name="text1" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="text"  class="form-control" placeholder="Ingrese el Codigo del instituto" name="text2" required>
		      		</div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="btn">Guardar Instituto</button>
	            </div>
	           </div>
			      </div>
					</div>
				</div>
			</div>
		</section>
	</form>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>