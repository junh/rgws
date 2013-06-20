<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1" />
    <link rel="stylesheet" media="all" type="text/css" href="pc.css" />
    <link rel="stylesheet" media="all" type="text/css" href="smart.css" />
    <script src="rgws.js"></script>
  </head>
  <body>
<?php
session_start();

$name = $_SESSION['name'];
$kyoku = $_SESSION['kyoku'];
$honba = $_SESSION['honba'];

if(empty($honba)) {
$honba = 0;
}

$dora = $_SESSION['dora'];
$haipai = $_SESSION['haipai'];
$tehai = $_SESSION['tehai'];
$last = $_POST['last'];
$io = $_POST['io'];

$kyohon = $kyoku . ',' . $honba;

$haipai = rtrim($haipai, ",");
$tehai = rtrim($tehai, ",");

echo $name . ' さんの牌譜データです。<br><br>';
echo 'この局は ' . $kyoku . ' ' . $honba . '本場 です。<br>';
echo 'ドラは ' . $dora . 'です。<br>';
echo '配牌は ' . $haipai . ' です。<br>';
echo '手牌は ' . $tehai . ' です。<br>';

if(!empty($last)) {
echo 'あがり牌は ' . $last . ' です。<br>';
echo 'あがり方は ' . $io . ' あがりです。<br><br>';
}

echo '以上の内容をデータベースに登録しました。<br><br>';
echo '<a href="home.php">ホームへ戻る</a>｜<a href="insert.php">続けて入力</a>';

require('connect_db.php');

$sql = sprintf('insert into haihu set name="%s", kyoku="%s", dora="%s", hp="%s", th="%s", last="%s", io="%s", udate=NOW()',
	mysql_real_escape_string($name),
	mysql_real_escape_string($kyohon),
	mysql_real_escape_string($dora),
	mysql_real_escape_string($haipai),
	mysql_real_escape_string($tehai),
	mysql_real_escape_string($last),
	mysql_real_escape_string($io));

mysql_query($sql) or die('入力に失敗しました: ' . mysql_error());
?>
  </body>
</html>
