<?php
    include './dbConnection.php';
    
    try {
        $sql = "DELETE FROM memo";
        $dbh->exec($sql);
        
        header("Location: index.php");
        exit;
    } catch (PDOException $e) {
        echo "エラー：" . $e->getMessage();
    }