<?php
$r1=$_POST['r1'];
$r2=$_POST['r2'];
$r3=$_POST['r3'];
if ($r1=="kilómetro" && $r2=="casa" && $r3=="karma")
header("Location: re1.php");


if (($r1!="kilómetro" && $r2=="casa" && $r3=="karma") || ($r1=="kilómetro" && $r2!="casa" && $r3=="karma") || ($r1=="kilómetro" && $r2=="casa" && $r3!="karma"))
header("Location: re2.php");


if (($r1!="kilómetro" && $r2!="casa" && $r3=="karma") || ($r1!="kilómetro" && $r2=="casa" && $r3!="karma") || ($r1=="kilómetro" && $r2!="casa" && $r3!="karma"))
header("Location: re3.php");


if (($r1!="kilómetro" && $r2!="casa" && $r3!="karma"))
header("Location: re4.php");
exit();
?>
