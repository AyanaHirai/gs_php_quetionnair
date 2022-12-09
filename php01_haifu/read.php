
<html>

<head>
    <meta charset="UTF-8">
    <style>
        body {
            background-color: #add8e6;
        }
        div {
            background-color: #fff;
            width: 500px;
            margin: 10px;
        }
        h2 {
            color: white;
        }

    </style>

    <title>アンケート結果一覧</title>

</head>

<body>
    <h2>アンケート結果</h2>

<?php
// ファイルを開く。モードは'r' = 読み込みのみでオープン。
$openFile = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)) {
    echo '<div class="dinner">';
    echo nl2br($str);
    echo '</div>';
};

fclose($openFile);

?> 

</body>

</html>
