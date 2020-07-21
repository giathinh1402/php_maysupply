<!--
Here, we write code for registration.
-->
<?php

// regiser and check to add admin
	session_start();

	require_once('connection.php');
	
		$conn = mysqli_connect("localhost","root","","php_maysupply");
		$query = "SELECT * FROM admin";
		$query_run = mysqli_query($conn, $query);
                
	if(isset($_POST['registerbtn'])){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$cpassword = $_POST['confirmpassword'];


		if($password === $cpassword){
			if($query_run)
            {
				
                // echo "Saved";
                $_SESSION['status'] = "Admin Profile Added";
                $_SESSION['status_code'] = "success";
				header('Location: register.php');
				$sql = "INSERT INTO admin (username, email, password) 
					VALUES ('$username','$email','$password')";
				$result = mysqli_query($conn, $sql);
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
				header('Location: register.php'); 
				
            }
			
			
		}else{
			$_SESSION['status'] = "Password doesn't match";
			header('location: register.php');
		}
			
	}

//update user admin
if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

	$query_update = "UPDATE admin SET username='$username', email='$email', password='$password' WHERE id='$id' ";
	$query_run = mysqli_query($conn, $query_update);
    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }
}

//delete user admin

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query_delete = "DELETE FROM admin WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query_delete);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}

?>