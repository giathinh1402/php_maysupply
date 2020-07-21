<?php
session_start();

require_once('connection.php');

    $conn = mysqli_connect("localhost","root","","php_maysupply");


if($conn)
{
}
else
{
    echo "not connect";
}

if(!$_SESSION['username'])
{
    header('Location: login.php');
}
?>