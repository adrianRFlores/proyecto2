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
	<section class="ftco-section">
		<div align="center">
			<table>
				<tr>
					<td>
						<a href="Login.php">
							<img src="images/Logo.png" style="border-radius: 15px;"  height="100"/>
						</a>
					</td>
				</tr>
			</table>
			<form action="IniciarS.php" method="POST">
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="login-wrap p-0">
			      	<h3 class="mb-4 text-center">Iniciar Sesión</h3>
			      	<div class="form-group">
			      		<input type="text"  class="form-control" placeholder="Usuario" name="user" required>
			     		</div>
		          <div class="form-group">
		            <input id="password-field" type="password" class="form-control" placeholder="Contraseña" name="contra" required>
		            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		          </div>
		          <div class="form-group">
		           	<button type="submit" class="form-control btn btn-primary submit px-3" name="btn">Ingresar</button>
		          </div>
							<div class="text-md-center">
								<a href="SelecInstituto.php" style="color: #fff">Registrate aquí</a>
							</div>
		        </div>
			    </div>
				</div>
			</form>
		</div>
	</section>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <footer>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6 text-left">
              <br><br><br><br><br>
              <h6>© 2021 Aprende. Todos los derechos reservados</h6>
            </div>
          </div>
        </div>
    </section>
   
    </footer>
	</body>
</html>