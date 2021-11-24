<?php
session_start();
ob_start();
$r1=$_POST['cb1'];
$r2=$_POST['cb2'];
$r3=$_POST['cb3'];
$usuariosql = "root";
$clave = "";
$servidor = "localhost";
$base = "aprende";
$cone = mysqli_connect($servidor, $usuariosql, $clave, $base);
$cons= "SELECT Codigo and nombre from alumno";
$x1 = mysqli_query($cone, $cons);
$sum = ($r1+$r2+$r3);
if ($sum==3)
$nota = 100;
$ins = "INSERT INTO usuarios values('$cons', '$nota',  '$nombre')";
$x2 = mysqli_query($cone, $ins);
header("Location: re1.php");


if ($sum==2)
$nota = 66;
$ins = "INSERT INTO usuarios values('$cons', '$nota',  '$nombre')";
$x2 = mysqli_query($cone, $ins);
header("Location: re2.php");


if ($sum==1)
$nota = 33;
$ins = "INSERT INTO usuarios values('$cons', '$nota',  '$nombre')";
$x2 = mysqli_query($cone, $ins);
header("Location: re3.php");


if ($sum==0)
$nota = 0;
$ins = "INSERT INTO usuarios values('$cons', '$nota',  '$nombre')";
$x2 = mysqli_query($cone, $ins);
header("Location: re4.php");
exit();
?>
