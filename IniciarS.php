<?php
# Programador: Gabriel García
# Lenguaje: PHP Y JavaScript
# Recursos: HTML, CSS y Sublime Text
# Fecha de Finalizacion: 27.10.2021
	$usuario = "root";
  	$clave = "";
  	$servidor = "localhost";
  	$base = "aprende";
  	$cone = mysqli_connect($servidor, $usuario, $clave, $base);
  	//creacion de variables de sesion
  	session_start();
	ob_start();
	$_SESSION['instituto'] = "";
	$_SESSION['coduser'] = "";
	$_SESSION['nomuser'] = "";
  	if (isset($_POST['btn']))
	{
		$codigo=$_POST['user'];
		$contraseña=$_POST['contra'];
		if(!$cone)
	    {
	      die ("No se pudo establecer la Conexión");
	    }
	    else
    	{
    		if ($codigo != "" && $contraseña != "")
    		{
    			//Revisar que el codigo exista
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
					$cons= "SELECT Contraseña from usuario where CodigoUsuario = $codigo";
	    			$x2 = mysqli_query($cone, $cons);
	    			$band2 = false;
	    			while (($a2 = mysqli_fetch_array($x2)) && !$band2)
					{
						if ($a2['Contraseña'] == $contraseña) $band2 = true;
					}
					if (!$band2)
					{
						echo "<script>
						alert('La contraseña es incorrecta');
						window.location.replace('Login.php');
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
						$insti = "SELECT CodigoInstituto from usuario where CodigoUsuario = $codigo";
						$x4 = mysqli_query($cone, $insti);
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
							window.location.replace('Administrador.php');
							</script>";
						}
						else
						{
							if ($f3 == 'Maestro')
							{
								echo "<script>alert('Bienvenido ".$a5['Nombre']." (Maestro)');
								window.location.replace('Maestro.php');
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
			else
			{
				echo "<script>alert('Llene los campos correspondientes');
				</script>";
			}
    	}  
	}
?>