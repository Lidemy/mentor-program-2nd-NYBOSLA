
<?
	// 連線conn
	require_once('conn.php');
	// 變數抓取name

	if( isset ($_POST['username']) && isset($_POST['password']) && isset($_POST['nickname'])){
		$nickname = $_POST['nickname'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$hash_password = password_hash($password, PASSWORD_BCRYPT);//使用BCRYPT算法加密密码
		// string password_hash ( string $password , int $algo [, array $options ] )
		echo $hash_password;

		// SQL設定
		$sql ="INSERT INTO NYBOSLA_users (username , password , nickname) VALUES ('$username','$hash_password','$nickname')";

		

		$conn->query($sql);
		$conn->close();
		// header('Location:index.php');


		
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<H2>註冊</H2>
	<form action="handle_register.php" method="POST">
		<div>username:<input type="text" name="username"></div>
		<br>

		<div>password:<input type="password" name="password"></div><br>

		<div>暱稱：<input type="text" name="nickname"></div>

		<br>

		<input type="submit" placeholder="送出">
		


	</form>
</body>
</html>