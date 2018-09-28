<?php
session_start();
$_SESSION["log-in"]=0;

?>
<style>
#center{
	
    text-align: center;
}
</style>

<!DOCTYPE html>
<html>
	<head><title>log-in form</title></head>
	<body>
	<div id=center>
		not signed yet? <a href=sign-in.php>click here</a>
		<?php //echo "user ".$_SESSION["name"]." pass ".$_SESSION["pass"];?>	
		<form action="validate_log-in.php" method=post>
			<input type=text name=name>
			<input type=password name=pass><?phpif($_SESSION["error"]==true)echo"wrong pass or username"?>
			<button type=submit value=log-in>
		</form>
	</div>
	</body>
	
</html>