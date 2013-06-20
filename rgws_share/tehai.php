<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1" />
    <link rel="stylesheet" media="all" type="text/css" href="pc.css" />
    <link rel="stylesheet" media="all" type="text/css" href="smart.css" />
    <script src="rgws.js"></script>
    <style>
      #tab1 {display: block:}
      #tab2 {display: none;}
    </style>
  </head>
  <body>
<div name="form">
<?php
session_start();

$_SESSION['haipai'] = $_POST['haipai'];
?>
<form action="last.php" method="post">
<dl>
<dt>手牌 <input type="button" onClick="resetTehai()" value="リセット" /></dt>
<dd><input type="hidden" name="tehai" id="tehai" /></dd>
選択された牌：
<div id="tehaiView"><img src="img/ura.gif" style="visibility: hidden" /></div><hr>
<dd>
<span onclick="changeTab1();">|タブ１|</span>
<span onclick="changeTab2();">|タブ２|</span><br>
</dd>
<div id="tab1">
<dd>
<img src="img/p1.gif" onclick="selectTehai('<img src=\'img/p1.gif\' />,', '<img src=\'img/p1.gif\' />')" />
<img src="img/p2.gif" onclick="selectTehai('<img src=\'img/p2.gif\' />,', '<img src=\'img/p2.gif\' />')" />
<img src="img/p3.gif" onclick="selectTehai('<img src=\'img/p3.gif\' />,', '<img src=\'img/p3.gif\' />')" />
<img src="img/p4.gif" onclick="selectTehai('<img src=\'img/p4.gif\' />,', '<img src=\'img/p4.gif\' />')" />
<img src="img/p5.gif" onclick="selectTehai('<img src=\'img/p5.gif\' />,', '<img src=\'img/p5.gif\' />')" />
<img src="img/p6.gif" onclick="selectTehai('<img src=\'img/p6.gif\' />,', '<img src=\'img/p6.gif\' />')" />
<img src="img/p7.gif" onclick="selectTehai('<img src=\'img/p7.gif\' />,', '<img src=\'img/p7.gif\' />')" />
<img src="img/p8.gif" onclick="selectTehai('<img src=\'img/p8.gif\' />,', '<img src=\'img/p8.gif\' />')" />
<img src="img/p9.gif" onclick="selectTehai('<img src=\'img/p9.gif\' />,', '<img src=\'img/p9.gif\' />')" />
<img src="img/p5a.gif" onclick="selectTehai('<img src=\'img/p5a.gif\' />,', '<img src=\'img/p5a.gif\' />')" />
</dd>
<dd>
<img src="img/s1.gif" onclick="selectTehai('<img src=\'img/s1.gif\' />,', '<img src=\'img/s1.gif\' />')" />
<img src="img/s2.gif" onclick="selectTehai('<img src=\'img/s2.gif\' />,', '<img src=\'img/s2.gif\' />')" />
<img src="img/s3.gif" onclick="selectTehai('<img src=\'img/s3.gif\' />,', '<img src=\'img/s3.gif\' />')" />
<img src="img/s4.gif" onclick="selectTehai('<img src=\'img/s4.gif\' />,', '<img src=\'img/s4.gif\' />')" />
<img src="img/s5.gif" onclick="selectTehai('<img src=\'img/s5.gif\' />,', '<img src=\'img/s5.gif\' />')" />
<img src="img/s6.gif" onclick="selectTehai('<img src=\'img/s6.gif\' />,', '<img src=\'img/s6.gif\' />')" />
<img src="img/s7.gif" onclick="selectTehai('<img src=\'img/s7.gif\' />,', '<img src=\'img/s7.gif\' />')" />
<img src="img/s8.gif" onclick="selectTehai('<img src=\'img/s8.gif\' />,', '<img src=\'img/s8.gif\' />')" />
<img src="img/s9.gif" onclick="selectTehai('<img src=\'img/s9.gif\' />,', '<img src=\'img/s9.gif\' />')" />
<img src="img/s5a.gif" onclick="selectTehai('<img src=\'img/s5a.gif\' />,', '<img src=\'img/s5a.gif\' />')" />
</dd>
<dd>
<img src="img/m1.gif" onclick="selectTehai('<img src=\'img/m1.gif\' />,', '<img src=\'img/m1.gif\' />')" />
<img src="img/m2.gif" onclick="selectTehai('<img src=\'img/m2.gif\' />,', '<img src=\'img/m2.gif\' />')" />
<img src="img/m3.gif" onclick="selectTehai('<img src=\'img/m3.gif\' />,', '<img src=\'img/m3.gif\' />')" />
<img src="img/m4.gif" onclick="selectTehai('<img src=\'img/m4.gif\' />,', '<img src=\'img/m4.gif\' />')" />
<img src="img/m5.gif" onclick="selectTehai('<img src=\'img/m5.gif\' />,', '<img src=\'img/m5.gif\' />')" />
<img src="img/m6.gif" onclick="selectTehai('<img src=\'img/m6.gif\' />,', '<img src=\'img/m6.gif\' />')" />
<img src="img/m7.gif" onclick="selectTehai('<img src=\'img/m7.gif\' />,', '<img src=\'img/m7.gif\' />')" />
<img src="img/m8.gif" onclick="selectTehai('<img src=\'img/m8.gif\' />,', '<img src=\'img/m8.gif\' />')" />
<img src="img/m9.gif" onclick="selectTehai('<img src=\'img/m9.gif\' />,', '<img src=\'img/m9.gif\' />')" />
<img src="img/m5a.gif" onclick="selectTehai('<img src=\'img/m5a.gif\' />,', '<img src=\'img/m5a.gif\' />')" />
</dd>
<dd>
<img src="img/ton.gif" onclick="selectTehai('<img src=\'img/ton.gif\' />,', '<img src=\'img/ton.gif\' />')" />
<img src="img/nan.gif" onclick="selectTehai('<img src=\'img/nan.gif\' />,', '<img src=\'img/nan.gif\' />')" />
<img src="img/sha.gif" onclick="selectTehai('<img src=\'img/sha.gif\' />,', '<img src=\'img/sha.gif\' />')" />
<img src="img/pei.gif" onclick="selectTehai('<img src=\'img/pei.gif\' />,', '<img src=\'img/pei.gif\' />')" />
<img src="img/haku.gif" onclick="selectTehai('<img src=\'img/haku.gif\' />,', '<img src=\'img/haku.gif\' />')" />
<img src="img/hatsu.gif" onclick="selectTehai('<img src=\'img/hatsu.gif\' />,', '<img src=\'img/hatsu.gif\' />')" />
<img src="img/chun.gif" onclick="selectTehai('<img src=\'img/chun.gif\' />,', '<img src=\'img/chun.gif\' />')" />
</dd>
</div>
<div id="tab2">
<dd>
<img src="img/yp1.gif" onclick="selectTehai('<img src=\'img/yp1.gif\' />,', '<img src=\'img/yp1.gif\' />')" />
<img src="img/yp2.gif" onclick="selectTehai('<img src=\'img/yp2.gif\' />,', '<img src=\'img/yp2.gif\' />')" />
<img src="img/yp3.gif" onclick="selectTehai('<img src=\'img/yp3.gif\' />,', '<img src=\'img/yp3.gif\' />')" />
<img src="img/yp4.gif" onclick="selectTehai('<img src=\'img/yp4.gif\' />,', '<img src=\'img/yp4.gif\' />')" />
<img src="img/yp5.gif" onclick="selectTehai('<img src=\'img/yp5.gif\' />,', '<img src=\'img/yp5.gif\' />')" />
<img src="img/yp6.gif" onclick="selectTehai('<img src=\'img/yp6.gif\' />,', '<img src=\'img/yp6.gif\' />')" />
<img src="img/yp7.gif" onclick="selectTehai('<img src=\'img/yp7.gif\' />,', '<img src=\'img/yp7.gif\' />')" />
<img src="img/yp8.gif" onclick="selectTehai('<img src=\'img/yp8.gif\' />,', '<img src=\'img/yp8.gif\' />')" />
<img src="img/yp9.gif" onclick="selectTehai('<img src=\'img/yp9.gif\' />,', '<img src=\'img/yp9.gif\' />')" />
<img src="img/yp5a.gif" onclick="selectTehai('<img src=\'img/yp5a.gif\' />,', '<img src=\'img/yp5a.gif\' />')" />
</dd>
<dd>
<img src="img/ys1.gif" onclick="selectTehai('<img src=\'img/ys1.gif\' />,', '<img src=\'img/ys1.gif\' />')" />
<img src="img/ys2.gif" onclick="selectTehai('<img src=\'img/ys2.gif\' />,', '<img src=\'img/ys2.gif\' />')" />
<img src="img/ys3.gif" onclick="selectTehai('<img src=\'img/ys3.gif\' />,', '<img src=\'img/ys3.gif\' />')" />
<img src="img/ys4.gif" onclick="selectTehai('<img src=\'img/ys4.gif\' />,', '<img src=\'img/ys4.gif\' />')" />
<img src="img/ys5.gif" onclick="selectTehai('<img src=\'img/ys5.gif\' />,', '<img src=\'img/ys5.gif\' />')" />
<img src="img/ys6.gif" onclick="selectTehai('<img src=\'img/ys6.gif\' />,', '<img src=\'img/ys6.gif\' />')" />
<img src="img/ys7.gif" onclick="selectTehai('<img src=\'img/ys7.gif\' />,', '<img src=\'img/ys7.gif\' />')" />
<img src="img/ys8.gif" onclick="selectTehai('<img src=\'img/ys8.gif\' />,', '<img src=\'img/ys8.gif\' />')" />
<img src="img/ys9.gif" onclick="selectTehai('<img src=\'img/ys9.gif\' />,', '<img src=\'img/ys9.gif\' />')" />
<img src="img/ys5a.gif" onclick="selectTehai('<img src=\'img/ys5a.gif\' />,', '<img src=\'img/ys5a.gif\' />')" />
</dd>
<dd>
<img src="img/ym1.gif" onclick="selectTehai('<img src=\'img/ym1.gif\' />,', '<img src=\'img/ym1.gif\' />')" />
<img src="img/ym2.gif" onclick="selectTehai('<img src=\'img/ym2.gif\' />,', '<img src=\'img/ym2.gif\' />')" />
<img src="img/ym3.gif" onclick="selectTehai('<img src=\'img/ym3.gif\' />,', '<img src=\'img/ym3.gif\' />')" />
<img src="img/ym4.gif" onclick="selectTehai('<img src=\'img/ym4.gif\' />,', '<img src=\'img/ym4.gif\' />')" />
<img src="img/ym5.gif" onclick="selectTehai('<img src=\'img/ym5.gif\' />,', '<img src=\'img/ym5.gif\' />')" />
<img src="img/ym6.gif" onclick="selectTehai('<img src=\'img/ym6.gif\' />,', '<img src=\'img/ym6.gif\' />')" />
<img src="img/ym7.gif" onclick="selectTehai('<img src=\'img/ym7.gif\' />,', '<img src=\'img/ym7.gif\' />')" />
<img src="img/ym8.gif" onclick="selectTehai('<img src=\'img/ym8.gif\' />,', '<img src=\'img/ym8.gif\' />')" />
<img src="img/ym9.gif" onclick="selectTehai('<img src=\'img/ym9.gif\' />,', '<img src=\'img/ym9.gif\' />')" />
<img src="img/ym5a.gif" onclick="selectTehai('<img src=\'img/ym5a.gif\' />,', '<img src=\'img/ym5a.gif\' />')" />
</dd>
<dd>
<img src="img/yton.gif" onclick="selectTehai('<img src=\'img/yton.gif\' />,', '<img src=\'img/yton.gif\' />')" />
<img src="img/ynan.gif" onclick="selectTehai('<img src=\'img/ynan.gif\' />,', '<img src=\'img/ynan.gif\' />')" />
<img src="img/ysha.gif" onclick="selectTehai('<img src=\'img/ysha.gif\' />,', '<img src=\'img/ysha.gif\' />')" />
<img src="img/ypei.gif" onclick="selectTehai('<img src=\'img/ypei.gif\' />,', '<img src=\'img/ypei.gif\' />')" />
<img src="img/yhaku.gif" onclick="selectTehai('<img src=\'img/yhaku.gif\' />,', '<img src=\'img/yhaku.gif\' />')" />
<img src="img/yhatsu.gif" onclick="selectTehai('<img src=\'img/yhatsu.gif\' />,', '<img src=\'img/yhatsu.gif\' />')" />
<img src="img/ychun.gif" onclick="selectTehai('<img src=\'img/ychun.gif\' />,', '<img src=\'img/ychun.gif\' />')" />
</dd>
</div>
</dl>
<input type="submit" value="あがり入力へ" onclick="return checkHai()" />
</form>
</div>
</body>
</html>
