<?
	include_once('NYBOSLA_conn.php');
	// 查看是否有取到值
	// print_r($_POST);
	$nickname = $_POST['nickname'];
	$content = $_POST['content'];
	$parentId = $_POST['parent_id'];

	$sql = "INSERT INTO comments (nickname, content, parent_id) VALUES('$nickname', '$content', $parentId)";

	// 顯示是否成功的程式碼
	// if ($conn->query($sql) === TRUE) {
    //    echo "New record created successfully";
	// } else {
	//     echo "Error: " . $sql . "<br>" . $conn->error;
	// }

	
	$conn->query($sql);
	$conn->close();
	// 成功的話導回去
	header('Location: NYBOSLA_index.php');

?>