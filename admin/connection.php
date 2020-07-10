<!--
in this file we write code for connection with database.
-->
<?php
$conn = mysqli_connect("localhost","root","","php_maysupply");

if(!$conn)
{
	echo "Database connection faild...";
}
?>