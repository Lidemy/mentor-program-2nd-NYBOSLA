<!-- 判斷有沒有登入 -->
  <?
$is_login = false;
$user_id = '';

if (isset($_COOKIE["user_id"]) && !empty($_COOKIE['user_id'])) {
	$is_login = true;
	$user_id = $_COOKIE["user_id"];

	// echo "login";
} else {
	// echo "登入失敗";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>留言板</title>
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
  <style type="text/css">
   .board__main{
   	width: 500px;
   	margin: 0 auto;
   }

   .board__form-input >input{
   	width: 50%;
   }
   .board__form-textarea > textarea {
   	width: 100%;
   	height: 200px;
   	margin-top: 10px;
   }
   .board__form-submit{
   	padding: 10px 10px;
   	background:#4788F0;
   	color: white;
   }
   .comment{
   	padding: 15px;
   	/* background-color: red; */
   	border: 1px solid rgba(0,0,0,0.5);

   }
   .comment ~ .comment{
   	margin-top: 10px;
   }
   .comment__header{
   	border-bottom: 1px solid rgba(0,0,0,0.5);
   	padding-bottom: 10px;
   	margin-bottom: 10px;
   	display: flex;
   	justify-content: space-between;
   }
   .board__comments{
   	margin-top: 25px;

   }
   .board__subcomments{
   	margin-top: 15px;
   	padding-left: 20px;

   }
   .board__subcomments .comment{
   	border: none;
   	padding: 0px;
   	background: #9ACAEC;
   }
   .board__subcomments .board__form{
   	margin-top: 15px;
   }
   .board__subcomments .board__form-textarea >textarea{
   	width: 200px;
   	height: 100px;
   }
  </style>
  </head>

  <body>
    <?php

require_once 'NYBOSLA_conn.php';

// 查詢主要留言筆數

// 確認總頁數

// 查詢分頁

?>

    <!-- 留言板 -->
  	<div class="board__main">
      <?
          if (!$is_login) {
	     ?>
          <a href="NYBOSLA_register.php">註冊</a>
          <a href="NYBOSLA_login.php">登入</a>
      <?} else {
	     ?>
          <a href="NYBOSLA_logout.php">登出</a>

      <?}

      ?>



      <!-- <a href="NYBOSLA_register.php">註冊</a>
       <a href="NYBOSLA_login.php">登入</a>
      <a href="NYBOSLA_logout.php">登出</a> -->
  		<h1 class="board__title">
  			留言板
  		</h1>

  		<div class="board__form">

  			<form method="POST" action="NYBOSLA_add_comment.php">
          <!-- 插入留言 -->

  				<div class="board__form-input">
  					<input type="text" placeholder="暱稱" name="nickname">
  				</div>
  				<div class="board__form-textarea">
  					<textarea placeholder="留言內容" name="content"></textarea>
  				</div>
  				<input type="hidden" name="parent_id" value="0">

          <?
            if ($is_login) {
            	echo '<input class="board__form-submit" type="submit" name="送出">';
            } else {
            	echo '<input class="board__form-submit" type="submit" value="請先登入" disabled>';

            }

            ?>


          <!-- <input type="hidden" name="parent_id" value="0">插入一個看不到的東西拿到資料 -->


  			</form>
  		</div>

      <!-- 子留言區塊 -->

		<div class="board__comments">

      <!-- 顯示所有留言 -->
      <?
// 連接conn
require_once 'NYBOSLA_conn.php';
// 撈parent_id=0
$sql = "SELECT * FROM comments where parent_id = 0 order by created_at DESC";
$result = $conn->query($sql);

// 把資料顯示出來
while ($row = $result->fetch_assoc()) {

	?>

      <!-- 輸出留言的區塊 -->
      <div class="comment">
          <div class="comment__header">
            <div class="comment__author"><?echo $row['nickname'] ?></div>
            <div class="comment__timestamp"><?echo $row['created_at'] ?></div>
          </div>
          <div class="comment__content"><?echo $row['content'] ?></div>



          <div class="board__subcomments">

        <?
	$parent_id = $row['id'];
	$sql_child = "SELECT * FROM comments where parent_id = $parent_id order by created_at DESC";

	// 這邊$result變數要記得改，不可以跟上面一樣
	// query($sql)的$sql也是要改
	$result_child = $conn->query($sql_child);
	// while把資料顯示出來
	// $row也要記得改$sub_comment
	while ($sub_comment = $result_child->fetch_assoc()) {

		?>
        <!-- <?echo $sub_comment['nickname'] ?> -->
        <!-- 抓取value值輸出 -->
            <div class="comment">
            <div class="comment__header">
              <div class="comment__author"><?echo $sub_comment['nickname'] ?></div>
              <div class="comment__timestamp"><?echo $sub_comment['created_at'] ?></div>
            </div>
            <div class="comment__content"><?echo $sub_comment['content'] ?></div>
            <div class="board__subcomments">

              </div>
          </div>

          <?

	}

	?>



          <div class="board__form">
            <!-- 這邊要記得加上表單送出的post -->
              <form method="POST" action="NYBOSLA_add_comment.php">
             <div class="board__form-input">
               <input type="text" placeholder="暱稱" name="nickname">
              </div>
              <div class="board__form-textarea">
                <textarea placeholder="留言內容" name="content"></textarea>
             </div>

            <!-- 抓取parent_id的value到資料庫 -->
                  <input type="hidden" name="parent_id" value="<?echo $row['id'] ?>">

                  <?
                    	if ($is_login) {
                    		echo '<input class="board__form-submit" type="submit" name="送出">';
                    	} else {
                    		echo '<input class="board__form-submit" type="submit" value="請先登入" disabled>';

                    	}

                  ?>
                  <!-- <input class="board__form-submit" type="submit" name="送出"> -->
              </form>
              </div>

          </div>
      </div>



      <?

}

?>


  	</div>




  </body>
</html>