<?php
session_start();

if($_SESSION["pass"]==$_POST["pass"]&&$_SESSION["name"]==$_POST["name"]){
	$_SESSION["log-in"]=1;
	header('location:welcome.php');
}else
{
echo "user ".$_SESSION["name"]." pass ".$_SESSION["pass"]."<br>";
echo "user ".$_POST["name"]." pass ".$_POST["pass"];
header('location:log-in.php');
}
?>
<!DOCTYPE html>
