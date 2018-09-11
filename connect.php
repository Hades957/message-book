<?php
//配置数据库信息
$host = "127.0.0.1";
$db_user = "root";
$pwd = "";
$db_name = "php";

//连接数据库
$db = new mysqli($host, $db_user, $pwd, $db_name);
if( $db->connect_error <> 0){
	die("连接数据库失败!");
}

//设定连接编码
$db->query("SET NAMES UTF8");

?>