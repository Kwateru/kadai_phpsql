<?php
    //コメントの内容をDBに追加する
    if (isset($_POST["body"]) && (!empty($_POST["body"]))) {

        $body = $_POST["body"];
        $date = date("Y/m/d H:i:s");

        /*sql文*/
        $sql = "INSERT INTO memo(
            body, date
        )VALUES(
            '$body', '$date'
        )";

        /*bindValue関数でバインドする*/
        $result = $dbh->prepare($sql);
        $result->execute();
    }