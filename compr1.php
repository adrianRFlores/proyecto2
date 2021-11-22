<?php
$r1=$_POST['r1'];
$r2=$_POST['r2'];
$r3=$_POST['r3'];

if ($r1=="Ballena" || $r1=="ballena")	
 	if($r2=="Pavo" || $r2=="pavo")
 		if($r3=="Barro" ||$r3=="barro")
			header("Location: re1.php");


if (($r1!="ballena" && $r2=="pavo" && $r3=="barro") || ($r1=="ballena" && $r2!="pavo" && $r3=="barro") || ($r1=="ballena" && $r2=="pavo" && $r3!="barro"))
header("Location: re2.php");


if (($r1!="ballena" && $r2!="pavo" && $r3=="barro") || ($r1!="ballena" && $r2=="pavo" && $r3!="barro") || ($r1=="ballena" && $r2!="pavo" && $r3!="barro"))
header("Location: re3.php");


if (($r1!="ballena" && $r2!="pavo" && $r3!="barro"))
header("Location: re4.php");
exit();
?>
