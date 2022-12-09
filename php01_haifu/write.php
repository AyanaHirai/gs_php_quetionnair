<?php
$name = $_POST['name'];
$dish = $_POST['dish'];
$main = $_POST['main'];
$request = $_POST['request'];

// echo $name;
// echo $dish;
// echo $main;
// echo $request;

// ファイルに書き込み

$file = fopen('data/data.txt', 'a');

fwrite($file, $name . "：" . $dish . " / " . $main . " / " . $request . "\n");
// fwrite($file, $dish . "\n");
// fwrite($file, $main . "\n");
// fwrite($file, $request . "\n");

fclose($file);

// //文字作成

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
