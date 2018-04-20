<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>凤画新闻</title>

    <style type="text/css">
        .content {
            width: 600px;
            height: auto;
            font-size: 17px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
<?php
require_once("database.php");
getConnection();

$id = $_GET['id'];
$check_sql = "update addnews set click_num = click_num+1 where id={$id}";
mysqli_query($databaseConnection, $check_sql);
$sql = /** @lang text */
    "select * from addnews where id={$id}";
$result = mysqli_query($databaseConnection, $sql);
foreach ($result as $row) {
    echo "<h2 style='text-align: center'>{$row['title']}</h2>";
    echo "<p style='text-align: center'>浏览次数:{$row['click_num']}</p>";
    echo "<div class='content'><p>{$row['content']}</p></div>";
    echo "<p style='text-align: center'>作者:{$row['author']}
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        日期:{$row['datetime']}</p>";
}
closeConnection();
?>
</body>
</html>