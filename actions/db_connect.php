<?php 

error_reporting( ~E_DEPRECATED & ~E_NOTICE);
// error_reporting(E_ERROR | E_PARSE);

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "CR10_KimberleyB_BigLibrary";

// create connection
$connect = new  mysqli($localhost, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
} else {
    echo "";
}

?>