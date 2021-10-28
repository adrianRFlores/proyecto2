co<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		
		<?php
			include "Usuario.php";
			class Estudiante extends Usuario{
				private String $codInstituto;
				private String $codProf;

				public function __construct($nombre, $codigo, $sucursal, $codInstituto, $codProf){
					parent::__construct($nombre, $codigo, $sucursal);
					$this->codInstituto = $codInstituto;
					$this->codProf = $codProf;
				}

				public function getcodInstituto(){
					return $codInstituto;
				}

				public function getProf(){
					return $codProf;
				}

				public function setcodInstituto($nuevo){
					$codInstituto = $nuevo;
				}

				public function setProf($nuevo){
					$codProf = $nuevo;
				}
			}

		?>

	</body>
</html>