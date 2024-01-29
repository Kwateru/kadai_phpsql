<?php
include './dbConnection.php';
if (isset($_POST["edit_id"])) {

    $edit_id = $_POST["edit_id"];

    /*sql文*/
    $sql = "SELECT * FROM memo WHERE id = '$edit_id'";

    $memo_info = $dbh->query($sql)->fetch();
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, 
　　　　　　　maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>メモ帳 | 編集</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<div class="memo_form">
    <h2>メモを追加</h2>
    <form action="index.php" method="post">
        <input class="memo_text" 
　　　　　　type="text" name="edit_body" value="<?php echo $memo_info['body'] ?>">
        <input class="memo_id" 
　　　　　　type="hidden" name="memo_id" value="<?php echo $memo_info['id'] ?>">
        <input type="submit" value="追加">
    </form>
</div>
</body>

</html>