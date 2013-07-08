<?php
session_start();
$SaphpUserName = $_COOKIE["SaphpUserName"];
$SaphpPassword = $_COOKIE["SaphpPassword"];
if(!$SaphpUserName || !$SaphpPassword){
header("location: login.php");
}
include("config.php");

extract($_GET);
extract($_POST);
$SafeLogin = "0";
$Sql = "select * from admin Where userid='$SaphpUserName' and ModPassword='$SaphpPassword'";
$Result = mysql_query($Sql);
while ($Row = mysql_fetch_array($Result))
{
$Vail = $Row["cp"];
$SafeLogin = "0";
}
If ($SafeLogin!="0"){
header("location: login.php");
}


?>