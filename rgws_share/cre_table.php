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

mysql_select_db("rgws") or die();

$sql = 'CREATE TABLE haihu (
id int not null auto_increment, name varchar(50),
kyoku text, hp text, th text,
last varchar(30), io varchar(10), hash varchar(30),
udate datetime, primary key(id)
)';

if (mysql_query($sql, $link)) {
    echo "テーブルの作成に成功しました\n";
} else {
    echo 'テーブルの作成に失敗しました: ' . mysql_error() . "\n";
}
?>
  </body>
</html>
