<?php 
session_start(); 
include_once("functions/database.php");	
    $user_name = $_SESSION["user"];
	$words = $_GET['words'];  
	$date = date("Y/m/d");
	$sql = "insert into comment(user_name,words,date) values('$user_name','$words','$date');";
	get_connection();
	mysql_query("set names 'utf8'"); 
	$result_set = mysql_query($sql);
	close_connection(); 
	header("Location:talk-center.php");
?>

