<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        a .center_set {
            height: 60%;
            text-align: center;
            left: 39%;
            position: relative;
            display: inline;
            border: 0 solid #cccccc;
            bottom: 10px;
            transition-duration: 0.5s;

        }

        a .center_set:hover {
            color: white;
            background-color: #ec4b4b;
            box-shadow: 0 16px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);;

        }

        div {
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
            display: inline;
        }
.select{
    position: relative;
    margin-right: 34%;
    margin-left: 50%;
    float: right;

}
        p {
            display: inline;
            /*text-align:center;*/
            /*position: relative;*/
            /*margin: 0 auto 20px;*/
        }

        a #m {
            margin-right: 5px;
            padding-right: 4px;
            padding-left: 4px;
        }

        a #n {
            padding-right: 4px;
            padding-left: 4px;
            margin-left: 5px;
        }

        a #num {
            padding-right: 4px;
            padding-left: 4px;
            margin-right: 5px;
            margin-left: 5px;
        }
    </style>
</head>
<body>

<?php
function page($total_records, $page_size, $page_current, $url)
{
    global $navigator;
    $total_pages = ceil($total_records / $page_size);
    $page_previous = ($page_current <= 1) ? 1 : $page_current - 1;
    $page_next = ($page_current >= $total_pages) ? $total_pages : $page_current + 1;
    $page_next = ($page_next == 0) ? 1 : $page_next;
    $page_start = ($page_current - 5 > 0) ? $page_current - 5 : 0;
    $page_end = ($page_start + 4 < $total_pages) ? $page_start + 4 : $total_pages;
    $page_start = $page_end - 4;
    if ($page_start < 0) {
        $page_start = 0;
    }
	
    /*$navigator .= "<a href='./index.php=1'><span class='center_set' id='m'>首页</span></a> ";*/
	/*$navigator .= "<a href='./publish-news.html'>发布新闻</a> ";*/
    $navigator .= "<a href='$url?page_current=$page_previous'><span class='center_set' id='m'>上一页</span></a>";
	
    for ($i = $page_start; $i < $page_end; $i++) {
        $j = $i + 1;
        $navigator .= "<a href='$url?page_current=$j'><span class='center_set' id='num'>$j</span></a>";
    }
    $navigator .= "<a href='$url?page_current=$page_next'><span class='center_set' id='n'>下一页</span></a>";
    $navigator .= "<a href='$url?page_current=$total_pages'><span class='center_set' id='m' >末页</span></a>"; 	
    $navigator .= "<br><div><p>共 $total_records 条记录，共 $total_pages 页，当前是第 $page_current 页&nbsp&nbsp&nbsp跳转到:</p></div>";
    $navigator .= "<span></span><select name='topage' size='1' onchange='window.location=\"$url?page_current=\"+this.value' class='select'>\n";
    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $page_current)
            $navigator .= "<option value='$i' selected>$i</option>\n";
        else
            $navigator .= "<option value='$i'>$i</option>\n";
    }
    echo $navigator;
}

?>
</body>
</html>