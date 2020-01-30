<?php 
//create database connection info
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Parsing connnection string
foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_") !== 0) {
        continue;
    }
    
    $servername = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $username = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $password = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

//connect to a database
$connect = mysqli_connect($servername, $username, $password, $dbname);

$query = "SET NAMES utf8";

//if does not connect display error
if (!$connect){
die('Not connected : ' . mysqli_error($connect));
}
?>
