<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

		<?php

			abstract class Usuario{
				protected String $nombre;
				protected String $codigo;
				protected String $sucursal;

				public function __construct($nombre, $codigo, $sucursal){
					$this->nombre = $nombre;
					$this->codigo = $codigo;
					$this->sucursal = $sucursal;
				}

				public function setNombre($nuevo){
					$nombre = $nuevo;
				}

				public function setSucursal($nuevo){
					$sucursal = $nuevo;
				}

				public function setCodigo($nuevo){
					$codigo = $nuevo;
				}

				public function getNombre(){
					return $nombre;
				}

				public function getSucursal(){
					return $sucursal;
				}

				public function getCodigo(){
					return $codigo;
				}
			}

		?>

	</body>
</html>