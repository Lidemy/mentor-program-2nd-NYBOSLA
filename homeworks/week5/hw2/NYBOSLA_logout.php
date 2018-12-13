<?
// 清空
setcookie("user_id", "", time() + 3600 * 24);
header('Location:NYBOSLA_index.php');

?>