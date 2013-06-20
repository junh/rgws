<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  </head>
  <body>
<?php
//$link = mysql_connect('dhcp-143-201.sfc.wide.ad.jp','neco','nextneco');
$link = mysql_connect('localhost','root','larcy1219');
if (!$link) {
    die('接続できません: ' . mysql_error());
}

$sql = 'CREATE DATABASE rgws';
if (mysql_query($sql, $link)) {
    echo "データベースの作成に成功しました\n";
} else {
    echo 'データベースの作成に失敗しました: ' . mysql_error() . "\n";
}
?>
  </body>
</html>
