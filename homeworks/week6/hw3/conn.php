<!-- 基本連線 -->
<?

$servername = '166.62.28.131';
$username = 'student2nd';
$password = 'mentorstudent123';
$dbname = "mentor_program_db";


$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf-8");

if ($conn->connect_error) {
	die('connection failed:".conn->connect_error');
}

?>