<?php
    // include dirname(__FILE__) . '/dbConnection.php';
    include './dbConnection.php';
    // include dirname(__FILE__) . '/select.php';
    include './select.php';
    include './insert.php';
    include './delete.php';
    include './update.php';
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
                <form method="post" action="index.php">
                    <input class="memo_text" type="text" name="body">
                    <input type="submit" value="追加">
                </form>
                
                <!--検索機能-->
                <h2>メモ検索</h2>
                <form method="post" action="index.php">
                    <input class="memo_text" type="text" name="search_keyword">
                    <input type="submit" value="検索">
                </form>
                
                <!--一括削除-->
                <h2>一括削除</h2>
                <form method="post" action="delete_all.php">
                    <input type="submit" value="一括削除" onclick="return confirm('本当にすべてのメモを削除しますか？');">
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
                            <form action="edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $memo['id'] ?>">
                                <input type="submit" value="編集">
                                </form>
                                </div>
                                <div class="del_area">
                                    <form method="post" action="index.php">
                                        <input type="hidden" name="delete_id" value="<?php echo $memo['id'] ?>">
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