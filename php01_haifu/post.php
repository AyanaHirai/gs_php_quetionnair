<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }

        .dinner {
            display: flex;
            flex-flow: column;
        }
        .send {
            margin: 20px 0;
            background: #afeeee;
        }
    </style>
    <title>POST練習</title>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>サンプルフォームに必要な情報を入れる(POST)</li>
            <li>(演習)password欄を作って受け取る。</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <P>※post_confirm.phpにpostで送ってください。</P>


    <form action="write.php" method="post">

    <h1>お夕飯献立アンケート</h1>
        <div class="dinner">
            回答者: <input type="text" size="20" name="name" style="width:200px;">
            ジャンル: <input type="text" size="20" name="dish" style="width:200px;">
            メイン: <input type="text" size="20" name="main" style="width:200px;">
            その他リクエスト: <input type="text" size="20" name="request" style="width:200px;">
        </div>
        <!-- パスワード欄を追加してみる。 -->
        <input type="submit" value="送信" class="send">
    </form>
</body>

</html>
