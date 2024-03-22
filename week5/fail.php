<html>
<head>
    <title>登入失敗</title>
</head>
<body>
    <meta charset="utf-8">
    <?php
    echo "登入失敗<br/>";
    echo "3秒後回到登入畫面...";
    header("Refresh:2;url=login.php");
    ?>
</body>
</html>
