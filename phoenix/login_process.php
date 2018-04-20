<?php 
session_start(); 
include_once("functions/database.php");
    $user_name = $_GET['user_name'];
	$password = $_GET['password'];  

$sql = "select * from user where user_name='$user_name' and password ='$password'"; 
	get_connection();
	mysql_query("set names 'utf8'"); 
	$result_set = mysql_query($sql); 
	if(mysql_num_rows($result_set)>0){ 
	     $admin = mysql_fetch_array($result_set);
	     $_SESSION['user'] = $admin['user_name']; 	
	     header("refresh:2;url=./index.php"); 
		 echo "<h1 style='text-align: center'>OK!   Let's   back   to   HomePage~~~</h1>";
	}else{ 
	     header("refresh:2;url=./index.php"); 
		 echo "<h1 style='text-align: center'>OK!   Let's   back   to   HomePage~~~</h1>";
	} 
	close_connection(); 
?>