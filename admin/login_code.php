<!--
Here, we write code for login.
-->
<?php

require_once('connection.php');
$email = $password;


$email = $_POST['email'];
$password = md5($_POST['password']);
$sql = "SELECT * FROM users WHERE email ='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		$email = $row["email"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
		//status = admin

	}
	header("Location: welcome.php");
}
else //if
{
	//status = admin
	//lcation: admin.php
	echo "Invalid email or password";
	
} //else
?>