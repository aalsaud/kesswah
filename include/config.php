<?php
//Design by : Abdulaziz Al-MAzrou



$db_host = "localhost";

## ÇÓã ÞÇÚÏÉ ÇáÈíÇäÇÊ
$db_name = "Kesswah";


$db_pass = "root";

## ÇÓã ãÓÊÎÏã ÇáÞÇÚÏå
$db_user = "root";

$timeoutseconds 	= 100;

$site               = "Kesswah ";   // Your site name

//////////////////////////////////////




$requ_connect = mysql_connect("$db_host","$db_user","$db_pass")  or die ("mysql_error()"." .. لم يتم الاتصال في قاعدة البينات");
mysql_query("set names 'utf8';");
mysql_select_db($db_name,$requ_connect) or die ("mysql_error()"." .. توجد مشكلة في رقم المستخدم أو الرقم السري للقاعدة البيانات ");




?>