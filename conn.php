
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assign";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// session_start();
// if(isset($_SESSION['groupNumber'])){
// }
// else{
//   header("Location:login.php");
// }

?>