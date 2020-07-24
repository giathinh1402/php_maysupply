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
            <h6 class="m-0 font-weight-bold text-primary">Edit Products </h6>
        </div>
        <div class="card-body">
            <?php
                $conn = mysqli_connect("localhost","root","","php_maysupply");

                if(isset($_POST['edit_btn'])){

                    $id = $_POST['edit_id_product'];
                    $query_product = "SELECT * FROM products WHERE products_id = '$id' ";
                    $query_run = mysqli_query($conn, $query_product);

                    foreach($query_run as $row)
                    {
                        ?>
                        <form action="product_code.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="edit_id_product" value="<?php echo $row['products_id'] ?>" >
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['products_name']?>"
                                    name="edit_product_name" placeholder="Product Name">
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control input-file" id="filebutton"  value="<?php echo $row['image_name']?>"
                                        name="edit_image" placeholder="Image">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['price']?>"
                                    name="edit_price" placeholder="Price">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['category_name']?>"
                                    name="edit_category_name" placeholder="Category">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['quantity']?>"
                                    name="edit_quantity" placeholder="Quantity">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?php echo $row['description']?>"
                                    name="edit_description" placeholder="Description">
                            </div>
                            <a href="product.php" class="btn btn-danger"> CANCEL</a>
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