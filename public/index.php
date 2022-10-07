<?php
require_once(__DIR__ . '/../src/db_connect.php');

if (isset($_POST['action_type']) && $_POST['action_type']) {
  if ($_POST['action_type'] === 'insert') {
    require(__DIR__ . '/../src/insert_message.php');
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex"/>
    <title>ひとこと掲示板</title>
    <link rel="stylesheet" href="./asset/main.css"/>
</head>

<body>
    <div class="page-cver">
        <p class="page-title">ひとこと掲示版</p>
        <hr class="page-divider" />
        <div class="form-cover">
            <form action="/" method="post">
                <div class="form-input-title">投稿者ニックネーム</div>
                <input type="text" name="author_name" maxlength="40" value="" class="input-author-name" />
                <div class="form-input-error">
                </div>
                <div class="form-input-title">投稿内容<small>(必須)</small></div>
                <textarea name="message" class="input-message"></textarea>
                <div class="form-input-error">
                </div>
                <input type="hidden" name="action_type" value="insert"/>
                <button type="submit" class="input-submit-button">投稿する</button>
            </form>
        </div>

        <hr class="page-divider" />
            <div class="message-list-cover">
                
                
            </div>
        <hr class="page-divide3er" />
        </div>
</body>
</html>