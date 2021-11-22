<?php
$usuario = "root";
$clave = "";
$servidor = "localhost";
$base = "aprende";
$cone = mysqli_connect($servidor, $usuario, $clave, $base);
if (isset($_POST['btn']))
{	
	session_start();
	ob_start();
	$instituto = $_SESSION['instituto'];
	$nombre = $_POST['text1'];
	$codigo = $_POST['text2'];
	$codtuto = $_POST['selec1'];
	$contra = $_POST['text4'];
	$contra2 = $_POST['text5'];
	$tipo = "Alumno";
	if(!$cone)
   	{
     	die ("No se pudo establecer la Conexión");
   	}
   	else
	{
	   	if($nombre != "" && $codigo != "" && $codtuto != "" && $contra != "" && $contra2)
	   	{
	   		$cons= "SELECT CodigoUsuario from usuario";
	   		$x1 = mysqli_query($cone, $cons);
	    	$bandera = false;
	   		while (($a = mysqli_fetch_array($x1)) && !$bandera){
				if ($a['CodigoUsuario'] == $codigo) $bandera = true;
			}
			if ($bandera){
				echo "<script>
				alert('El Codigo ya existe');
				window.location.replace('Registro.php');
				</script>";
			}
			else{
				if ($contra == $contra2){
					$usu = "INSERT INTO usuario values('$tipo', '$codigo', '$contra', 'instituto')";
		    		$x2 = mysqli_query($cone, $usu);
		    		$alu = "INSERT INTO alumno values('$codigo', '$nombre', '$codtuto', 0.00)";
		    		$x3 = mysqli_query($cone, $alu);
		    		if ($x2)
		    		{
		    			if($x3){
				   			echo "<script>
							alert('Se ha guardado con exito los datos');
							window.location.replace('Login.php');
							</script>";
						}
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
else{
	echo "<script>
	alert('Hola mal');
	</script>";
}
?>