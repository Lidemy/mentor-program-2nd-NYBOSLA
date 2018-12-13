<!-- 基本連線 -->
<?

$servername = 'localhost';
$username = 'student2nd';
$password = '';
$dbname = "	mentor_program_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die('connection failed:".conn->connect_error');
}

?>