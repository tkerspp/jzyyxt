<?php
session_start();
$stuno = $_POST["username"];
$stupassword = strtoupper(md5($_POST["password"]));
$_SESSION['stuno'] = null;

include 'sys_conf.inc';

$connection = @mysql_connect($DBHOST, $DBUSER,$DBPWD) or die ("无法连接数据库！");
@mysql_query("set names 'gb2312");
@mysql_select_db($DBNAME) or die("无法选择数据库！");
$query = "select * from yq_info where stuno='$stuno'";
$result = @mysql_query($query,$connection) or die("数据库请求失败！");
$password = "stupassword";
if($row = mysql_fetch_array($result)) {
	if($row[$password]==$stupassword) {
		echo "<script language = 'javascript'> window.alert('登陆成功~');</script> ";
		echo "<meta http-equiv = 'Refresh' content='0; url = main.php'>";
	}else {
		echo "<script language = 'javascript'> window.alert('密码错误~');</script> ";
		echo "<meta http-equiv = 'Refresh' content='0;url = register.php'>";
	}
}



?>