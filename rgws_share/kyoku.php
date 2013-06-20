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
?>
<form action="haipai.php" method="post">
<dl>
<dt>局</dt>
<dd>
<select name="kyoku">
<option value="東一局">東一局</option>
<option value="東二局">東二局</option>
<option value="東三局">東三局</option>
<option value="東四局">東四局</option>
<option value="南一局">南一局</option>
<option value="南二局">南二局</option>
<option value="南三局">南三局</option>
<option value="南四局">南四局</option>
</select>
<input type="text" name="honba" size="2" maxlength="2">本場
</dd><br>
<dt>ドラ <input type="button" onClick="resetDora()" value="リセット" /></dt>
<dd><input type="hidden" name="dora" id="dora" /></dd>
<dd>
選択された牌：
<dd><div id="doraView"><img src="img/ura.gif" style="visibility: hidden" /></div><hr>
<img src="img/p1.gif" onclick="selectDora('<img src=\'img/p1.gif\' />,', '<img src=\'img/p1.gif\' />')" />
<img src="img/p2.gif" onclick="selectDora('<img src=\'img/p2.gif\' />,', '<img src=\'img/p2.gif\' />')" />
<img src="img/p3.gif" onclick="selectDora('<img src=\'img/p3.gif\' />,', '<img src=\'img/p3.gif\' />')" />
<img src="img/p4.gif" onclick="selectDora('<img src=\'img/p4.gif\' />,', '<img src=\'img/p4.gif\' />')" />
<img src="img/p5.gif" onclick="selectDora('<img src=\'img/p5.gif\' />,', '<img src=\'img/p5.gif\' />')" />
<img src="img/p6.gif" onclick="selectDora('<img src=\'img/p6.gif\' />,', '<img src=\'img/p6.gif\' />')" />
<img src="img/p7.gif" onclick="selectDora('<img src=\'img/p7.gif\' />,', '<img src=\'img/p7.gif\' />')" />
<img src="img/p8.gif" onclick="selectDora('<img src=\'img/p8.gif\' />,', '<img src=\'img/p8.gif\' />')" />
<img src="img/p9.gif" onclick="selectDora('<img src=\'img/p9.gif\' />,', '<img src=\'img/p9.gif\' />')" />
<img src="img/p5a.gif" onclick="selectDora('<img src=\'img/p5a.gif\' />,', '<img src=\'img/p5a.gif\' />')" />
</dd>
<dd>
<img src="img/s1.gif" onclick="selectDora('<img src=\'img/s1.gif\' />,', '<img src=\'img/s1.gif\' />')" />
<img src="img/s2.gif" onclick="selectDora('<img src=\'img/s2.gif\' />,', '<img src=\'img/s2.gif\' />')" />
<img src="img/s3.gif" onclick="selectDora('<img src=\'img/s3.gif\' />,', '<img src=\'img/s3.gif\' />')" />
<img src="img/s4.gif" onclick="selectDora('<img src=\'img/s4.gif\' />,', '<img src=\'img/s4.gif\' />')" />
<img src="img/s5.gif" onclick="selectDora('<img src=\'img/s5.gif\' />,', '<img src=\'img/s5.gif\' />')" />
<img src="img/s6.gif" onclick="selectDora('<img src=\'img/s6.gif\' />,', '<img src=\'img/s6.gif\' />')" />
<img src="img/s7.gif" onclick="selectDora('<img src=\'img/s7.gif\' />,', '<img src=\'img/s7.gif\' />')" />
<img src="img/s8.gif" onclick="selectDora('<img src=\'img/s8.gif\' />,', '<img src=\'img/s8.gif\' />')" />
<img src="img/s9.gif" onclick="selectDora('<img src=\'img/s9.gif\' />,', '<img src=\'img/s9.gif\' />')" />
<img src="img/s5a.gif" onclick="selectDora('<img src=\'img/s5a.gif\' />,', '<img src=\'img/s5a.gif\' />')" />
</dd>
<dd>
<img src="img/m1.gif" onclick="selectDora('<img src=\'img/m1.gif\' />,', '<img src=\'img/m1.gif\' />')" />
<img src="img/m2.gif" onclick="selectDora('<img src=\'img/m2.gif\' />,', '<img src=\'img/m2.gif\' />')" />
<img src="img/m3.gif" onclick="selectDora('<img src=\'img/m3.gif\' />,', '<img src=\'img/m3.gif\' />')" />
<img src="img/m4.gif" onclick="selectDora('<img src=\'img/m4.gif\' />,', '<img src=\'img/m4.gif\' />')" />
<img src="img/m5.gif" onclick="selectDora('<img src=\'img/m5.gif\' />,', '<img src=\'img/m5.gif\' />')" />
<img src="img/m6.gif" onclick="selectDora('<img src=\'img/m6.gif\' />,', '<img src=\'img/m6.gif\' />')" />
<img src="img/m7.gif" onclick="selectDora('<img src=\'img/m7.gif\' />,', '<img src=\'img/m7.gif\' />')" />
<img src="img/m8.gif" onclick="selectDora('<img src=\'img/m8.gif\' />,', '<img src=\'img/m8.gif\' />')" />
<img src="img/m9.gif" onclick="selectDora('<img src=\'img/m9.gif\' />,', '<img src=\'img/m9.gif\' />')" />
<img src="img/m5a.gif" onclick="selectDora('<img src=\'img/m5a.gif\' />,', '<img src=\'img/m5a.gif\' />')" />
</dd>
<dd>
<img src="img/ton.gif" onclick="selectDora('<img src=\'img/ton.gif\' />,', '<img src=\'img/ton.gif\' />')" />
<img src="img/nan.gif" onclick="selectDora('<img src=\'img/nan.gif\' />,', '<img src=\'img/nan.gif\' />')" />
<img src="img/sha.gif" onclick="selectDora('<img src=\'img/sha.gif\' />,', '<img src=\'img/sha.gif\' />')" />
<img src="img/pei.gif" onclick="selectDora('<img src=\'img/pei.gif\' />,', '<img src=\'img/pei.gif\' />')" />
<img src="img/haku.gif" onclick="selectDora('<img src=\'img/haku.gif\' />,', '<img src=\'img/haku.gif\' />')" />
<img src="img/hatsu.gif" onclick="selectDora('<img src=\'img/hatsu.gif\' />,', '<img src=\'img/hatsu.gif\' />')" />
<img src="img/chun.gif" onclick="selectDora('<img src=\'img/chun.gif\' />,', '<img src=\'img/chun.gif\' />')" />
</dd>
</dl>
<input type="submit" value="配牌入力へ" />
</form>
</div>
</body>
</html>
