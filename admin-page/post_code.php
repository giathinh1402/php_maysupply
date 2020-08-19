<?php

// regiser and check to add admin
	session_start();

	require_once('connection.php');
	
		$conn = mysqli_connect("localhost","root","","php_maysupply");
		$query = "SELECT * FROM post";
        $query_run = mysqli_query($conn, $query);

    // upload data for product         
	if(isset($_POST['addbtn'])){
            $img = $_FILES['image_name']['name'];
            $category = $_POST['category'];
            $post_title = $_POST['post_title'];
            $post_content = $_POST['post_content'];


            // check validate for upload image
            $img_type = array('image/jpg','image/png','image/jpeg');
            $validate_img_extension = in_array($_FILES['image_name']['type'], $img_type);

        if($validate_img_extension)
        {
            // if(file_exists("upload/" .$_FILES['image_name']['name']) )
            // {
            //     $store = $_FILES['image_name']['name'];
            //     $_SESSION['status'] = "Image already exists . '$store.'";
            //     header('location: product.php');
                
            // }else{
                $sql = "INSERT INTO post (image_name, category_name, post_title, post_content) 
                        VALUES ('$img','$category','$post_title','$post_content')";
                    $query_run = mysqli_query($conn, $sql);
                
                    if($query_run)
                    {
                        move_uploaded_file($_FILES["image_name"]["tmp_name"], "upload/" .$_FILES["image_name"]["name"]);
                        
                        // echo "Saved";
                        $_SESSION['status'] = "Post Added";
                        $_SESSION['status_code'] = "success";
                        header('Location: post.php');
                        
                    }
                    else 
                    {
                        $_SESSION['status'] = "Post Not Added";
                        header('Location: post.php'); 
                    }
            // }
        }
        else{
            $_SESSION['status'] = "Only Type Image PNG, JPG, JPEG";
            header('Location: post.php'); 
        }	
	}

    //update product
    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id_post'];
        $image = $_FILES['edit_image']['name'];
        $category = $_POST['edit_category_name'];
        $post_title = $_POST['edit_post_title'];
        $post_content = $_POST['edit_post_content'];
        

        $query = " SELECT * FROM post WHERE post_id = '$id'";
        $query_run = mysqli_query($conn, $query);

        // check validate for upload image
        // $img_type = array('image/jpg','image/png','image/jpeg');
        // $validate_img_extension = in_array($_FILES['edit_image']['type'], $img_type);

       
        // if($validate_img_extension)
        // {
            foreach($query_run as $row){
                if($image == NULL){
                    //update with old image
                    $image = $row['image_name']; 
                }else{
                    //
                }
            }
            $query_update = "UPDATE post SET image_name='$image', category_name='$category',
                           post_title ='$post_title', post_content='$post_content' 
                            WHERE post_id='$id' ";
            $query_run = mysqli_query($conn, $query_update);
                if($query_run)
                {
                    if($image = NULL){
                        $_SESSION['status'] = "Your Data is Updated With Old Image";
                        header('Location: post.php');
                    }
                    else{
                        move_uploaded_file($_FILES["edit_image"]["tmp_name"], "upload/".$_FILES["edit_image"]["name"]);
                        $_SESSION['status'] = "Your Data is Updated ";
                        header('Location: post.php');
                    }
                    
                }
                else
                {
                    $_SESSION['status'] = "Your Data is NOT Updated";
                    header('Location: post.php'); 
                }
        // }
        // else{
        //     $_SESSION['status'] = "Only Type Image PNG, JPG, JPEG";
        //     header('Location: product.php'); 
        // }	
    }
    
//delete product

if(isset($_POST['delete-btn']))
{
    $id = $_POST['delete_post_id'];

    $query_delete = "DELETE FROM post WHERE post_id = '$id' ";
    $query_runs = mysqli_query($conn, $query_delete);

    if($query_runs)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: post.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: post.php'); 
    }    
}

?>