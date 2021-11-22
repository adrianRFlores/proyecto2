<?php
//creacion de variables de sesion
session_start();
ob_start();
$_SESSION['coduser'] = "";
$_SESSION['nomuser'] = "";
$_SESSION['instituto'] = "";

$usuariosql = "root";
$clave = "";
$servidor = "localhost";
$base = "aprende";
$clase = new MainLogin($servidor, $usuariosql, $clave, $base);
class MainLogin
{

	function login ($cone){
		if (isset($_POST['btn'])) {
			$codigo = $_POST['user'];
			$contras = $_POST['contra'];
		}
		if ($codigo !="" && $contras != "") {
			//Revisa que el codigo existe
			$cons= "SELECT CodigoUsuario from usuario";
	    	$x = mysqli_query($cone, $cons);
	    	$band = false;
	   		while (($a = mysqli_fetch_array($x)) && !$band)
			{
				if ($a['CodigoUsuario'] == $codigo) $band = true;
			}
			if (!$band)
			{
				echo "<script>
				alert('No se encontró el código');
				window.location.replace('Login.php');
				</script>";
			}
			else
			{
				//Revisar que la contraseña sea correcta
				$cons = "SELECT Contraseña from usuario where CodigoUsuario = $codigo";
	    		$x2 = mysqli_query($cone, $cons);
	    		$resultado = $x2 -> fetch_row();
	    		$band2 = false;
	    		if ($resultado[0] == $contras) $band2 = true;
	    		
	   			
	    		/*while (($a2 = mysqli_fetch_array($x2)) && !$band2)
				{
					if ($a2['Contraseña'] == $cons) $band2 = true;
					echo "<script>alert('".$a2."');</script>";
				}*/
				
				if (!$band2)
				{
					echo "<script>
					alert('La contraseña es incorrecta');
					window.location.replace('iniciarS.php');
					</script>";
				}
				else
				{
					//Seleccionar el puesto
					$pues = "SELECT Tipo from usuario where CodigoUsuario = $codigo";
					$x3 = mysqli_query($cone, $pues);
					$a3 = mysqli_fetch_array($x3);
					$f3 = $a3['Tipo'];
					//Seleccionar la instituto
					$inst = "SELECT CodigoInstituto from usuario where CodigoUsuario = $codigo";
					$x4 = mysqli_query($cone, $inst);
					$a4 = mysqli_fetch_array($x4);

					//Seleccionar el nombre
					if ($f3 == 'Maestro') {
						$nomb = "SELECT Nombre from maestro where CodigoMaestro = $codigo";
						$x5 = mysqli_query($cone, $nomb);
						$a5 = mysqli_fetch_array($x5);
					}
					else{
						if ($f3 == 'Alumno') {
							$nomb = "SELECT Nombre from alumno where CodigoAlumno = $codigo";
							$x5 = mysqli_query($cone, $nomb);
							$a5 = mysqli_fetch_array($x5);
						}
						else{
							if ($f3 == 'Administrador') {
								$nomb = "SELECT Nombre from administrador where CodigoAdministrador = $codigo";
								$x5 = mysqli_query($cone, $nomb);
								$a5 = mysqli_fetch_array($x5);
							}
						}
					}
					//Guardarlas en las variables de sesion
					$_SESSION['instituto'] = $a4['CodigoInstituto'];
					$_SESSION['coduser'] = $codigo;
					$_SESSION['nomuser'] = $a5['Nombre'];
					if ($f3 == 'Administrador')
					{
						echo "<script>alert('Bienvenido ".$a5['Nombre']." (Administrador)');
						window.location.replace('MenuAdmin.php');
						</script>";
					}
					else
					{
						if ($f3 == 'Maestro')
						{
							echo "<script>alert('Bienvenido ".$a5['Nombre']." (Maestro)');
							window.location.replace('#');
							</script>";
						}
						else
						{
							if ($f3 == 'Alumno')
							{
								echo "<script>alert('Bienvenido ".$a5['Nombre']." (Alumno)');
								window.location.replace('MenuUsuario.php');
								</script>";
							}
						}
					}
				}
			}
		}
		else{
			echo "<script>
			alert('Rellene todos los campos');
			window.location.replace('#');
			</script>";
		}
	}
		function __construct(String $servidor, String $usuariosql, String $clave, String $base){
		/*echo "<script>
			alert('HOLAAAAAAAAAAAAAAAAAAAA');
			</script>";*/
		$conexion = mysqli_connect($servidor, $usuariosql, $clave, $base);
		$this->login($conexion);
	}

}
?>
