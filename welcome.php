<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head><title>Welcome</title></head>
	<body>
	<?php
	if($_SESSION["log-in"]==0)header('location:log-in.php');
	echo "selamat datang ".$_SESSION["name"]. "<br>";
	if((date('H')+5)%24>=3 && (date('H')+5)%24<=6)echo"puagi";
	elseif(date('H')>=6-5 && date('H')<=10-5)echo"pagi";
	elseif(date('H')>=10-5 && date('H')<=16-5)echo"siang";
	elseif(date('H')>=16-5 && date('H')<=19-5)echo"sore";
	else echo"malam";
	?>
	<br><a href=log-in.php>log-out</a>
	
	</body>

</html>