<?php


$dbhost = '127.0.0.1';
$db = 'test';
$dbuser = 'root';
$dbpass = 'root';

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die('No!');

//try{
//
//
//    $dsn = "mysql:host=$dbhost; dbname=$db";
//    $dbh = new PDO($dsn, $dbuser, $dbpass);
//
//    print_r($dbh);
//
//}
//catch (PDOException $e) {
//    echo $e->getMessage();
//}



//$dbhost = "127.0.0.1";
//$port = "3306";
//$db = "test";
//$userName = "root";
//$password = "root";
//
//try {
//    $db = new PDO("mysql:host=$dbhost;dbname=$db;port=$port;",
//        $userName, $password);
//
//} catch (PDOException $pdoE) {
//    echo 'An Error occurred: ' . $pdoE->getMessage();
//}