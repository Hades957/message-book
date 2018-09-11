<?php
include("connect.php");
//倒序查询msg中的内容
$sql = "SELECT * FROM msg ORDER BY id DESC";
$mysqli_result = $db->query($sql);
if($mysqli_result === false){
	echo "SQL错误";
	exit;
}
$rows = [];
while( $row = $mysqli_result->fetch_array( MYSQLI_ASSOC )){
	$rows[]	= $row;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>留言本</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div class="wrap">
		<!-- 发表留言 -->
		<div class="add">
			<form action="save.php" method="post">
				<textarea name="content" class="content" rows="5" cols="50"></textarea>
				<br/>
				<input name="user" class="user" type="text" name="user" />
				<input class="btn" type="submit" value="发表留言" />
			</form>
		</div>
		
		<?php
		foreach ($rows as $row) {
			# code...
		?>

		<!-- 查看留言 -->
		<div class="msg">
			<div class="info">
				<span class="user"><?php echo $row['user']?></span>
				<span class="time"><?php echo date("Y-m-d H:i:s",$row['intime'])?></span>
			</div>
			<div class="content">
				<?php echo $row['content'];?>
			</div>
		</div>

		<?php
		}
		?>
	<div/>
</body>
</html>

