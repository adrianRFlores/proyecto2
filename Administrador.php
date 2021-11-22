<!doctype html>
<html lang="en">
<head>
  <title>Ingresar Maestro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
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
		          			<a class="nav-link active" aria-current="page" href="MenuUsuario.php">Inicio</a>
		        		</li>
		            	<li class="nav-item">
		              	<a class="nav-link" href="Administrador.php">Ingresar Maestro</a>
		            	</li>
		            	<li class="nav-item">
		              	<a class="nav-link" href="Instituto.php">Ingresar Instituto</a>
		            	</li>
		          	</ul>
		            <form action="CerrarSesion.php" method="POST">
		            	<button class="btn btn-outline-success" type="submit">Cerrar Sesión</button>
		            </form>
	    		</div>
      	</div>
    </nav>
	<form action="GuardarMaestro.php" method="POST" class="signin-form">
		<section class="ftco-no-pt">
			<div align="center">
				<table>
					<tr>
						<td>
							<a href="Login.php">
								<img src="Images/Logo.png" style="border-radius: 15px;"  height="100"/>
							</a>
						</td>
					</tr>
				</table>
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="login-wrap p-0">
			      	<h3 class="mb-4 text-center">Crear Cuenta</h3>
		      		<div class="form-group">
		      			<input type="text"  class="form-control" placeholder="Ingrese el nombre del catedratico" name="text1" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="text"  class="form-control" placeholder="Ingrese el Codigo" name="text2" required>
		      		</div>
		      		<div class="form-group">	
			     			<select name="selec1" class="form-control">
									<option value="" class="form-control" style=" color: #000 !important;">Institutos...</option>
									<?php
										$usuario = "root";
										$clave = "";
										$servidor = "localhost";
										$base = "aprende";

							  			$cone = mysqli_connect($servidor, $usuario, $clave, $base);
							  			
							  			$query = "SELECT CodigoInstituto, NombreInstituto from institutos";
							  			$q = mysqli_query($cone, $query);
										
							 			while ($x = mysqli_fetch_array($q)){
											echo "<option style='color: #000;' value='".$x['CodigoInstituto']."'>".$x['NombreInstituto']."</option>";
											/*
							  				echo "<option style='color: #000;' value=''>".$x['CodigoInstituto']."</option>";*/
							  			}
										?>
								</select>
							</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Ingrese una Contraseña" name="text4" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="btn">Ingresar Catedratico</button>
	            </div>
								<div class="text-md-center">
									<a href="Login.php" style="color: #fff">Regresar
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