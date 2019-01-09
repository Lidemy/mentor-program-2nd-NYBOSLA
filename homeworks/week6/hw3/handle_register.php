<?
	// 連線conn
	require_once('conn.php');
	// 變數抓取name
	$nickname = $_POST['nickname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
;


	// SQL設定
	$sql ="INSERT INTO NYBOSLA_users (username , password , nickname) VALUES ('$username','$password','$nickname')";

	

	$conn->query($sql);
	$conn->close();
	header('Location:index.php');

?>