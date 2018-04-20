<?php
    include_once("functions/database.php"); 
    $user_name = $_GET['user_name'];
	$password = $_GET['password'];    
    $sql = "insert into user(user_name,password) values('$user_name','$password');";
    get_connection();
    mysql_query("set names 'utf8'"); 
    mysql_query($sql);
    close_connection(); 
    header("refresh:2;url=./index.php"); 
	echo "<h1 style='text-align: center'>OK!   Let's   back   to   HomePage~~~</h1>";
?>


