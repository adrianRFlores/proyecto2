<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>Seleccion De Sucursal</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="img" style="background-image: url(images/bg.jpg);
background-attachment: fixed;
background-size: 100% 100%">
<form action="SelecInstituto.php" method="POST">
	<section class="ftco-no-pt">
		<div align="center">
			<table>
				<tr>
					<td>
						<a href="Registro.php">
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
			     				<select name="selec1" class="form-control">
							<option value="" class="form-control" style=" color: #000 !important;">Institutos...</option>
							<?php
								$usuario = "root";
								$clave = "";
								$servidor = "localhost";
								$base = "aprende";

					  			$cone = mysqli_connect($servidor, $usuario, $clave, $base);
					  			
					  			$query = "SELECT * from institutos";
					  			echo "<script>
									alert(".$query.");
									</script>";
					  			$q = mysqli_query($cone, $query);
								
					 			while ($x = mysqli_fetch_array($q))

					  				echo "<option style='color: black;' value='".$x['CodigoInstituto']."'>".$x['NombreInstituto']."</option>";
							?>
							</select>
						</div>
		      		</div>
			            <div class="form-group">
			            	<button type="submit" class="form-control btn btn-primary submit px-3" name="btn1">Rellenar datos</button>
			            </div>
					<div class="text-md-center">
						<a href="Login.php" style="color: #fff">Regresar
					</div>
	            	</div>
		      </div>
		</div>
	</section>
</form>
<?php
	if (isset($_POST['btn1']))
	{
		session_start();
		ob_start();
		$_SESSION['instituto'] = "";

		$inst=$_POST['selec1'];
		if($inst != "")
		{
			$_SESSION['instituto'] = $inst;
			echo"<script>window.location.replace('Registro.php');</script>";
		}
		else
		{
			echo "<script>
				alert('Seleccione un instituto');
				</script>";
		}
	}
		
?>
</body>
</html>