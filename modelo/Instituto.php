<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php

			class Instituto{
				private String $nombre;
				private String $codigo;

				public function __construct($nombre, $codigo){
					$this->nombre = $nombre;
					$this->codigo = $codigo;
				}

				public function getNombre(){
					return $nombre;
				}

				public function getCodigo(){
					return $codigo;
				}
			}

		?>
	</body>
</html>
