<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>搜索有趣新闻</title>
    <link rel="stylesheet" href="../css/ShowData.css">
    <style type="text/css">
        a {
            text-decoration: none;
        }

        a:hover {
            color: #0e9d56;
        }
    </style>
</head>
<script type="text/javascript">
    function doDel(id) {
        if (confirm("确定要删除吗？")) {
            window.location = 'delData.php?id=' + id;
        }
    }

    function showDetails(id) {
        window.location = 'ShowDetail.php?id=' + id;
    }
</script>
<body>
<h3 align="center">凤画新闻</h3>
<table border="1" align="center">
    <?php
    header("content-type:text/html;charset=utf-8");
    require_once("database.php");
    getConnection();
    $search_sql = /** @lang text */
        "select from addnews order by id desc";
    $keyword = "";
    if (isset($_POST['search'])) {
        $keyword = $_POST['search'];
        $search_sql = /** @lang text */
            "select * from addnews WHERE title like '%$keyword%' or content LIKE '%$keyword%' or category LIKE '%$keyword%' ORDER BY id DESC ";
    }
    $result = mysqli_query($databaseConnection, $search_sql);
    if (mysqli_num_rows($result) == 0) {
        echo "<a href='ShowData.php'><p style='text-align: center'>没有找到您想要的,浏览其它新闻吧。</p></a>";
    } else {
        echo "<tr>
        <th>标题</th>
        <th>作者</th>
        <th>日期</th>
        <th>操作</th>
    </tr>";
        foreach ($result as $row) {
            echo "<tr >";
            echo "<td width='300px' style='text-align: center'>{$row['title']}</td>";
            echo "<td width='70px' style='text-align: center'>{$row['author']}</td>";
            echo "<td width='100px' style='text-align: center'>{$row['datetime']}</td>";
            echo "<td width='75px' style='text-align: center'>
                    <a href='javascript:doDel({$row['id']})'>删除</a>|
                    <a href='javascript:showDetails({$row['id']})'>详情</a>
              </td>";
        }
    }
    closeConnection();
    ?>
</table>
</body>
</html>
