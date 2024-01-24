<?php
try {
    /*DBへ接続*/
    $host = 'localhost';
    $username = 'user';
    $password = 'pass';
    $dbName = 'memo_php';

    $dbh = new PDO("mysql:host=localhost; dbname=$dbName; charset=utf8", $username, $password);
    // echo '接続成功';
} catch (PDOException $e) {

    echo $e->getMessage();
}