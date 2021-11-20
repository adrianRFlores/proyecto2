<?php
$r1=$_POST['cb1'];
$r2=$_POST['cb2'];
$r3=$_POST['cb3'];
$sum = ($r1+$r2+$r3);
if ($sum==3)
header("Location: re1.php");


if ($sum==2)
header("Location: re2.php");


if ($sum==1)
header("Location: re3.php");


if ($sum==0)
header("Location: re4.php");
exit();
?>
