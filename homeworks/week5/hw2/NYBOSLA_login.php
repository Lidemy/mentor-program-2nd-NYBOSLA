
<?
// 連線conn
require_once 'NYBOSLA_conn.php';
$error_message = '';

if (!empty($_POST['username'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	// SQL設定
	$sql = " SELECT * FROM users where username='$username' and password ='$password' ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

		$row = $result->fetch_assoc();

		// 設定一個 24 小時之後會過期的 Cookie

		setcookie("user_id", "$row = ['id']", time() + 3600 * 24);

		header('Location:NYBOSLA_index.php');
	} else {
		$error_message = '帳號或密碼錯誤';
	}
	$conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOG IN</title>
</head>
<body>
	<h2>登入</h2>
	<?
if ($error_message !== "") {
	echo $error_message;
}
?>
	<form action="NYBOSLA_login.php" method="POST">
		<div>username:<input type="text" name="username"></div>
		<br>

		<div>password:<input type="current-password" name="password"></div>
		<br>



		<br>

		<input type="submit" placeholder="送出">



	</form>
</body>
</html>