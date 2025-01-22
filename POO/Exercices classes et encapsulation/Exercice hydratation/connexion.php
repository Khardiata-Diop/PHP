<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "khardiatadiop_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

$user = "khardiatadiop";
$password = "161ae7b2ff1f7c00fe30ced60967a789";

$db = new PDO(
    $connexionString,
    $user,
    $password
);
var_dump($db);
?>