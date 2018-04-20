<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>凤画新闻中心</title>
    <link rel="stylesheet" href="./css/ShowData.css">
</head>
<script  type="text/javascript">
    function doDel(id) {
        if (confirm("确定要删除吗？")) {
            window.location = './fun_database/delData.php?id=' + id;
        }
    }

    function showDetails(id) {
        window.location = './fun_database/ShowDetail.php?id=' + id;
    }
    function verify_search() {
       var check_search =document.forms["myForm"]["search"].value.replace(/(^\s+)|(\s+$)/g,"");
        if(check_search===""||check_search===null){
            alert('要输入搜索内容呦!');
            return false;
        }
    }
</script>
<body>
	
	
<h3 align="center">凤画新闻中心</h3>

<form action="./fun_database/SearchData.php" method="post" class="search" name="myForm" onsubmit="return verify_search()">
    <label>
        <input type="text" name="search" >
    </label>
    <input type="submit" value="搜索" class="a_demo_two">
</form>

<table border="1">
    <tr>
        <th>标题</th>
        <th>作者</th>
        <th>日期</th>
        <th>操作</th>
    </tr>
    <?php
    header("content-type:text/html;charset=utf-8");
    require_once("./fun_database/database.php");
    require_once("./fun_database/page.php");
    getConnection();
    if (isset($_GET['page_current'])) {
        $page_current = $_GET['page_current'];
    } else {

        $page_current = 1;
    }
    $url = './fun_database/ShowData.php';
    $page_size = 9;

    $sql = /** @lang text */
        "select * from addnews";
    $result = mysqli_query($databaseConnection, $sql);
    $total_records = mysqli_num_rows($result);
    page($total_records, $page_size, $page_current, $url);
    $sql = /** @lang text */
        "select * from addnews order by id desc limit " . ($page_current - 1) * $page_size . ", $page_size";
    $result = mysqli_query($databaseConnection, $sql);
    foreach ($result as $row) {
        echo "<tr >";
        echo "<td width='350px' style='text-align: center'>{$row['title']}</td>";
        echo "<td width='70px' style='text-align: center'>{$row['author']}</td>";
        echo "<td width='100px' style='text-align: center'>{$row['datetime']}</td>";
        echo "<td width='75px' style='text-align: center'>
                    
                    <a href='javascript:showDetails({$row['id']})'>详情</a>
              </td>";
    }
    closeConnection();

    ?>
</table>
</body>
</html>