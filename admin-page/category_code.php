<?php

// regiser and check to add admin
	session_start();

	require_once('connection.php');
	
		$conn = mysqli_connect("localhost","root","","php_maysupply");
		$query = "SELECT * FROM categories";
		$query_run = mysqli_query($conn, $query);
                
	if(isset($_POST['addbtn'])){
			$category_name = $_POST['category_name'];
			$description = $_POST['description'];
			
		if($category_name == ''){
            $_SESSION['status'] = "category not add";
			header('location: categories.php');
			
		}else{
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Category Added";
                $_SESSION['status_code'] = "success";
				header('Location: categories.php');
				$sql = "INSERT INTO categories (category_name, description) 
					VALUES ('$category_name','$description')";
				$result = mysqli_query($conn, $sql);
            }
            else 
            {
                $_SESSION['status'] = "Category Not Added";
				header('Location: categories.php'); 
            }
		}
			
	}

    //update categories
    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id_category'];
        $category_name = $_POST['edit_category_name'];
		$description = $_POST['edit_description'];
    
        $query_update = "UPDATE categories SET category_name='$category_name', description='$description' WHERE category_id='$id' ";
        $query_run = mysqli_query($conn, $query_update);
        if($query_run)
        {
            $_SESSION['status'] = "Your Data is Updated";
            $_SESSION['status_code'] = "success";
            header('Location: categories.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT Updated";
            $_SESSION['status_code'] = "error";
            header('Location: categories.php'); 
        }
    }
//delete categories

if(isset($_POST['delete-btn']))
{
    $id = $_POST['delete_category_id'];

    $query_delete = "DELETE FROM categories WHERE category_id = '$id' ";
    $query_runs = mysqli_query($conn, $query_delete);

    if($query_runs)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: categories.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: categories.php'); 
    }    
}

?>