<?php
	
	require_once('./conn.php');

   $content = $_POST['content'];
  
   // post過來的id
   $parent_id=$_POST['parent_id']; 

   // 測試是否有抓到
   // echo $title . ''.$desc.''.$salary.''.$link; 
   

   // 檢查

   // if(empty($title)|| empty($desc)||empty($salary)||empty($link)){
   // 	die('請檢查資料');
   // 	echo '123';
   // }

   // 連線資料
   // $servername ='localhost';
   // $username ='root';
   // $password ='';
   // $dbname ='jobs';

   // // mysql把資料傳入，連線進去資料庫

   // $conn = new mysqli($servername , $username , $password , $dbname);
   // if($conn -> connect_error){
   // 	die("connection failed" . $conn->connect_error);
   // }
   // 若是畫面沒有出現錯誤，就是成功，可以調整裡面測試看看，ex usernam = root1

   // sql指令
   // 編輯

   $sql = "UPDATE `nycomments` SET content='$content' WHERE id=".$parent_id;

   // $sql_child ="UPDATE `comments` SET content='$content' WHERE id=".$parent_id > 0;
 
   // 測試看看sql是否正確
   // echo $sql;
   // 這個是要執行sql指令

   $result = $conn ->query($sql);
   // 判斷是否成功
   if($result){
   	// 顯示成功
   	// echo "success";
   	// 導到admin.php頁面
      // echo "$id";
   	header('Location: ./index.php');
   }else{
   	echo "failed" . $conn->error;
   }
   // $conn->error;這個可以印出錯誤資料

?>