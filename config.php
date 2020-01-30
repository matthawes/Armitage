<?php 
//create database connection info in an array
$db['db_host'] = "127.0.0.1:50642";
$db['db_user'] = "azure";
$db['db_pass'] = "6#vWHD_$";
$db['db_db'] = "localdb";
$db['db_port'] = "8889";

//for each key convert to uppercase and create a constant
foreach($db as $key => $value){
define(strtoupper($key), $value);
}

//connect to a database
$connect = mysqli_connect(
DB_HOST,
DB_USER,
DB_PASS,
DB_DB,
DB_PORT
);

$query = "SET NAMES utf8";

//if does not connect display error
if (!$connect){
die('Not connected : ' . mysqli_error($connect));
}
?>
