<?php

$databaseConnection = null;
function getConnection()
{
    $hostName = "localhost";
    $database = "fenghua";
    $userName = "root";
    $password = "";
    global $databaseConnection;
    $databaseConnection = new mysqli($hostName, $userName, $password, $database);
    mysqli_query($databaseConnection, "set names 'utf8' ");
    mysqli_query($databaseConnection, "set character_set_client=utf8");
    mysqli_query($databaseConnection, "set character_set_results=utf8");}

function closeConnection()
{
    global $databaseConnection;
    mysqli_close($databaseConnection);
}
