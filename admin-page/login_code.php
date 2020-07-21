<?php

session_start();
require_once('security.php');
$conn = mysqli_connect("localhost","root","","php_maysupply");

    if(isset($_POST['login_btn']))
    {
        $email_login = $_POST['email']; 
        $password_login = $_POST['password']; 

        $query_login = "SELECT * FROM admin WHERE email='$email_login' AND password='$password_login' LIMIT 1";
        $query_run = mysqli_query($conn, $query_login);

    if(mysqli_fetch_array($query_run))
    {
            $_SESSION['username'] = $email_login;
            header('Location: index.php');
    } 
    else
    {
            $_SESSION['status'] = "Email / Password is Invalid";
            $_SESSION['status_code'] = "error";
            header('Location: login.php');
    }
        
    }
?>