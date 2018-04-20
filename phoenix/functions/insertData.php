

<?php
	header("content-type:text/html;charset=utf8");
	include_once("functions/database.php");
	$insert_title = $_POST['title'];
	$insert_content = $_POST['content'];
	$insert_author = $_POST['author'];
	$insert_date = $_POST['date'];
	$insert_kind = $_POST['kind'];
	
 
	 $sql="insert into news(title,content,author,date,kind)VALUES('$insert_title','$insert_content','$insert_author','$insert_date','$insert_kind') ";
	 get_connection();
	 mysql_query("set names 'utf8'");
	 mysql_query($sql);//执行sql语句
	 close_connection();//关闭数据库

 ?>