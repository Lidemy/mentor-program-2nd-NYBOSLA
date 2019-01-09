<?
// 清空
setcookie("user_id", "", time() + 3600 * 24);
// 清空
session_destroy();
header('Location:index.php');

?>