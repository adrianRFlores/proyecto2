<!doctype html>
<html lang="en">
<head>
  <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
</head>
<body class="img" style="background-image: url(images/bg.jpg);">
	<form action="GuardarAlumno.php" method="POST" class="signin-form">
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
		      			<input type="text"  class="form-control" placeholder="Ingrese su Nombre Completo" name="text1" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="text"  class="form-control" placeholder="Ingrese el Codigo" name="text2" required>
		      		</div>
		      		<div class="form-group">	
			     			<select name="selec1" class="form-control">
									<option value="" class="form-control" style=" color: #000 !important;">Catedraticos...</option>
									<?php
										session_start();
										ob_start();
										$instituto = $_SESSION['instituto'];
										/*echo "<script>
												alert('".$instituto."');
											</script>";*/
										$usuario = "root";
										$clave = "";
										$servidor = "localhost";
										$base = "aprende";

							  			$cone = mysqli_connect($servidor, $usuario, $clave, $base);
							  			
							  			$query = "SELECT CodigoMaestro, Nombre FROM maestro WHERE CodigoInstituto = '$instituto'";
							  			$q = mysqli_query($cone, $query);
					  					
							 				while ($x = mysqli_fetch_array($q)){
							  				echo "<option style='color: black;' value='".$x['CodigoMaestro']."'>".$x['Nombre']."</option>";
							 				}
										?>
								</select>
							</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Ingrese una Contraseña" name="text4" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	              <input id="password-field2" type="password" class="form-control" placeholder="Confirmar Contraseña" name="text5" required>
	              <span toggle="#password-field2" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="btn">Crear Cuenta</button>
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