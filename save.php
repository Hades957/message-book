<?php

include("input.php");
include("connect.php");

//获取信息
$content = $_POST["content"];
$user = $_POST["user"];


$input = new input();


//关键字过滤
$is = $input->post( $content );
if(	$is == false ){
	die("留言内容的数据不正确！");
}

$is = $input->post( $user );
if(	$is == false ){
	die("留言人的数据不正确！");
}

//将用户输入内容插入数据库msg
$time = time();
ECHO $time;
$sql = "INSERT INTO msg (content, user, intime) values ('{$content}','{$user}','{$time}')";
$is = $db->query($sql);	

header("location:m-book.php")




	//var_dump( $content, $user );
?>