<?php

// regiser and check to add admin
	session_start();

	require_once('connection.php');
	
		$conn = mysqli_connect("localhost","root","","php_maysupply");
		$query = "SELECT * FROM products";
        $query_run = mysqli_query($conn, $query);

    // upload data for product         
	if(isset($_POST['addbtn'])){
            $product_name = $_POST['products_name'];
            $img = $_FILES['image_name']['name'];
            $price = $_POST['price'];
            $category = $_POST['category_name'];
            $quantity = $_POST['quantity'];
            $description = $_POST['description'];
            
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
                $sql = "INSERT INTO products (products_name, image_name, price, category_name, quantity, description) 
                        VALUES ('$product_name','$img','$price','$category','$quantity','$description')";
                    $query_run = mysqli_query($conn, $sql);
                
                    if($query_run)
                    {
                        move_uploaded_file($_FILES["image_name"]["tmp_name"], "upload/" .$_FILES["image_name"]["name"]);
                        
                        // echo "Saved";
                        $_SESSION['status'] = "Product Added";
                        $_SESSION['status_code'] = "success";
                        header('Location: product.php');
                        
                    }
                    else 
                    {
                        $_SESSION['status'] = "Product Not Added";
                        header('Location: product.php'); 
                    }
            // }
        }
        else{
            $_SESSION['status'] = "Only Type Image PNG, JPG, JPEG";
            header('Location: product.php'); 
        }	
	}

    //update product
    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id_product'];
        $product_name = $_POST['edit_product_name'];
        $image = $_FILES['edit_image']['name'];
        $price = $_POST['edit_price'];
        $category = $_POST['edit_category_name'];
        $quantity = $_POST['edit_quantity'];
        $description = $_POST['edit_description'];

        $query = " SELECT * FROM products WHERE products_id = '$id'";
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
            $query_update = "UPDATE products SET products_name='$product_name', image_name='$image', 
                            price='$price', category_name='$category', quantity='$quantity', description='$description' 
                            WHERE products_id='$id' ";
            $query_run = mysqli_query($conn, $query_update);
                if($query_run)
                {
                    if($image = NULL){
                        $_SESSION['status'] = "Your Data is Updated With Old Image";
                        header('Location: product.php');
                    }
                    else{
                        move_uploaded_file($_FILES["edit_image"]["tmp_name"], "upload/".$_FILES["edit_image"]["name"]);
                        $_SESSION['status'] = "Your Data is Updated ";
                        header('Location: product.php');
                    }
                    
                }
                else
                {
                    $_SESSION['status'] = "Your Data is NOT Updated";
                    header('Location: product.php'); 
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
    $id = $_POST['delete_product_id'];

    $query_delete = "DELETE FROM products WHERE products_id = '$id' ";
    $query_runs = mysqli_query($conn, $query_delete);

    if($query_runs)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: product.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: product.php'); 
    }    
}

?>