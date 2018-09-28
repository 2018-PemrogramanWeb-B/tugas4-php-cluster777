<?php
session_start();
$_SESSION["log-in"]=1;
$_SESSION["name"]=$_POST["name"];
$_SESSION["pass"]=$_POST["pass"];
//echo $_SESSION["name"]." ".$_SESSION["pass"];
header('location:welcome.php');
?>
<!DOCTYPE html>
