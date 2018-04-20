<?php

require_once("database.php");
$id = $_GET['id'];
getConnection();
$sql = /** @lang text */
    "delete from addnews where id={$id}";
mysqli_query($databaseConnection, $sql);
header("Location:../ShowData.php");
closeConnection();



