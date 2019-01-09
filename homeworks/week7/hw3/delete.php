<?php
	require_once('./conn.php');
	
	$id = $_GET['id'];
	echo $id;
	// 把id get帶上來的那個id刪掉
	$sql ="DELETE FROM nycomments WHERE id =" . $id;

	// 執行sql $conn->query($sql);
	// 設定一個$result變數 = 執行sql
	$result = $conn->query($sql);

	if($result){
	   // 這邊可以顯示成功或者導引到admin
		header('Location: ./index.php');
	}else{
		// $conn->error;原因
		echo "failed" . $conn->error;
	}

	

?>