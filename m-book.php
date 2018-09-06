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
		

		<!-- 查看留言 -->
		<div class="msg">
			<div class="info">
				<span class="user">用户名</span>
				<span class="time">2017-1-1 11:11:11</span>
			</div>
			<div class="content">
				我是留言，我是留言，我是留言，我是留言；
			</div>
		</div>
		<div class="msg">
			<div class="info">
				<span class="user">用户名</span>
				<span class="time">2017-1-1 11:11:11</span>
			</div>
			<div class="content">
				我是留言，我是留言，我是留言，我是留言；
			</div>
		</div>
		<div class="msg">
			<div class="info">
				<span class="user">用户名</span>
				<span class="time">2017-1-1 11:11:11</span>
			</div>
			<div class="content">
				我是留言，我是留言，我是留言，我是留言；
			</div>
		</div>
		
	<div/>
</body>
</html>