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
require('connect_db.php');
session_start();

$name = $_SESSION['name'];

$sql = sprintf('select * from haihu where name="' . $_SESSION['name'] . '"');
$data = mysql_query($sql) or die(mysql_error());

echo '<dl>';
while($view = mysql_fetch_assoc($data)){
	$kyoku = explode(',', $view['kyoku']);
	$hp = explode(',', $view['hp']);
	$th = explode(',', $view['th']);

	echo '<dt>日時</dt><dd>' . $view['udate'] . '</dd>';

	echo '<dt>局</dt><dd>';
	echo $kyoku[0] . ', ' . $kyoku[1] . '本場';
	echo '</dd>';

	echo '<dt>ドラ</dt><dd>' . $view['dora'] . '</dd>';

	echo '<dt>配牌</dt><dd>';
		for($i=0; $i<count($hp); $i++){
			echo $hp[$i];
		}
	echo '</dd>';

	echo '<dt>手牌</dt><dd>';
		for($i=0; $i<count($th); $i++){
			echo $th[$i];
		}
	echo '</dd>';

	echo '<dt>あがり牌</dt><dd>' . $view['last'] . '</dd>';
	echo '<dt>あがり方</dt><dd>' . $view['io'] . '</dd><br><hr>';
}
echo '</dl>';

echo '<br><a href="home.php">ホームへ戻る</a>';
?>
  </body>
</html>
