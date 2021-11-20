<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>Seleccion De Sucursal</title>
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
		     				<select name="tex1" class="form-control">

						<option value="" class="form-control">Institutos...</option>
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
		            	<button type="submit" class="form-control btn btn-primary submit px-3" name="btn">Rellenar datos</button>
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
# Programador: Gabriel García
# Nombre De Los Programas: Admin1.php, Caje0.php, Caje1.php, Caje2.php, CC.php, CC1.php, CCA.php, CCC.php, Clien.php, Clien1.php, Clien2.php, Clien3.php, CS.php, Index.php, INS.php, IS.php, Menu.php, Pdff.php, RC.php, Roles.php, RS.php, SS.php, SuperU.php
# Lenguaje: PHP Y JavaScript
# Recursos: HTML, CSS, FPDF y Sublime Text
# Fecha de Finalizacion: 03.10.2020
	if (isset($_POST['bo1']))
	{
		session_start();
		ob_start();
		$_SESSION['sucur'] ="";
		$sucu=$_POST['tex1'];
		if($sucu!="")
		{
			$_SESSION['sucur'] = $sucu;
			echo"<script>window.location.replace('Clien1.php');</script>";
		}
		else
		{
			echo "<script>
				alert('Seleccione una Sucursal');
				</script>";
		}
	}
		
?>
</body>
</html>