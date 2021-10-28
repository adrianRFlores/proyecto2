<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		
		<?php
		
			include "Usuario.php";
			class Prof extends Usuario{
				public function __construct($nombre, $codigo, $sucursal){
					parent::__construct($nombre, $codigo, $sucursal);
				}
			}

		?>

	</body>
</html>