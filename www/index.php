<?php


$dbhost = 'mysql';
$db = 'test';
$dbuser = 'root';
$dbpass = 'root';



try{
    $dsn = "mysql:host=$dbhost; dbname=$db";
    $dbh = new PDO($dsn, $dbuser, $dbpass);

    $sth = $dbh->prepare("SELECT * FROM `tasks` WHERE `id` = ?");
    $sth->execute(array('1'));
    $array = $sth->fetch(PDO::FETCH_ASSOC);
    echo '<pre>';
    print_r($array);
    echo '</pre>';

}
catch (PDOException $e) {
    echo $e->getMessage();
}



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