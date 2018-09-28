<?php
session_start();
$_SESSION["log-in"]=0;

?>
<!DOCTYPE html>
<html>
	<head><title>log-in form</title>
	<style>
		#center{
			position: absolute;
			width: 100%;
			height: 20px;
			top: 50%;
			margin-top: -10px;
			text-align: center;
		}
	</style>
	<script>
	function empty() {
		var x,y;
		x = document.getElementById("name").value;
		y = document.getElementById("pass").value;
		if (x=="" && y==""){
			alert("please enter username and password");
			return false;
		}
		else if (x == "") {
			alert("please enter username");
			return false;
		}
		else if (y == "") {
			alert("please enter password");
			return false;
		};
	}
	</script>
	</head>
	<div id=center>
	<body>
	
		<form action="validate_sign-in.php" method=post>
			<input type=text name=name id=name>
			<input type=password name=pass id=pass>
			<button onClick="return empty()">sign-in</button>
		</form>
	</div>
	</body>

</html>