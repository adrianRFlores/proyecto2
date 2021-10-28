<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body class="img" style="background-image: url(images/bg.jpg);">
	<section class="ftco-no-pt">
		<div align="center">
			<table>
				<tr>
					<td>
						<a href="Menu.php">
							<img src="Images/Logo.png" style="border-radius: 15px;"  height="100"/>
						</a>
					</td>
				</tr>
			</table>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Crear Cuenta</h3>
		      	<form action="Registro.php" class="signin-form">
		      		<div class="form-group">
		      			<input type="text"  class="form-control" placeholder="Ingrese su Nombre Completo" name="text1" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="text"  class="form-control" placeholder="Ingrese el Codigo" name="text2" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="text"  class="form-control" placeholder="Ingrese el Nombre de su Instituto" name="text3" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="text"  class="form-control" placeholder="Ingrese el Codigo de su Tutor" name="text4" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Ingrese una Contraseña" name="text5" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Confirmar Contraseña" name="text6" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3" name="btn">Crear Cuenta</button>
	            </div>
								<div class="text-md-center">
									<a href="Login.php" style="color: #fff">Regresar
								</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>
	<?php

		$usuario = "root";
  	$clave = "";
  	$servidor = "localhost";
  	$base = "aprende";
  	$cone = mysqli_connect($servidor, $usuario, $clave, $base);
  	if (isset($_POST['btn']))
		{	
			$nombre = $_POST['tex1'];
			$codigo = $_POST['tex2'];
			$instituto = $_POST['tex3'];
			$codtuto = $_POST['tex4'];
			$contra = $_POST['tex5'];
			$contra2 = $_POST['tex6'];
			$tipo = "Alumno";
			if(!$cone)
		   {
		     die ("No se pudo establecer la Conexión");
		   }
		   else
	    {
	    	if($nombre != "" && $codigo != "" && $instituto != "" && $codtuto != "" && $contra != "" && $contra2)
	    	{
		   		$cons= "SELECT CodigoUsuario from usuario";
		   		$x1 = mysqli_query($cone, $cons);
		    	$bandera = false;
		   		while (($a = mysqli_fetch_array($x1)) && !$bandera)
					{
						if ($a['CodigoUsuario'] == $codigo) $bandera = true;
					}
					if ($bandera)
					{
						echo "<script>
						alert('El Codigo es repetido');
						window.location.replace('Registro.php');
						</script>";
					}
					else
					{
						if ($contra == $contra2) {
							$usu = "INSERT INTO usuario values('$Tipo', '$codigo', '$contra', '$codtuto')";
			    		$x2 = mysqli_query($cone, $usu);
			    		$alu = "INSERT INTO alumno values('$codigo', '$nombre', '$codtuto', 0.00)";
			    		$x3 = mysqli_query($cone, $alu);
			    		if ($x2 && $x3)
			    		{
				   			echo "<script>
								alert('Se ha guardado con exito los datos');
								</script>";
							}
						}
						else
						{
							echo "<script>
							alert('La contraseña es distinta');
							window.location.replace('Registro.php');
							</script>";
						}
					}
				}
				else
				{
					echo "<script>
					alert('Llene todos los campos');
					</script>";
				}
	    }  
		}
	?>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
	</body>
</html>