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
	$tipo = "Maestro";
	if(!$cone)
   	{
     	die ("No se pudo establecer la Conexión");
   	}
   	else
	{
	   	if($nombre != "" && $codigo != "")
	   	{
	   		$cons= "SELECT CodigoInstituto from institutos";
	   		$x1 = mysqli_query($cone, $cons);
	    	$bandera = false;
	   		while (($a = mysqli_fetch_array($x1)) && !$bandera){
				if ($a['CodigoInstituto'] == $codigo) $bandera = true;
			}
			if ($bandera){
				echo "<script>
				alert('El Codigo ya existe');
				window.location.replace('Institutos.php');
				</script>";
			}
			else{
				$usu = "INSERT INTO institutos values('$codigo', '$nombre')";
		    	$x2 = mysqli_query($cone, $usu);
		    	if ($x2)
		    	{
				   	echo "<script>
					alert('Se ha guardado con exito los datos');
					window.location.replace('Institutos.php');
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