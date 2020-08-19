<?php
session_start();
include('include/header.php');
include('include/navbar.php');
include('include/topbar.php');
?>

<div class="container-fluid">
    <!-- Data table example  -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Post </h6>
        </div>
        <div class="card-body">
            <?php
                $conn = mysqli_connect("localhost","root","","php_maysupply");

                if(isset($_POST['edit_btn'])){

                    $id = $_POST['edit_id_post'];
                    $query_product = "SELECT * FROM post WHERE post_id = '$id' ";
                    $query_run = mysqli_query($conn, $query_product);

                    foreach($query_run as $row)
                    {
                        ?>
                        <form action="post_code.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="edit_id_post" value="<?php echo $row['post_id'] ?>" >
                            <div class="form-group">
                                <input type="file" class="form-control input-file" id="filebutton"  value="<?php echo $row['image_name']?>"
                                        name="edit_image" placeholder="Image">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['category_name']?>"
                                    name="edit_category_name" placeholder="Category Name">
                            </div>   
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['post_title']?>"
                                    name="edit_post_title" placeholder="Post Title">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['post_content']?>"
                                    name="edit_post_content" placeholder="Post Content">
                            </div>
                            <a href="post.php" class="btn btn-danger"> CANCEL</a>
                            <button class="btn btn-primary" name="updatebtn">UPDATE</button>
                        </form>

                    <?php
                            }
                        }
                    ?>


        </div>
    </div>
</div>


<?php
    include('include/script.php');
?>