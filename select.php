<?php

    if (isset($_POST["search_keyword"]) && (!empty($_POST["search_keyword"]))){
        
        $keyword = '%' . $_POST['search_keyword'] . '%';
        $stmt = $dbh->prepare("SELECT * FROM memo WHERE body LIKE :keyword");
        $stmt->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $stmt->execute();
        $memo_list = $stmt->fetchAll();
        
    } else{
        
        $sql = "SELECT * FROM memo";
        $memo_list = $dbh->query($sql);
    }