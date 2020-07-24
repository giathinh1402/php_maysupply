<?php

// regiser and check to add admin
	session_start();

	require_once('connection.php');
	
		$conn = mysqli_connect("localhost","root","","php_maysupply");
		$query = "SELECT * FROM categories";
		$query_run = mysqli_query($conn, $query);
                
	if(isset($_POST['addbtn'])){
			$category_name = $_POST['category_name'];
            $img = $_FILES['add_image']['name'];
            
			
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
				$sql = "INSERT INTO categories (category_name, category_image) 
					VALUES ('$category_name','$img')";
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
    if(isset($_POST['updatebtn'])){

        $id = $_POST['edit_id_category'];
        $category_name = $_POST['edit_category_name'];
        $image = $_FILES['edit_image']['name'];

        $query = " SELECT * FROM categories WHERE category_id = '$id'";
        $query_run = mysqli_query($conn, $query);
        
        // check validate for upload image
        $img_type = array('image/jpg','image/png','image/jpeg');
        $validate_img_extension = in_array($_FILES['edit_image']['type'], $img_type);

        if($validate_img_extension)
        {
            foreach($query_run as $row){
                if($image == NULL){
                    //update with old image
                    $image = $row['category_image']; 
                }else{
                    //
                }
            }
            $query_update = "UPDATE categories SET category_name='$category_name', category_image='$image'
                            WHERE category_id='$id' ";
            $query_run = mysqli_query($conn, $query_update);
                if($query_run)
                {
                    if($image == NULL){
                        $_SESSION['status'] = "Your Data is Updated With Old Image";
                        header('Location: categories.php');
                    }
                    else{
                        move_uploaded_file($_FILES["edit_image"]["tmp_name"], "upload/".$_FILES["edit_image"]["name"]);
                        $_SESSION['status'] = "Your Data is Updated ";
                        header('Location: categories.php');
                    }
                }
                else
                {
                    $_SESSION['status'] = "Your Data is NOT Updated";
                    header('Location: categories.php'); 
                }
        }
        else{
            $_SESSION['status'] = "Only Type Image PNG, JPG, JPEG";
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