<html>
    <head>
        <title>Menú</title>
    </head>
    <body>
        <center><h1><u>PROYECTO 2</u></h1></center>
        <center><h2>¡Escribe y lee desde 0!</h2></center>
        <fieldset>
            <legend>Inicia sesión</legend>
                <form action="Inicio.php" method="POST">
                    <label>Usuario</label>
                    <input type="text" name="usuario" required>
                    <br><br>
                    <label>Contraseña</label>
                    <input type="text" name="contra" required>
                    <br><br>
                    <input type="submit" value="Ingresar" name="sesion" >
                </form>
        </fieldset>
        <h4>¿Aún no tienes cuenta?<br> ¡Créala aquí!</h4>
        <fieldset>
            <legend>Crea tu cuenta</legend>
            <form action="Inicio.php" method="POST">
                <label>Nombre de Usuario</label>
                <input type="text" name="usuario" required>
                <br><br>
                <label>Contraseña</label>
                <input type="text" name="contra" required>
                <br><br>
                <input type="submit" value="Crear" name="cuenta" >
            </form>
        </fieldset>
		<?php
		
		function conectar($servername, $username, $pass, $db){
			$conn= new mysqli($servername,$username, $pass,$db);
			if(!$conn){
				die("Conexión defectuosa: " . mysqli_connect_error());
			}
			echo "Conexión exitosa <br>";
		}
		
		if(isset($_POST["sesion"])){
			$servername="localhost"; 
			$username="";
			$password="";
			$dbname="";
			conectar($servername, $username, $password, $dbname);
			$usuario = $_POST["usuario"];
			$contraseña = $_POST["contra"];
		}
		
		if(isset($_POST["cuenta"])){
			$servername="localhost"; 
			$username="";
			$password="";
			$dbname="";
			conectar($servername, $username, $password, $dbname);
		}
		?>
    </body>
</html>