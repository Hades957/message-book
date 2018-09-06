<?php

include("input.php");

//获取信息
$content = $_POST["content"];
$user = $_POST["user"];

var_dump($_POST);

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

	






	var_dump( $content, $user );
?>