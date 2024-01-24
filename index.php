<?php
    // include dirname(__FILE__) . '/dbConnection.php';
    include './dbConnection.php';
    // include dirname(__FILE__) . '/select.php';
    include './select.php';
    // echo 'Webサーバーが起動しています！';
?>

<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css" type="text/css" />
    <title>メモ帳</title>
</head>
<body>
    <div class="container">
        <div class="memo_area">
            <div class="memo_form">
                <h2>メモを追加</h2>
                <form action="">
                    <input class="memo_text" type="text" name="" id="">
                    <input type="submit" value="追加">
                </form>
            </div>
            <div class="memo_show">
                <?php foreach($memo_list as $memo): ?>
                <div class="memo_item">
                    <div class="memo_title">
                        <time><?php echo $memo['date'] ?></time>
                        <p><?php echo $memo['body'] ?></p>
                    </div>
                    <div class="btn_area">
                        <div class="edit_form">
                            <form action="">
                                <input type="submit" value="編集">
                                </form>
                                </div>
                                <div class="del_area">
                                    <form action="">
                                        <input type="submit" value="削除">
                                        </form>
                                </div>
                    </div>
                </div>
                <?php endforeach; ?></div>
        </div>
    </div>
</body>
</html>