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