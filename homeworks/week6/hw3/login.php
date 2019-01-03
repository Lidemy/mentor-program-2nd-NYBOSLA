
<?
session_start();
// 連線conn
require_once 'conn.php';
$error_message = '';


if (!empty($_POST['username'])) {


	$username = $_POST['username'];
	$password = $_POST['password'];
	$_SESSION['user_id']=$user_id;
	echo $password;

	// prepare statement
	$stmt = $conn->prepare("SELECT * FROM NYBOSLA_users where username=? and password =?");
	$stmt->bind_param("ss",$username,$password);
	$stmt->execute();
	// session設定
	// $_SESSION['user_id']=$row['id'];
	

	echo mysqli_error($conn);
	// SQL設定
	// $sql = " SELECT * FROM users where username='$username' and password ='$password' ";
	$result = $stmt->get_result();
	session_start();
	
	
	

	if ($result->num_rows>0) {
		
		$row = $result->fetch_assoc();
		// print_r($row);

		// 設定一個 24 小時之後會過期的 Cookie

		setcookie("user_id", $row['id'], time() + 3600 * 24);

		if (password_verify($password , $hash_password)){
		   echo "密码匹配";
		}else{  
		   echo "密码错误";
		}


		header('Location:index.php');
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
	<form action="login.php" method="POST">
		<div>username:<input type="text" name="username"></div>
		<br>

		<div>password:<input type="current-password" name="password"></div>
		<br>



		<br>

		<input type="submit" placeholder="送出">



	</form>
</body>
</html>