<?php
//$db_connect = mysql_connect('dhcp-143-201.sfc.wide.ad.jp', 'neco', 'nextneco')
$db_connect = mysql_connect('localhost', 'root', 'larcy1219')
  or die('I cannot connect to the database because: ' . mysql_error());

mysql_select_db('rgws')
  or die('I cannot connect to the database because: ' . mysql_error());

mysql_query('SET NAMES UTF-8');
?>
