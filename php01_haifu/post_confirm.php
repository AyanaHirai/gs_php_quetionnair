// POSTを受け取る
// POSTの場合はパスワードも送ってみる。
// POSTであればURLに詳細が反映されない。基本GETではなくPOST使う

<?php
$name = $_POST['name'];
$dish = $_POST['dish'];
$main = $_POST['main'];
$request = $_POST['request'];

?>

<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    <p>お名前：<?= $name ?> </p>
    <p>ジャンル：<?= $dish ?> </p>
    <p>メイン：<?= $main ?> </p>
    <p>その他リクエスト：<?= $request ?> </p>

    <!-- パスワード： -->
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
