<?
	// 連線conn
	require_once('NYBOSLA_conn.php');
	// 變數抓取name
	$nick = $_POST['nickname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	// SQL設定
	$sql ="INSERT INTO users (username , password , nickname) VALUEs ('$username','$password','$nickname')";

	

	$conn->query($sql);
	$conn->close();
	header('Location:NYBOSLA_index.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<H2>註冊</H2>
	<form action="NYBOSLA_handle_register.php" method="POST">
		<div>username:<input type="text" name="username"></div>
		<br>

		<div>password:<input type="password" name="password"></div><br>

		<div>暱稱：<input type="text" name="nickname"></div>

		<br>

		<input type="submit" placeholder="送出">
		


	</form>
</body>
</html>