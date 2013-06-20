<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1" />
    <link rel="stylesheet" media="all" type="text/css" href="pc.css" />
    <link rel="stylesheet" media="all" type="text/css" href="smart.css" />
    <title>RG麻雀データベース</title>
    <script src="rgws.js"></script>
  </head>
  <body>
<div id="header" align="center">
<?php
session_start();

echo 'ようこそ ' . $_SESSION['name'] . ' さん';
?>
</div><hr>
<div id="main" align="center">
<br>[メニュー]<br><br>
# <a href="kyoku.php">牌譜の入力へ</a><br>
# <a href="view.php">過去の牌譜を見る</a><br>
<br><br>
# <a href="index.php">ログアウト</a>
</div>
  </body>
</html>
