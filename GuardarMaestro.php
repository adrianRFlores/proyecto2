<?php
$usuario = "root";
$clave = "";
$servidor = "localhost";
$base = "aprende";
$cone = mysqli_connect($servidor, $usuario, $clave, $base);
if (isset($_POST['btn']))
{	
	$nombre = $_POST['text1'];
	$codigo = $_POST['text2'];
	$instituto = $_POST['selec1'];
	$contra = $_POST['text4'];;
	$tipo = "Maestro";
	if(!$cone)
   	{
     	die ("No se pudo establecer la Conexión");
   	}
   	else
	{
	   	if($nombre != "" && $codigo != "" && $instituto != "" && $contra != "")
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
				window.location.replace('Administrador.php');
				</script>";
			}
			else{
				$usu = "INSERT INTO usuario values('$tipo', '$codigo', '$contra', 'instituto')";
		    	$x2 = mysqli_query($cone, $usu);
		    	$maes = "INSERT INTO maestro values('$codigo', '$nombre', '$instituto')";
		    	$x3 = mysqli_query($cone, $maes);
		    	if ($x2)
		    	{
		    		if($x3){
				   		echo "<script>
						alert('Se ha guardado con exito los datos');
						window.location.replace('Administrador.php');
						</script>";
					}
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