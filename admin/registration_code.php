<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$username = $password = $email = $user_password = '';

$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "INSERT INTO users (username, email, password) 
		VALUES ('$username','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: login.php");
}
else
{
	echo "Error :".$sql;
}
?>