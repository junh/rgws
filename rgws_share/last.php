<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1" />
    <link rel="stylesheet" media="all" type="text/css" href="pc.css" />
    <link rel="stylesheet" media="all" type="text/css" href="smart.css" />
    <script src="rgws.js"></script>
  </head>
  <body>
<div name="form">
<?php
session_start();

$_SESSION['tehai'] = $_POST['tehai'];
?>
<form action="result.php" method="post">
<dl>
<dt>あがり牌 <input type="button" onClick="resetLast()" value="リセット" /></dt>
<dd><input type="hidden" name="last" id="last" /></dd>
<dd>
選択された牌：
<div id="lastView"><img src="img/ura.gif" style="visibility: hidden" /></div><hr>
<dd>
<img src="img/p1.gif" onclick="selectLast('<img src=\'img/p1.gif\' />', '<img src=\'img/p1.gif\' />')" />
<img src="img/p2.gif" onclick="selectLast('<img src=\'img/p2.gif\' />', '<img src=\'img/p2.gif\' />')" />
<img src="img/p3.gif" onclick="selectLast('<img src=\'img/p3.gif\' />', '<img src=\'img/p3.gif\' />')" />
<img src="img/p4.gif" onclick="selectLast('<img src=\'img/p4.gif\' />', '<img src=\'img/p4.gif\' />')" />
<img src="img/p5.gif" onclick="selectLast('<img src=\'img/p5.gif\' />', '<img src=\'img/p5.gif\' />')" />
<img src="img/p6.gif" onclick="selectLast('<img src=\'img/p6.gif\' />', '<img src=\'img/p6.gif\' />')" />
<img src="img/p7.gif" onclick="selectLast('<img src=\'img/p7.gif\' />', '<img src=\'img/p7.gif\' />')" />
<img src="img/p8.gif" onclick="selectLast('<img src=\'img/p8.gif\' />', '<img src=\'img/p8.gif\' />')" />
<img src="img/p9.gif" onclick="selectLast('<img src=\'img/p9.gif\' />', '<img src=\'img/p9.gif\' />')" />
<img src="img/p5a.gif" onclick="selectLast('<img src=\'img/p5a.gif\' />', '<img src=\'img/p5a.gif\' />')" />
</dd>
<dd>
<img src="img/s1.gif" onclick="selectLast('<img src=\'img/s1.gif\' />', '<img src=\'img/s1.gif\' />')" />
<img src="img/s2.gif" onclick="selectLast('<img src=\'img/s2.gif\' />', '<img src=\'img/s2.gif\' />')" />
<img src="img/s3.gif" onclick="selectLast('<img src=\'img/s3.gif\' />', '<img src=\'img/s3.gif\' />')" />
<img src="img/s4.gif" onclick="selectLast('<img src=\'img/s4.gif\' />', '<img src=\'img/s4.gif\' />')" />
<img src="img/s5.gif" onclick="selectLast('<img src=\'img/s5.gif\' />', '<img src=\'img/s5.gif\' />')" />
<img src="img/s6.gif" onclick="selectLast('<img src=\'img/s6.gif\' />', '<img src=\'img/s6.gif\' />')" />
<img src="img/s7.gif" onclick="selectLast('<img src=\'img/s7.gif\' />', '<img src=\'img/s7.gif\' />')" />
<img src="img/s8.gif" onclick="selectLast('<img src=\'img/s8.gif\' />', '<img src=\'img/s8.gif\' />')" />
<img src="img/s9.gif" onclick="selectLast('<img src=\'img/s9.gif\' />', '<img src=\'img/s9.gif\' />')" />
<img src="img/s5a.gif" onclick="selectLast('<img src=\'img/s5a.gif\' />', '<img src=\'img/s5a.gif\' />')" />
</dd>
<dd>
<img src="img/m1.gif" onclick="selectLast('<img src=\'img/m1.gif\' />', '<img src=\'img/m1.gif\' />')" />
<img src="img/m2.gif" onclick="selectLast('<img src=\'img/m2.gif\' />', '<img src=\'img/m2.gif\' />')" />
<img src="img/m3.gif" onclick="selectLast('<img src=\'img/m3.gif\' />', '<img src=\'img/m3.gif\' />')" />
<img src="img/m4.gif" onclick="selectLast('<img src=\'img/m4.gif\' />', '<img src=\'img/m4.gif\' />')" />
<img src="img/m5.gif" onclick="selectLast('<img src=\'img/m5.gif\' />', '<img src=\'img/m5.gif\' />')" />
<img src="img/m6.gif" onclick="selectLast('<img src=\'img/m6.gif\' />', '<img src=\'img/m6.gif\' />')" />
<img src="img/m7.gif" onclick="selectLast('<img src=\'img/m7.gif\' />', '<img src=\'img/m7.gif\' />')" />
<img src="img/m8.gif" onclick="selectLast('<img src=\'img/m8.gif\' />', '<img src=\'img/m8.gif\' />')" />
<img src="img/m9.gif" onclick="selectLast('<img src=\'img/m9.gif\' />', '<img src=\'img/m9.gif\' />')" />
<img src="img/m5a.gif" onclick="selectLast('<img src=\'img/m5a.gif\' />', '<img src=\'img/m5a.gif\' />')" />
</dd>
<dd>
<img src="img/ton.gif" onclick="selectLast('<img src=\'img/ton.gif\' />', '<img src=\'img/ton.gif\' />')" />
<img src="img/nan.gif" onclick="selectLast('<img src=\'img/nan.gif\' />', '<img src=\'img/nan.gif\' />')" />
<img src="img/sha.gif" onclick="selectLast('<img src=\'img/sha.gif\' />', '<img src=\'img/sha.gif\' />')" />
<img src="img/pei.gif" onclick="selectLast('<img src=\'img/pei.gif\' />', '<img src=\'img/pei.gif\' />')" />
<img src="img/haku.gif" onclick="selectLast('<img src=\'img/haku.gif\' />', '<img src=\'img/haku.gif\' />')" />
<img src="img/hatsu.gif" onclick="selectLast('<img src=\'img/hatsu.gif\' />', '<img src=\'img/hatsu.gif\' />')" />
<img src="img/chun.gif" onclick="selectLast('<img src=\'img/chun.gif\' />', '<img src=\'img/chun.gif\' />')" />
</dd>

<br><dt>ツモ／ロン <input type="reset" value="クリア" /></dt>
<dd>
  <label for="tsumo">ツモ</label>
  <input type="radio" name="io" value="ツモ" />
</dd>
<dd>
  <label for="ron">ロン</label>
  <input type="radio" name="io" value="ロン" /></dd>
</dl>
<input type="submit" value="確認画面へ" />
</form>
</div>
<body>
</html>
