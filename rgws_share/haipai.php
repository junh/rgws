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

$_SESSION['kyoku'] = $_POST['kyoku'];
$_SESSION['honba'] = $_POST['honba'];
$_SESSION['dora'] = $_POST['dora'];
?>
<form action="tehai.php" method="post">
<dl>
<dt>配牌 <input type="button" onClick="resetHaipai()" value="リセット" /></dt>
<dd><input type="hidden" name="haipai" id="haipai" /></dd>
選択された牌：
<div id="haipaiView"><img src="img/ura.gif" style="visibility: hidden" /></div><hr>
<dd>
<img src="img/p1.gif" onclick="selectHaipai('<img src=\'img/p1.gif\' />,', '<img src=\'img/p1.gif\' />')" />
<img src="img/p2.gif" onclick="selectHaipai('<img src=\'img/p2.gif\' />,', '<img src=\'img/p2.gif\' />')" />
<img src="img/p3.gif" onclick="selectHaipai('<img src=\'img/p3.gif\' />,', '<img src=\'img/p3.gif\' />')" />
<img src="img/p4.gif" onclick="selectHaipai('<img src=\'img/p4.gif\' />,', '<img src=\'img/p4.gif\' />')" />
<img src="img/p5.gif" onclick="selectHaipai('<img src=\'img/p5.gif\' />,', '<img src=\'img/p5.gif\' />')" />
<img src="img/p6.gif" onclick="selectHaipai('<img src=\'img/p6.gif\' />,', '<img src=\'img/p6.gif\' />')" />
<img src="img/p7.gif" onclick="selectHaipai('<img src=\'img/p7.gif\' />,', '<img src=\'img/p7.gif\' />')" />
<img src="img/p8.gif" onclick="selectHaipai('<img src=\'img/p8.gif\' />,', '<img src=\'img/p8.gif\' />')" />
<img src="img/p9.gif" onclick="selectHaipai('<img src=\'img/p9.gif\' />,', '<img src=\'img/p9.gif\' />')" />
<img src="img/p5a.gif" onclick="selectHaipai('<img src=\'img/p5a.gif\' />,', '<img src=\'img/p5a.gif\' />')" />
</dd>
<dd>
<img src="img/s1.gif" onclick="selectHaipai('<img src=\'img/s1.gif\' />,', '<img src=\'img/s1.gif\' />')" />
<img src="img/s2.gif" onclick="selectHaipai('<img src=\'img/s2.gif\' />,', '<img src=\'img/s2.gif\' />')" />
<img src="img/s3.gif" onclick="selectHaipai('<img src=\'img/s3.gif\' />,', '<img src=\'img/s3.gif\' />')" />
<img src="img/s4.gif" onclick="selectHaipai('<img src=\'img/s4.gif\' />,', '<img src=\'img/s4.gif\' />')" />
<img src="img/s5.gif" onclick="selectHaipai('<img src=\'img/s5.gif\' />,', '<img src=\'img/s5.gif\' />')" />
<img src="img/s6.gif" onclick="selectHaipai('<img src=\'img/s6.gif\' />,', '<img src=\'img/s6.gif\' />')" />
<img src="img/s7.gif" onclick="selectHaipai('<img src=\'img/s7.gif\' />,', '<img src=\'img/s7.gif\' />')" />
<img src="img/s8.gif" onclick="selectHaipai('<img src=\'img/s8.gif\' />,', '<img src=\'img/s8.gif\' />')" />
<img src="img/s9.gif" onclick="selectHaipai('<img src=\'img/s9.gif\' />,', '<img src=\'img/s9.gif\' />')" />
<img src="img/s5a.gif" onclick="selectHaipai('<img src=\'img/s5a.gif\' />,', '<img src=\'img/s5a.gif\' />')" />
</dd>
<dd>
<img src="img/m1.gif" onclick="selectHaipai('<img src=\'img/m1.gif\' />,', '<img src=\'img/m1.gif\' />')" />
<img src="img/m2.gif" onclick="selectHaipai('<img src=\'img/m2.gif\' />,', '<img src=\'img/m2.gif\' />')" />
<img src="img/m3.gif" onclick="selectHaipai('<img src=\'img/m3.gif\' />,', '<img src=\'img/m3.gif\' />')" />
<img src="img/m4.gif" onclick="selectHaipai('<img src=\'img/m4.gif\' />,', '<img src=\'img/m4.gif\' />')" />
<img src="img/m5.gif" onclick="selectHaipai('<img src=\'img/m5.gif\' />,', '<img src=\'img/m5.gif\' />')" />
<img src="img/m6.gif" onclick="selectHaipai('<img src=\'img/m6.gif\' />,', '<img src=\'img/m6.gif\' />')" />
<img src="img/m7.gif" onclick="selectHaipai('<img src=\'img/m7.gif\' />,', '<img src=\'img/m7.gif\' />')" />
<img src="img/m8.gif" onclick="selectHaipai('<img src=\'img/m8.gif\' />,', '<img src=\'img/m8.gif\' />')" />
<img src="img/m9.gif" onclick="selectHaipai('<img src=\'img/m9.gif\' />,', '<img src=\'img/m9.gif\' />')" />
<img src="img/m5a.gif" onclick="selectHaipai('<img src=\'img/m5a.gif\' />,', '<img src=\'img/m5a.gif\' />')" />
</dd>
<dd>
<img src="img/ton.gif" onclick="selectHaipai('<img src=\'img/ton.gif\' />,', '<img src=\'img/ton.gif\' />')" />
<img src="img/nan.gif" onclick="selectHaipai('<img src=\'img/nan.gif\' />,', '<img src=\'img/nan.gif\' />')" />
<img src="img/sha.gif" onclick="selectHaipai('<img src=\'img/sha.gif\' />,', '<img src=\'img/sha.gif\' />')" />
<img src="img/pei.gif" onclick="selectHaipai('<img src=\'img/pei.gif\' />,', '<img src=\'img/pei.gif\' />')" />
<img src="img/haku.gif" onclick="selectHaipai('<img src=\'img/haku.gif\' />,', '<img src=\'img/haku.gif\' />')" />
<img src="img/hatsu.gif" onclick="selectHaipai('<img src=\'img/hatsu.gif\' />,', '<img src=\'img/hatsu.gif\' />')" />
<img src="img/chun.gif" onclick="selectHaipai('<img src=\'img/chun.gif\' />,', '<img src=\'img/chun.gif\' />')" />
</dd>
</dl>
<input type="submit" value="手牌入力へ" onclick="return checkHai()" />
</form>
</div>
</body>
</html>
