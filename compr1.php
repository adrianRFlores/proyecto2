<?php
$r1=$_POST['r1'];
$r2=$_POST['r2'];
$r3=$_POST['r3'];

if ($r1 == "Ballena" || $r1 == "ballena"){
 	if($r2 == "Pavo" || $r2 == "pavo"){
 		if($r3 == "Barro" || $r3== "barro"){
			echo "<script>
			window.location.replace('re1.php');
			</script>";
 		}
 		else{
 			echo "<script>
			window.location.replace('re2.php');
			</script>";
 		}
 	}
 	else{
 		if($r3 == "Barro" || $r3 == "barro"){
			echo "<script>
			window.location.replace('re2.php');
			</script>";
 		}
 		else{
 			echo "<script>
			window.location.replace('re3.php');
			</script>";
 		}
 	}
}
else{
	if($r2 == "Pavo" || $r2== "pavo"){
 		if($r3 == "Barro" || $r3 == "barro"){
			echo "<script>
			window.location.replace('re2.php');
			</script>";
 		}
 		else{
 			echo "<script>
			window.location.replace('re3.php');
			</script>";
 		}
 	}
 	else{
 		if($r3 == "Barro" || $r3 == "barro"){
			echo "<script>
			window.location.replace('re3.php');
			</script>";
 		}
 		else{
 			echo "<script>
			window.location.replace('re4.php');
			</script>";
 		}
 	}
}
?>
