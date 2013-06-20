<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1" />
    <link rel="stylesheet" media="all" type="text/css" href="pc.css" />
    <link rel="stylesheet" media="all" type="text/css" href="smart.css" />
    <link rel="stylesheet" type="text/css" href="rgws.css" />
    <title>RG麻雀データベース</title>
    <script src="rgws.js"></script>
  </head>
  <body>
<?php
session_start();
session_destroy();
?>
<div align="center">
RG麻雀データベースです。<br>
麻雀の対局結果を保存できます。<br><br><hr>
<form action="redirect.php" method="post">
RGネーム：<input type="text" name="name" /><br>
<input type="submit" value="ログイン" />
</form>
</div>
  </body>
</html>
