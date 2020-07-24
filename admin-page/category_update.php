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
            <h6 class="m-0 font-weight-bold text-primary">Edit Category
            </h6>
        </div>
        <div class="card-body">
            <?php
                $conn = mysqli_connect("localhost","root","","php_maysupply");

                if(isset($_POST['edit_btn'])){

                    $id = $_POST['edit_id_category'];
                    $query_category = "SELECT * FROM categories WHERE category_id = '$id' ";
                    $query_run = mysqli_query($conn, $query_category);

                    foreach($query_run as $row)
                    {
                        ?>
                        <form action="category_code.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="edit_id_category" value="<?php echo $row['category_id'] ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['category_name']?>"
                                    name="edit_category_name" placeholder="Category Name">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control input-file" id="filebutton"
                                    value="<?php echo $row['category_image']?>" 
                                    name="edit_image" placeholder="Image">
                            </div>  
                            <a href="categories.php" class="btn btn-danger"> CANCEL</a>
                            <button class="btn btn-primary" name="updatebtn">Update</button>
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