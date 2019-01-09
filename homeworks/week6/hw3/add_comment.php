<?
	include_once('conn.php');
	// 查看是否有取到值
	// print_r($_POST);
	
	$nickname = $_POST['nickname'];
	$content = $_POST['content'];
	$parentId = $_POST['parent_id'];
	// 把id取出來
	$user_id = $_COOKIE['user_id'];

	$sql = "INSERT INTO nycomments (user_id, content, parent_id) VALUES( $user_id, '$content', $parentId)";

	// 顯示是否成功的程式碼
	// if ($conn->query($sql) === TRUE) {
    //    echo "New record created successfully";
	// } else {
	//     echo "Error: " . $sql . "<br>" . $conn->error;
	// }
	
	$conn->query($sql);
	$conn->close();


	if($parent_id === 0){
		
		$arr = array('result' =>'success');
		echo json_encode();

	}else{
		header('Location: index.php');
	}
	
	
	

?>