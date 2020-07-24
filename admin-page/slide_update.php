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
            <h6 class="m-0 font-weight-bold text-primary">Edit Slides Image</h6>
        </div>
        <div class="card-body">
            <?php
                $conn = mysqli_connect("localhost","root","","php_maysupply");

                if(isset($_POST['edit_btn'])){

                    $id = $_POST['edit_id_slide'];
                    $query_product = "SELECT * FROM slides WHERE slide_id = '$id' ";
                    $query_run = mysqli_query($conn, $query_product);

                    foreach($query_run as $row)
                    {
                        ?>
                        <form action="slide_code.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="edit_id_slide" value="<?php echo $row['slide_id'] ?>" >
                        
                            <div class="form-group">
                                <input id="filebutton" class="form-control input-file" type="file" value="<?php echo $row['slide_name']?>"
                                        name="edit_slide" placeholder="Image">
                            </div>
                            <a href="slide.php" class="btn btn-danger"> CANCEL</a>
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