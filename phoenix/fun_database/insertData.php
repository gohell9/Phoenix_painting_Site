<?php include("menu.php");

header("content-type:text/html;charset=utf-8");
require_once("database.php");
$insert_title = $_POST['title'];
$insert_content = $_POST['content'];
$insert_author = $_POST['author'];
$insert_date = $_POST['date'];
$insert_kind = $_POST['kind'];
getConnection();
$sql = /** @lang text */
    "insert into addnews(title,content,author,datetime,kind,click_num)VALUES('$insert_title','$insert_content','$insert_author','$insert_date','$insert_kind',0) ";
if (mysqli_query($databaseConnection, $sql)) {
    echo "<h4 style='text-align: center'>新闻发布成功</h4>";
}
closeConnection();




