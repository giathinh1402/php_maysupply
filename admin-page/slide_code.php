<?php

// regiser and check to add admin
	session_start();

	require_once('connection.php');
	
		$conn = mysqli_connect("localhost","root","","php_maysupply");
		$query = "SELECT * FROM slides";
        $query_run = mysqli_query($conn, $query);

    // upload data for slide         
	if(isset($_POST['addbtn'])){
            $img = $_FILES['slide_name']['name'];

            // check validate for upload image
            $img_type = array('image/jpg','image/png','image/jpeg');
            $validate_img_extension = in_array($_FILES['slide_name']['type'], $img_type);

        if($validate_img_extension )
        {
            
                $sql = "INSERT INTO slides (slide_name) 
                        VALUES ('$img')";
                    $result = mysqli_query($conn, $sql);
                
                    if($query_run)
                    {
                        move_uploaded_file($_FILES["slide_name"]["tmp_name"], "upload/" .$_FILES["slide_name"]["name"]);
                        
                        // echo "Saved";
                        $_SESSION['status'] = "Slide Image Added";
                        $_SESSION['status_code'] = "success";
                        header('Location: slide.php');
                        
                    }
                    else 
                    {
                        $_SESSION['status'] = "Slide Image Not Added";
                        header('Location: slide.php'); 
                    }
            
        }
        else{
            $_SESSION['status'] = "Only Type Image PNG, JPG, JPEG";
            header('Location: slide.php'); 
        }	
	}

    //update slide
    if(isset($_POST['updatebtn']))
    {
        $id = $_POST['edit_id_slide'];
        $image = $_FILES['edit_slide']['name'];     
        
        // check validate for upload image
            $img_type = array('image/jpg','image/png','image/jpeg');
            $validate_img_extension = in_array($_FILES['edit_slide']['type'], $img_type);

        if($validate_img_extension)
        {
            $slide_query = "SELECT * FROM slides WHERE slide_id = '$id' ";
            $slide_query_run = mysqli_query($conn, $slide_query);

            foreach($slide_query_run as $rows){
                if($image == NULL)
                {
                    //update with exists image
                    $image = $rows['slide_name'];
                }
                else{
                    //delete old image and update new image to folder 
                    if($image_path = "upload/". $rows['slide_name'])
                    {
                        unlink($image_path);
                        $image_data = $image;
                    }
                } 
            }
        
            $query_update = "UPDATE slides SET slide_name='$image' WHERE slide_id='$id' ";
            $query_run = mysqli_query($conn, $query_update);
            if($query_run)
            {
                if($image == NULL)
                {
                    //update with exists image
                    $_SESSION['status'] = "Your Data is Updated With Old Image";
                    $_SESSION['status_code'] = "success";
                    header('Location: slide.php');
                }
                else{

                    //delete old image and update new image
                    move_uploaded_file($_FILES["edit_slide"]["tmp_name"], "upload/".$_FILES["edit_slide"]["name"]);
                    $_SESSION['status'] = "Your Data is Updated ";
                    $_SESSION['status_code'] = "success";
                    header('Location: slide.php'); 
                }
            }
            else
            {
                $_SESSION['status'] = "Your Data is NOT Updated";
                $_SESSION['status_code'] = "error";
                header('Location: slide.php'); 
            }
        }
        else{
            $_SESSION['status'] = "Only Type Image PNG, JPG, JPEG";
            header('Location: slide.php'); 
        }
    }
    
// //delete slide

if(isset($_POST['delete-btn']))
{
    $id = $_POST['delete_slide_id'];

    $query_delete = "DELETE FROM slides WHERE slide_id = '$id' ";
    $query_runs = mysqli_query($conn, $query_delete);

    if($query_runs)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: slide.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: slide.php'); 
    }    
}

?>