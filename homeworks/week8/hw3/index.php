<?php

require_once('conn.php');
// transaction指令
$conn->autocommit(FALSE);
$conn->begin_transaction();
// $conn->query("update from money set amount = 20");
// $conn->query("update from money set sum = 10");


// 在這個sql加上update
$stmt = $conn -> prepare("SELECT amount from products where id=1 for update" );
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows>0) {
		
		$row = $result->fetch_assoc();
		echo "amount:", $row['amount'];

		if($row['amount'] > 0 ){
			$stmt = $conn -> prepare("UPDATE products SET amount = amount -1 where id = 1" );
			if($stmt -> execute()){
				echo '購買成功';
			}
		}

	}
	// commit transaction
$conn->commit();
$conn->close();


?>
